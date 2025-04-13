<?php

header("Access-Control-Allow-Origin: *");


// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $profile_id = $_POST['profile_id'];
   
    $auth = $_POST['auth'];

    // Check if the required parameters are set
    if (isset($_POST['auth']) && isset($_POST['profile_id'])  ) {
        // Retrieve the values of the parameters
      

        get_chats();


        // Perform your desired actions with the submitted data
       // echo "profile_id: $profile_id, phone: $phone, msg: $msg";
    } else {
        echo "One or more required parameters are missing.";
        //echo  "vars".$profile_id .$phone.$msg.$auth;
    }
} else {
    echo "This script should be accessed via a _POST request.";
}












 



//get_chat();


function get_chats(){


    global $profile_id, $auth;



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://wappi.pro/api/sync/chats/get?profile_id='.$profile_id.'&limit=3&show_all=false&offset=0',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: '.$auth
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;





}



?>