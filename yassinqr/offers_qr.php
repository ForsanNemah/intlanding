<?php

$wapi_profile_id="a5c869f0-f86f";
$wapi_token="40703bb7812b727ec01c24f2da518c407342559c";
$expected_user_message="اشتراك في عروض بهارات الياسين";
$group_id="120363416424395153@g.us";

$data = file_get_contents("php://input");

$replay_message="  شكرا لتسوقك من بهارات ياسين ";
$event = json_decode($data, true);
if(isset($event)){
    //Here, you now have event and can process them how you like e.g Add to the database or generate a response
    $file = 'roka.txt';  
    $data =json_encode($event)."\n";  

    //file_put_contents($file, $data, FILE_APPEND | LOCK_EX);


    //print_r($data);

    $chat_id = $event['messages'][0]['chatId'];
    $message = $event['messages'][0]['body'];
    $profile_id = $event['messages'][0]['profile_id'];
    
    $is_me = $event['messages'][0]['is_me'];
    $from_user = $event['messages'][0]['from'];
    $to_user = $event['messages'][0]['to'];
    $senderName = $event['messages'][0]['senderName'];

    

$offer_user_info_message="لديك عميل جديد  ". $senderName.$chat_id;



   
//$customer_phone=extractMobileNumber($data);

    //$result = send_with_wapi($wapi_token, $wapi_profile_id, "120363383080104125@g.us"," تم تسجيل الدخول الى المتجر من قبل العميل".$customer_phone);



    //$result = send_with_wapi($wapi_token, $wapi_profile_id, $customer_phone.'@c.us',$message);

    //print_r($result) ;



    if($message=="chat_id"){


   
        $result = send_with_wapi($wapi_token, $wapi_profile_id,$chat_id, $chat_id);
        //$result = send_with_wapi($wapi_token, $wapi_profile_id,$chat_id, $chat_id);
    
    
    
    
    }



    if($message==$expected_user_message){


   
        $result = send_with_wapi($wapi_token, $wapi_profile_id,$chat_id, $replay_message);
        $result = send_with_wapi($wapi_token, $wapi_profile_id,$group_id, $offer_user_info_message);
    
        send_to_google_sheet( $senderName, $from_user);
    
    
    
    }









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
 

    global $wapi_token; 

        
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
        'Authorization:  '.$wapi_token
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
    
    
    
    
        }
        





















        function send_to_google_sheet($name, $phone, $action_url = "https://script.google.com/macros/s/AKfycby1SGYxhjIrq2Cz9H-LjBt7RbJsxzCIAWfPbofMseb3IT8jAIiBM-fvmuFoDiF2aw3e/exec") {
            date_default_timezone_set("Asia/Riyadh");
            $date = date('Y/m/d H:i:s');
            $whatsapp_link = "wa.me/966" . $phone;
        
            $postParameter = array(
                'date_and_time' => $date,
                'name' => $name,
                'phone' => $phone,
                'whatsapp_link' => $whatsapp_link
            );
        
            $curlHandle = curl_init($action_url);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
            
            $response = curl_exec($curlHandle);
            curl_close($curlHandle);
            
            return $response;
        }
        













?>