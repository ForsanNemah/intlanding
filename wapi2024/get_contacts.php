<?php

if (!isset($_GET['profile_id']) || empty($_GET['profile_id'])) {
    die("Error: Missing profile_id parameter.");
}

$profile_id = $_GET['profile_id'];

function printContactsInTable($profile_id) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://wappi.pro/api/sync/contacts/get?profile_id=' . urlencode($profile_id),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: 40703bb7812b727ec01c24f2da518c407342559c'
        ),
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);
    curl_close($curl);

    if ($error) {
        die("cURL Error: " . htmlspecialchars($error));
    }

    $data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Error parsing JSON response.");
    }

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Contacts Table</title>
    </head>
    <body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Contacts</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>';
    
    if (isset($data['contacts']) && is_array($data['contacts'])) {
        foreach ($data['contacts'] as $index => $contact) {
            $name = htmlspecialchars($contact['name'] ?? 'N/A');
            $number = htmlspecialchars($contact['number'] ?? 'N/A');
            echo "<tr>
                    <td>" . ($index + 1) . "</td>
                    <td>$name</td>
                    <td>$number</td>
                </tr>";
        }
    } else {
        echo '<tr>
                <td colspan="3" class="text-center">No contacts found</td>
            </tr>';
    }

    echo '</tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
}

// Call the function with profile_id
printContactsInTable($profile_id);
