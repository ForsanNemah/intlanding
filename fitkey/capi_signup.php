<?php

 
function sendSnapchatConversion_sign_up($pixel_id, $timestamp, $event_conversion_type, $event_type, $hashed_email, $hashed_phone_number, $hashed_ip_address, $user_agent, $click_id, $authorization_token) {
    $curl = curl_init();

    $postData = json_encode(array(
        "pixel_id" => $pixel_id,
        "timestamp" => $timestamp,
        "event_conversion_type" => $event_conversion_type,
        "event_type" => $event_type,
        "hashed_email" => $hashed_email,
        "hashed_phone_number" => $hashed_phone_number,
        "hashed_ip_address" => $hashed_ip_address,
        "user_agent" => $user_agent,
        
        "click_id" => $click_id
    ));

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://tr.snapchat.com/v2/conversion',
        //CURLOPT_URL => 'https://tr.snapchat.com/v2/conversion/validate',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$authorization_token
        ),
    ));

    $response = curl_exec($curl);
    $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if (curl_errno($curl)) {
        // Handle the error
        echo 'cURL error: ' . curl_error($curl);
    } elseif ($http_status !== 200) {
        // Handle non-200 responses
        echo 'API request failed with status code: ' . $http_status . ' Response: ' . $response;
    } else {
        // Success, return the response
        return $response;
    }

    curl_close($curl);
}

// Example usage




 









/*





$pixel_id = "77ec2e1e-c2bb-468f-8d2e-f99b7ec9983c";
$authorization_token = "eyJhbGciOiJIUzI1NiIsImtpZCI6IkNhbnZhc1MyU0hNQUNQcm9kIiwidHlwIjoiSldUIn0.eyJhdWQiOiJjYW52YXMtY2FudmFzYXBpIiwiaXNzIjoiY2FudmFzLXMyc3Rva2VuIiwibmJmIjoxNzI0NjIwODIzLCJzdWIiOiJhMTAzMjVhMi0zMzU1LTRkMjMtODhmOC04MmFmZTc3NzYzOTR-UFJPRFVDVElPTn4yNTZmYTNlNi1iZDhmLTQwMTctYTQ2MC0yYjU2OGI4MDJiMWQifQ.7-CnLhZlNw3mr9vkdWMMtVoUz0CONBGZibDPEOEo8Es";
$timestamp =time();
$event_conversion_type = "WEB";
$event_type = "SIGN_UP";
$hashed_ip_address = hash_to_256($_SERVER['REMOTE_ADDR']);
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$hashed_email = "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d";
$hashed_phone_number = "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d";
$click_id = "7b3a7917-a82a-47e8-9728-e1b3b045abb2";
$response = sendSnapchatConversion($pixel_id, $timestamp, $event_conversion_type, $event_type, $hashed_email, $hashed_phone_number, $hashed_ip_address, $user_agent, $click_id, $authorization_token);

echo $response;




*/





 
$timestamp =time();
$event_conversion_type = "WEB";
$event_type = "SIGN_UP";
$hashed_ip_address = hash_to_256($_SERVER['REMOTE_ADDR']);
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$hashed_email = hash_to_256($user_email_to_hash);
$hashed_phone_number = hash_to_256($user_phone_to_hash);
$click_id = $user_click_id;
$response = sendSnapchatConversion_sign_up($pixel_id, $timestamp, $event_conversion_type, $event_type, $hashed_email, $hashed_phone_number, $hashed_ip_address, $user_agent, $click_id, $authorization_token);

//echo $response;




?>
