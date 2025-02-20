<?php




function sendSnapchatSignupEvent($pixelId, $accessToken, $userPhoneNumber, $eventTime, $userIpAddress, $userAgent) {
    // Snapchat API endpoint
    $url = "https://tr.snapchat.com/v2/conversion";

    // Construct the payload
    $payload = [
        "pixel_id" => $pixelId,
        "events" => [
            [
                "event_type" => "SIGN_UP",
                "event_conversion_type" => "WEB",
                "event_tag" => "signup",
                "event_meta" => [
                    "phone_number" => hash("sha256", $userPhoneNumber),
                    "ip_address" => $userIpAddress,
                    "user_agent" => $userAgent,
                    "timestamp" => $eventTime
                ]
            ]
        ]
    ];

    // Convert payload to JSON
    $data = json_encode($payload);

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Execute cURL request and get response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Return response or error message
    if (isset($error_msg)) {
        return $error_msg;
    } else {
        return $response;
    }
}

// Example usage
$pixelId = "aa10b33a-1621-44ed-b469-ec4e1373d01e";
$accessToken = "eyJhbGciOiJIUzI1NiIsImtpZCI6IkNhbnZhc1MyU0hNQUNQcm9kIiwidHlwIjoiSldUIn0.eyJhdWQiOiJjYW52YXMtY2FudmFzYXBpIiwiaXNzIjoiY2FudmFzLXMyc3Rva2VuIiwibmJmIjoxNzAyMjQ2NjYyLCJzdWIiOiI1ZDQ0NGVmZS1mYmFlLTQxODctYjgyMC01OWFlNDkwMmI2NjJ-UFJPRFVDVElPTn4wMTNlMzFhZi04NTY2LTQwYWEtYjZiMi00OWY2MDgyMjQ5YmQifQ.WLFurBRhdrzn_XIn4npYpKQgP4WYF69hYUJOUU-MHOk";
$userPhoneNumber = "966568430828"; // User's phone number
$eventTime = time(); // Current timestamp
$userIpAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$response = sendSnapchatSignupEvent($pixelId, $accessToken, $userPhoneNumber, $eventTime, $userIpAddress, $userAgent);
echo $response;








?>