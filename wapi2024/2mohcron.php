<?php










$message='
 شيت حملات م سامي 

https://docs.google.com/spreadsheets/d/1DJ2fD_Ga4jhy8-bsopdlH2f6zfbmh1rUPxXn9p2BfFQ/edit?usp=sharing

شيت حملات م اسلام

https://docs.google.com/spreadsheets/d/14Fzvj2cNzhw5dXUQmrqUD1UCZRwbQm3H1AOr6YsFsDo/edit?usp=sharing


شيت حملات م عقيل 

https://docs.google.com/spreadsheets/d/1Bqz-DpYNwhM5dTKzZFAHLCQ9yFp_GkLle8kldjkw_PQ/edit?gid=0#gid=0
';



$message = str_replace(["\r\n", "\r", "\n"], "\\n", $message);


$result = send_with_wapi('9f9151b56d756354026b368ecc644edec19343b4', 'a0aca078-18a5','120363294487606942@g.us', $message );
$result = send_with_wapi('9f9151b56d756354026b368ecc644edec19343b4', 'a0aca078-18a5','966599708654@c.us', $message );



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