<?php
// Strict JSON output and CORS for local testing
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Short-circuit preflight
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    echo json_encode(["ok" => true]);
    exit();
}

// Only allow POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["success" => false, "error" => "Method not allowed"]);
    exit();
}

// API configuration (as requested)
const API_KEY = "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";
const ASSISTANT_ID = "asst_EM6NHfEACLBo6A6ziPPTEcdP";
const BASE_URL = "https://api.openai.com/v1";

// Validate environment
if (!function_exists("curl_init")) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "error" => "PHP cURL extension is not enabled. Please enable php-curl in your environment."
    ]);
    exit();
}

// Read input
$inputRaw = file_get_contents("php://input");
$input = json_decode($inputRaw, true);
if (!is_array($input) || !isset($input["message"])) {
    http_response_code(400);
    echo json_encode(["success" => false, "error" => "Invalid request: \"message\" is required"]);
    exit();
}
$messageText = (string)$input["message"];
$threadId = isset($input["thread_id"]) && is_string($input["thread_id"]) ? $input["thread_id"] : null;

// Helper: single HTTP request to OpenAI
function openai_request($method, $path, $body = null) {
    $url = BASE_URL . $path;
    $ch = curl_init($url);

    $headers = [
        "Authorization: Bearer " . API_KEY,
        "Content-Type: application/json",
        "OpenAI-Beta: assistants=v2",
    ];

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_TIMEOUT => 120,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_CUSTOMREQUEST => strtoupper($method),
        CURLOPT_SSL_VERIFYPEER => false, // Temporarily disable for local testing
        CURLOPT_SSL_VERIFYHOST => false, // Temporarily disable for local testing
    ]);

    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }

    // Verbose logging to help diagnose local issues (writes to PHP error log)
    // Uncomment if you want file logs instead
    // $fp = fopen(__DIR__ . '/curl_debug.log', 'a');
    // curl_setopt($ch, CURLOPT_VERBOSE, true);
    // curl_setopt($ch, CURLOPT_STDERR, $fp);

    $response = curl_exec($ch);
    $errno = curl_errno($ch);
    $err = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);
    // if (isset($fp) && is_resource($fp)) fclose($fp);

    if ($response === false) {
        throw new Exception("cURL error (" . $errno . "): " . $err);
    }

    // Accept typical success codes
    if ($httpCode < 200 || $httpCode >= 300) {
        throw new Exception("OpenAI API returned HTTP " . $httpCode . ": " . $response);
    }

    $decoded = json_decode($response, true);
    if (!is_array($decoded)) {
        throw new Exception("Invalid JSON from OpenAI: " . $response);
    }

    return $decoded;
}

try {
    // 1) Create thread if none
    if (!$threadId) {
        $thread = openai_request("POST", "/threads", (object)[]);
        $threadId = $thread["id"];
    }

    // 2) Add message to thread (Assistants v2 expects structured content array)
    $addMsgPayload = [
        "role" => "user",
        "content" => [
            [
                "type" => "text",
                "text" => $messageText,
            ]
        ]
    ];
    openai_request("POST", "/threads/" . rawurlencode($threadId) . "/messages", $addMsgPayload);

    // 3) Create run
    $run = openai_request("POST", "/threads/" . rawurlencode($threadId) . "/runs", [
        "assistant_id" => ASSISTANT_ID,
    ]);
    $runId = $run["id"];

    // 4) Poll for completion
    $maxAttempts = 60; // up to 60s
    for ($i = 0; $i < $maxAttempts; $i++) {
        usleep(800000); // 0.8s
        $runStatus = openai_request("GET", "/threads/" . rawurlencode($threadId) . "/runs/" . rawurlencode($runId));
        $status = isset($runStatus["status"]) ? $runStatus["status"] : "";
        if ($status === "completed") {
            break;
        }
        if (in_array($status, ["failed", "cancelled", "expired"], true)) {
            throw new Exception("Assistant run ended with status: " . $status);
        }
        // keep polling on in_progress, queued, requires_action, etc.
    }

    if (!isset($status) || $status !== "completed") {
        throw new Exception("Assistant run timed out before completion");
    }

    // 5) Retrieve latest assistant message
    $messages = openai_request("GET", "/threads/" . rawurlencode($threadId) . "/messages?order=desc&limit=10");

    $assistantText = "";
    if (isset($messages["data"]) && is_array($messages["data"])) {
        foreach ($messages["data"] as $msg) {
            if (isset($msg["role"]) && $msg["role"] === "assistant" && isset($msg["content"]) && is_array($msg["content"])) {
                foreach ($msg["content"] as $piece) {
                    if (isset($piece["type"]) && $piece["type"] === "text" && isset($piece["text"]["value"])) {
                        $assistantText .= $piece["text"]["value"];
                    }
                }
                if ($assistantText !== "") break; // take the most recent assistant message
            }
        }
    }

    if ($assistantText === "") {
        throw new Exception("No assistant message found in the thread");
    }

    echo json_encode([
        "success" => true,
        "message" => $assistantText,
        "thread_id" => $threadId,
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "error" => $e->getMessage(),
    ]);
}


