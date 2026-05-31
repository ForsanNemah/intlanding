```php
<?php

$apiKey = 'sk_ac24b1765e30cc406770cbaf589898e39c0a9fa6439d67887c4a3f37b0d9d9aa';
$socialAccountId = '6a1b8cd82b2567671a77d72b';

$videoPath = __DIR__ . '/video.mp4';
$caption = 'good morning';
$scheduledAt = gmdate('Y-m-d\TH:i:s\Z', time() + 60);

$baseUrl = 'https://zernio.com/api/v1';

function requestJson(string $method, string $url, array $headers = [], $body = null): array
{
    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER => $headers,
    ]);

    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
    } else {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    }

    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($error) {
        throw new RuntimeException($error);
    }

    $json = json_decode($response, true);

    if (!is_array($json)) {
        throw new RuntimeException("HTTP {$status}: {$response}");
    }

    if ($status < 200 || $status >= 300) {
        throw new RuntimeException(
            "HTTP {$status} error: " . json_encode($json)
        );
    }

    return $json;
}

function uploadFileToPresignedUrl(
    string $uploadUrl,
    string $filePath,
    string $contentType
): void {

    $fp = fopen($filePath, 'rb');

    if (!$fp) {
        throw new RuntimeException("Cannot open file");
    }

    $ch = curl_init($uploadUrl);

    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_UPLOAD => true,
        CURLOPT_INFILE => $fp,
        CURLOPT_INFILESIZE => filesize($filePath),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER => [
            "Content-Type: {$contentType}"
        ]
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);
    fclose($fp);

    if ($error) {
        throw new RuntimeException($error);
    }

    if ($status < 200 || $status >= 300) {
        throw new RuntimeException(
            "Upload failed ({$status}): {$response}"
        );
    }
}

try {

    if (!file_exists($videoPath)) {
        throw new RuntimeException(
            "Video not found: {$videoPath}"
        );
    }

    $fileName = basename($videoPath);
    $mimeType = mime_content_type($videoPath) ?: 'video/mp4';

    // STEP 1: Get presigned URL
    $presign = requestJson(
        'POST',
        $baseUrl . '/media/presign',
        [
            "Authorization: Bearer {$apiKey}",
            "Accept: application/json",
            "Content-Type: application/json",
        ],
        json_encode([
            'filename'    => $fileName,
            'contentType' => $mimeType,
        ])
    );

    if (empty($presign['uploadUrl'])) {
        throw new RuntimeException(
            'uploadUrl missing: ' . json_encode($presign)
        );
    }

    if (empty($presign['publicUrl'])) {
        throw new RuntimeException(
            'publicUrl missing: ' . json_encode($presign)
        );
    }

    $uploadUrl = $presign['uploadUrl'];
    $publicUrl = $presign['publicUrl'];

    // STEP 2: Upload video
    uploadFileToPresignedUrl(
        $uploadUrl,
        $videoPath,
        $mimeType
    );

    // STEP 3: Create TikTok post
  $payload = [
    'content' => $caption,
    'scheduledFor' => $scheduledAt,
    'timezone' => 'UTC',
    'mediaItems' => [
        [
            'type' => 'video',
            'url'  => $publicUrl,
        ],
    ],
    'platforms' => [
        [
            'platform'  => 'tiktok',
            'accountId' => $socialAccountId,
        ],
    ],
];

    if (!empty($scheduledAt)) {
        $payload['scheduledAt'] = $scheduledAt;
    }

    $post = requestJson(
        'POST',
        $baseUrl . '/posts',
        [
            "Authorization: Bearer {$apiKey}",
            "Accept: application/json",
            "Content-Type: application/json",
        ],
        json_encode($payload)
    );

    echo "SUCCESS\n";
    echo json_encode(
        $post,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
    );

} catch (Throwable $e) {

    echo "ERROR: " . $e->getMessage() . PHP_EOL;
    exit(1);

}

