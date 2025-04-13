<?php

$wapi_profile_id="968db39d-416d";
$wapi_token="40703bb7812b727ec01c24f2da518c407342559c";



$data = file_get_contents("php://input");

$message=" مرحبا بك  في متجر سي زون   استخدم  الكود  Z10 للحصول على خصم 10% ";
$event = json_decode($data, true);
if(isset($event)){
    //Here, you now have event and can process them how you like e.g Add to the database or generate a response
    $file = 'salla.txt';  
    $data =json_encode($event)."\n";  

    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);


    //print_r($data);




$customer_phone=extractMobileNumber($data);

    $result = send_with_wapi($wapi_token, $wapi_profile_id, "120363401915030163@g.us"," تم تسجيل الدخول الى المتجر من قبل العميل".$customer_phone);



    $result = send_with_wapi($wapi_token, $wapi_profile_id, $customer_phone.'@c.us',$message);

    //print_r($result) ;












}








































function extractMobileNumber($jsonData) {
    // تحويل JSON إلى مصفوفة
    $data = json_decode($jsonData, true);
    
    // التحقق من وجود رقم الجوال والمفتاح الدولي
    if (isset($data['data']['mobile']) && isset($data['data']['mobile_code'])) {
        return $data['data']['mobile_code'] . $data['data']['mobile'];
    }
    
    return null; // في حال لم يتم العثور على الرقم
}





function send_with_wapi($auth, $profileId, $phone, $message) {
 



        
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ads.2moh.net/wapi2024/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'auth='.$auth.'&profile_id='.$profileId.'&phone='.$phone.'&msg='.$message.'',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: 9f9151b56d756354026b368ecc644edec19343b4'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
    
    
    
    
        }
        





?>