<?php

header('Content-Type: application/json');

$PIXEL_ID = trim('D3GE503C77UCTDLH183G'); 
$ACCESS_TOKEN = trim('4e54a5dcaa7e9c06d64c0b4b87df62a530f23171');
$API_URL = 'https://business-api.tiktok.com/open_api/v1.3/event/track/';

$data_input = [
    "event" => "CompleteRegistration",
    "email" => "testuser@example.com", 
    "phone" => "966500123456",         
    "page_url" => "https://yourwebsite.com/register",
    "user_agent" => "Mozilla/5.0 (Test User Agent)",
    "ttp" => "C_XXXXXXXXXXXXXX",      
    "value" => 10.0,
    "currency" => "SAR"
];

$event_name = $data_input['event'];
$event_id = 'EVENT_' . time() . uniqid();
$event_value = $data_input['value'] ?? 0.0;
$event_currency = $data_input['currency'] ?? 'USD'; 

$user_ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0'; 
$server_timestamp = time();

$js_user_agent = $data_input['user_agent'] ?? 'Unknown User Agent'; 
$js_page_url = $data_input['page_url'] ?? 'N/A';
$ttp_id = $data_input['ttp'] ?? null;

$hashed_email = isset($data_input['email']) ? hash('sha256', strtolower(trim($data_input['email']))) : null;
$hashed_phone = isset($data_input['phone']) ? hash('sha256', preg_replace('/[^0-9]/', '', $data_input['phone'])) : null;

// ✅ كل شيء داخل data array
$tiktok_payload = [
    'data' => [
        [
            'event' => $event_name,
            'event_id' => $event_id,
            'event_source' => 'web', // web, app, offline
            'event_source_id' => $PIXEL_ID,
            'timestamp' => $server_timestamp,
            'context' => [
                'user' => [
                    'email' => $hashed_email,
                    'phone_number' => $hashed_phone,
                    'ip_address' => $user_ip,
                    'user_agent' => $js_user_agent,
                    'tiktok_click_id' => $ttp_id
                ],
                'page' => [
                    'url' => $js_page_url
                ]
            ],
            'properties' => [
                'value' => $event_value,
                'currency' => $event_currency
            ]
        ]
    ]
];

$ch = curl_init($API_URL);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($tiktok_payload),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Access-Token: ' . $ACCESS_TOKEN
    ],
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
]);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch); 
curl_close($ch);

$tiktok_response = json_decode($response, true);
if ($http_code === 200 && ($tiktok_response['code'] ?? -1) === 0) {
    echo json_encode(['status' => 'success', 'tiktok_response' => $tiktok_response]);
} else {
    http_response_code($http_code ?: 500); 
    echo json_encode([
        'status' => 'error', 
        'http_code' => $http_code, 
        'curl_error' => $curl_error, 
        'tiktok_response' => $tiktok_response
    ]);
}
?>
