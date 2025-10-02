<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");

// ثابت التوثيق (ضع التوكن الفعلي هنا)
$AUTH_TOKEN = '40703bb7812b727ec01c24f2da518c407342559c';

// تأكد أن الطلب GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $profile_id = $_GET['profile_id'] ?? null;

    if ($profile_id) {
        get_chats($profile_id, $AUTH_TOKEN);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Missing required parameter: profile_id"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "This script should be accessed via a GET request."]);
}

/**
 * Get chats from wappi.pro API
 *
 * @param string $profile_id
 * @param string $auth_token
 * @return void
 */
function get_chats(string $profile_id, string $auth_token): void {

    $url = 'https://wappi.pro/api/sync/chats/get?profile_id=' . urlencode($profile_id) . '&limit=3&show_all=false&offset=0';

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => [
            'Authorization: ' . $auth_token,
            'Accept: application/json',
        ],
        // تعطيل فحص SSL (للتجربة في البيئة المحلية فقط)
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($err) {
        http_response_code(500);
        echo json_encode(["error" => "cURL Error: $err"]);
        return;
    }

    // إعادة النتيجة كما استلمناها من API (مع تمرير رمز الحالة)
    http_response_code($http_code ?: 200);
    echo $response;
}
?>
