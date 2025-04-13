<?php

if (!isset($_GET['profile_id']) || empty($_GET['profile_id'])) {
    die("Error: Missing profile_id parameter.");
}

$profile_id = $_GET['profile_id'];

function printContactsInTable($profile_id) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://wappi.pro/api/sync/chats/get?profile_id=' . urlencode($profile_id) . '&show_all=true&offset=0',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: 40703bb7812b727ec01c24f2da518c407342559c'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        die("cURL Error: " . curl_error($curl));
    }

    curl_close($curl);
    
    $data = json_decode($response, true);

    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<div class="container mt-4">';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead class="table-dark">';
    echo '<tr><th>Contact Name</th><th>Phone Number</th></tr>';
    echo '</thead>';
    echo '<tbody>';
    
    if (!empty($data['dialogs'])) {
        foreach ($data['dialogs'] as $dialog) {
            $name = !empty($dialog['name']) ? htmlspecialchars($dialog['name'], ENT_QUOTES, 'UTF-8') : 'Unknown';
            $phone = !empty($dialog['last_message_sender']['number']) ? htmlspecialchars($dialog['last_message_sender']['number'], ENT_QUOTES, 'UTF-8') : 'N/A';
            
            echo "<tr><td>{$name}</td><td>{$phone}</td></tr>";
        }
    } else {
        echo '<tr><td colspan="2" class="text-center">No contacts found</td></tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

// Call the function with the profile ID
printContactsInTable($profile_id);

?>
