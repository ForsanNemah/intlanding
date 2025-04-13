<?php


$token=$_POST['token'];
$profile_id=$_POST['profile_id'];


delete_profile("9f9151b56d756354026b368ecc644edec19343b4","d40dc160-f509");

if(isset($token) && isset($profile_id)){

    delete_profile($token,$profile_id);


}else{
    echo "Error";
}

function delete_profile($token,$profile_id){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://wappi.pro/api/profile/delete?profile_id='.$profile_id,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'accept: application/json',
        'Authorization: '.$token
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    print_r($response) ;


}


?>