<?php 

include "info.php";
echo "w_btn_clik_notifi";


$result = send_with_wapi($wapi_token, $wapi_profile_id,$group_id.'@g.us', " قام احد العملاء بالنقر على زر الواتساب في صفحة الهبوط ");

echo print_r($result) ;


$result = send_with_wapi($wapi_token, $wapi_profile_id,$phone_main.'@c.us', " قام احد العملاء بالنقر على زر الواتساب في صفحة الهبوط ");

echo print_r($result) ;


header("Location:https://wa.me/".$phone_main);



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
        'Authorization: 40703bb7812b727ec01c24f2da518c407342559c'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
    
    
    
    
        }
        



?>