<!DOCTYPE html>
<html>
<head>
    <title>Manage Configurations</title>
</head>

<?php

include "init_db.php";

?>
<body>
    <h1>Manage Configurations</h1>
    <form action="crud.php" method="post">
        <input type="hidden" name="id" value="">
        <label>Website Name: <input type="text" name="website_name" required></label><br>
        <label>Doctor Name: <input type="text" name="dr_name"></label><br>
        <label>Phone: <input type="text" name="phone_main" required></label><br>
        <label>Action URL: <input type="text" name="action_url" required></label><br>
        <label>Sheet URL: <input type="text" name="sheet_url" required></label><br>
        <label>Form 1 Description: <input type="text" name="form1_des"></label><br>
        <label>CTA: <input type="number" name="cta" min="0" max="1"></label><br>
        <label>CTA Text: <input type="text" name="cta_text"></label><br>
        <label>Form 1 Description 2: <input type="text" name="form1_des2"></label><br>
        <label>Form 1 Description 3: <input type="text" name="form1_des3"></label><br>
        <label>Form 2 Description: <input type="text" name="form2_des"></label><br>
        <label>Form 2 Description 2: <input type="text" name="form2_des2"></label><br>
        <label>Footer Description 1: <input type="text" name="footer_des1"></label><br>
        <label>Footer Description 2: <input type="text" name="footer_des2"></label><br>
        <label>Footer Description 3: <input type="text" name="footer_des3"></label><br>
        <label>Footer Description 4: <input type="text" name="footer_des4"></label><br>
        <label>Before After: <input type="number" name="before_after" min="0" max="1"></label><br>
        <label>Map: <input type="number" name="map" min="0" max="1"></label><br>
        <label>Services: <input type="number" name="services" min="0" max="1"></label><br>
        <label>Derma Services: <input type="number" name="derma_services" min="0" max="1"></label><br>
        <label>Services 2: <input type="number" name="services2" min="0" max="1"></label><br>
        <label>FAQ: <input type="number" name="faq" min="0" max="1"></label><br>
        <label>Process: <input type="number" name="process" min="0" max="1"></label><br>
        <label>Services Images: <input type="number" name="services_images" min="0" max="1"></label><br>
        <label>Footer: <input type="number" name="footer" min="0" max="1"></label><br>
        <label>Footer 2: <input type="number" name="footer2" min="0" max="1"></label><br>
        <label>WhatsApp Button: <input type="number" name="w_app_button" min="0" max="1"></label><br>
        <label>API Notification: <input type="number" name="api_notification" min="0" max="1"></label><br>
        <label>Ad Source: <input type="text" name="ad_source"></label><br>
        <label>Header 1: <input type="number" name="header1" min="0" max="1"></label><br>
        <label>Partners: <input type="number" name="parteners" min="0" max="1"></label><br>
        <label>About Image: <input type="number" name="about_image" min="0" max="1"></label><br>
        <button type="submit" name="action" value="create">Create</button>
        <button type="submit" name="action" value="read">Read</button>
        <button type="submit" name="action" value="update">Update</button>
        <button type="submit" name="action" value="delete">Delete</button>
    </form>
    <?php
    // Display data from database
    try {
        $db = new PDO('sqlite:config.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $db->query('SELECT * FROM config');

        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Website Name</th>
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Action URL</th>
                    <th>Sheet URL</th>
                    <th>Form 1 Description</th>
                    <th>CTA</th>
                    <th>CTA Text</th>
                    <th>Form 1 Description 2</th>
                    <th>Form 1 Description 3</th>
                    <th>Form 2 Description</th>
                    <th>Form 2 Description 2</th>
                    <th>Footer Description 1</th>
                    <th>Footer Description 2</th>
                    <th>Footer Description 3</th>
                    <th>Footer Description 4</th>
                    <th>Before After</th>
                    <th>Map</th>
                    <th>Services</th>
                    <th>Derma Services</th>
                    <th>Services 2</th>
                    <th>FAQ</th>
                    <th>Process</th>
                    <th>Services Images</th>
                    <th>Footer</th>
                    <th>Footer 2</th>
                    <th>WhatsApp Button</th>
                    <th>API Notification</th>
                    <th>Ad Source</th>
                    <th>Header 1</th>
                    <th>Partners</th>
                    <th>About Image</th>
                </tr>";

        foreach ($result as $row) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['website_name']}</td>
                    <td>{$row['dr_name']}</td>
                    <td>{$row['phone_main']}</td>
                    <td>{$row['action_url']}</td>
                    <td>{$row['sheet_url']}</td>
                    <td>{$row['form1_des']}</td>
                    <td>{$row['cta']}</td>
                    <td>{$row['cta_text']}</td>
                    <td>{$row['form1_des2']}</td>
                    <td>{$row['form1_des3']}</td>
                    <td>{$row['form2_des']}</td>
                    <td>{$row['form2_des2']}</td>
                    <td>{$row['footer_des1']}</td>
                    <td>{$row['footer_des2']}</td>
                    <td>{$row['footer_des3']}</td>
                    <td>{$row['footer_des4']}</td>
                    <td>{$row['before_after']}</td>
                    <td>{$row['map']}</td>
                    <td>{$row['services']}</td>
                    <td>{$row['derma_services']}</td>
                    <td>{$row['services2']}</td>
                    <td>{$row['faq']}</td>
                    <td>{$row['process']}</td>
                    <td>{$row['services_images']}</td>
                    <td>{$row['footer']}</td>
                    <td>{$row['footer2']}</td>
                    <td>{$row['w_app_button']}</td>
                    <td>{$row['api_notification']}</td>
                    <td>{$row['ad_source']}</td>
                    <td>{$row['header1']}</td>
                    <td>{$row['parteners']}</td>
                    <td>{$row['about_image']}</td>
                </tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
    ?>
</body>
</html>
