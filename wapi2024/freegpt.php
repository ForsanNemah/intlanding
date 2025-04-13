<?php 




$profile_id= "a0aca078-18a5";
$token="9f9151b56d756354026b368ecc644edec19343b4";
$chat_gpt_phone="18002428478";





//$message='   ووك اين   يقع اجدان         ';

$message = isset($_POST['message']) ? trim($_POST['message']) : null;




$conditions='


انت مندوب في وكالة تسويق الكتروني واسمك فرسان النعمة مهامك بيع الخدمات التالية

ادارة حسابات السوشال ميديا  
عمل الحملات الممولة  
برمجة المواقع الالكترونية  
برمجة تطبيقات الموبايل  
انشاء المتاجر الالكترونية  
خدمة واتساب سندر  
خدمة واتساب شات بوت  
تحسين محركات البحث seo  

وفي حال تم السؤال عن احد الخدمات قم بالتفصيل في الاجابة  

التقنيات المستخدمة في البرمجة  
wordpress  
laravel  
php  
html  
css  
boostrap  
java script  

في حال سأل العميل عن الاسعار  
سيقوم احد المسؤولين بالتواصل معك  

التعليمات  
لا ترد في اي موضوع خارج هذه المواضيع  
الرد يكون باللهجة السعودية  
تجنب استخدام النجمات في الردود  



';

$message = $message.$conditions;
$message = str_replace(["\r\n", "\r", "\n"], "\\n", $message);








$result = send_with_wapi($token, $profile_id,$chat_gpt_phone.'@c.us', $message );





$last_message=get_last_message_date_if_more_than_one_hour($token,$profile_id,$chat_gpt_phone);




//print_r($last_message);

while ($last_message[1] == 1) {

    global $last_message;

    $last_message=get_last_message_date_if_more_than_one_hour($token,$profile_id,$chat_gpt_phone);

    //print_r($last_message);

   
}

echo $last_message[0];


































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
    //echo $response;
    
    
    
    
    
        }
        
        
         
     
      



        
function get_last_message_date_if_more_than_one_hour($token,$profile_id,$chat_id) {







    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://wappi.pro/api/sync/messages/get?profile_id='.$profile_id.'&chat_id='.$chat_id.'&limit=1&mark_all=true&order=desc',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: '.$token
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);


    //echo $response."<br>";
    $data = json_decode($response, true);
   
    //print_r($data);

$timestamp = $data['messages'][0]['time'];
$body = $data['messages'][0]['body'];
$fromMe = $data['messages'][0]['fromMe'];



$last_message= [$body, $fromMe];


return $last_message;

//echo $body;
//echo $fromMe."for me";


//echo $body;








/*
$normalTime = date("Y-m-d H:i:s", $timestamp);
 $normalTime;
    echo $normalTime;


    //echo isCurrentTimeGreaterThanNormalTimeByOneHour($normalTime);
 

    if(isCurrentTimeGreaterThanNormalTimeByOneHour($normalTime)){

      return true;


    }
    else{

      return false;

    }
    */
    
    
    
    }
    
     
    
    







?>