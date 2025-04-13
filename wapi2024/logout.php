<?php

use League\CommonMark\Extension\SmartPunct\EllipsesParser;

$token=$_POST['token'];
$profile_id=$_POST['profile_id'];

if(isset($token) && isset($profile_id)){

logout($token, $profile_id);

}else{
    echo "Error";
}


function logout($token, $profile_id) {



    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://wappi.pro/api/profile/logout?profile_id='.$profile_id,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'accept: application/json',
        'Authorization: '.$token
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
      print_r($response);
    


}














?>