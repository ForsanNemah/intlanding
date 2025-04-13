<?php




//get_last_message_date_if_more_than_one_hour('a0aca078-18a5','9f9151b56d756354026b368ecc644edec19343b4','966568430828');


 

function get_last_message_date_if_more_than_one_hour($profile_id,$token,$chat_id) {







    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://wappi.pro/api/sync/messages/get?profile_id='.$profile_id.'&chat_id='.$chat_id.'&limit=2&mark_all=true&order=desc',
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
$timestamp = $data['messages'][1]['time'];
//echo $timestamp;

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
    
    
    
    
    }
    
     
    
    










    function isCurrentTimeGreaterThanNormalTimeByOneHour($normalTime) {
      $currentDateTime = date('Y-m-d H:i:s');
      //echo "<br>";
  echo "".$currentDateTime;
  //echo "<br>";
      // Convert the normal time and current time to Unix timestamps
      $normalTimeTimestamp = strtotime($normalTime);
      $currentDateTimeTimestamp = strtotime($currentDateTime);
  
      // Check if the current time is greater than the normal time by at least one hour
      if ($currentDateTimeTimestamp >= ($normalTimeTimestamp + 60*60*24)) {
        echo "ok";
          return true;
         
      } else {
        echo " not ok";
          return false;
      }
  }




?>