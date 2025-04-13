<?php

use League\CommonMark\Extension\SmartPunct\EllipsesParser;

$token=$_POST['token'];
$profile_id=$_POST['profile_id'];

$url=$_POST['url'];

if(isset($token) && isset($profile_id)){

    set_wh($token, $profile_id,$url);

}else{
    echo "Error";
}
 

function set_wh($token, $profile_id,$url) {



    $curl = curl_init();

    $data = array(
        'profile_id' => $profile_id,
        'token' => $token,
        'url' => $url
    );

    



    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://wappi.pro/api/webhook/url/set?profile_id='.$profile_id.'&url='.urlencode($url),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
 
        CURLOPT_HTTPHEADER => array(
          'accept: application/json',
          'Content-Type: application/x-www-form-urlencoded',
          'Authorization: '.$token
        ),
      ));
      
      $response = curl_exec($curl);
      
      
      $response = curl_exec($curl);
      
    
   
    
    curl_close($curl);
      print_r($response);
    


}














?>