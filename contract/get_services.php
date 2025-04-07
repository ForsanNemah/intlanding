<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$url = 'https://opensheet.elk.sh/1O-C0bChWXoJFJtSez84Kksg7IpT5tlyZAavIDuc7M3g/Sheet1';
 
try {
    $response = file_get_contents($url);

    if ($response !== false) {
        // Parse the response as JSON
        $data = json_decode($response, true);

        if ($data !== null) {
            // Loop through the rows and display key-value pairs


            foreach ($data as $row) {
                $service = $row['service'];
                $des = $row['des'];
                $status = $row['status'];
                //echo "".$service.$des. $status."<br>";


                if($status=="1"){

                    echo '
                
                
                    <li>
                    <strong>
                    
                    '. $service.'
                    </strong>
                    <ul>
                       
                        '. $des.'
                    </ul>
                </li>
                    
                    
                    
                    
                    ';

                }
                else{
                    

                }
              

                //echo "<br>";
                
 
            }

            $keywords_content = rtrim($keywords_content, ',');

      
        } else {
            // Handle JSON parsing error
            throw new Exception('Failed to parse the JSON response.');
        }
    } else {
        // Handle error
        throw new Exception('Failed to retrieve the response.');
    }
} catch (Exception $e) {
    // Handle exceptions
    //echo 'Error: ' . $e->getMessage();
}