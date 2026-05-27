<?php

require_once "vendor/autoload.php";

use Twilio\Rest\Client;
use Twilio\Http\CurlClient;

// Twilio Test Credentials
$sid = "AC474db3fd31ea7effb88adb6943d3672a";
$token = "5321a1b3f2fe1bb1a0c98a2d384f0771";

// Disable SSL verification (LOCAL TESTING ONLY)
$httpClient = new CurlClient([
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
]);

// Initialize Twilio Client
$twilio = new Client(
    $sid,
    $token,
    null,
    null,
    $httpClient
);

try {

    // Send WhatsApp Template Message
    $message = $twilio->messages->create(
        "whatsapp:+966568430828", // Receiver
        [
            "messagingServiceSid" => "MGe7265566896783040917901a33ee944a",
            "contentSid" => "HX8c1af7b3e2423f42b984268353a3ce1b"
        ]
    );

    echo "Message Sent Successfully<br>";
    echo "SID: " . $message->sid . "<br>";
    echo "Initial Status: " . $message->status . "<br><br>";

    // Check final delivery status
    sleep(5);

    $status = $twilio->messages($message->sid)->fetch();

    echo "<b>Delivery Status:</b><br>";
    echo "Status: " . $status->status . "<br>";
    echo "Error Code: " . $status->errorCode . "<br>";
    echo "Error Message: " . $status->errorMessage . "<br>";

} catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}