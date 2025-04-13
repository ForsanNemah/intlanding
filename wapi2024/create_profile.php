<?php






$token=$Post['token'];
$profile_id=$Post['profile_id'];
$user_name=$Post['user_name'];
$sheet_url=$Post['sheet_url'];



//create_profile("test","d40dc160-f509","9f9151b56d756354026b368ecc644edec19343b4");


if(isset($token) && isset($profile_id) && isset($user_name) && isset($sheet_url)){

    create_profile($user_name,$profile_id,$token,$sheet_url);


}else{
    echo "Error";       

}




function create_profile($user_name,$profile_id,$token){

    


    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://wappi.pro/api/profile/add?profile_id='.$profile_id.'&name='.$user_name,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Authorization: '.$token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
print_r($response);

}


?>