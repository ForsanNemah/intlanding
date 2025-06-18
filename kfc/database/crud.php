<?php
try {
    $db = new PDO('sqlite:config.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $action = $_POST['action'];
    $id = $_POST['id'] ?? null;
    $website_name = $_POST['website_name'];
    $dr_name = $_POST['dr_name'];
    $phone_main = $_POST['phone_main'];
    $action_url = $_POST['action_url'];
    $sheet_url = $_POST['sheet_url'];
    $form1_des = $_POST['form1_des'];
    $cta = $_POST['cta'];
    $cta_text = $_POST['cta_text'];
    $form1_des2 = $_POST['form1_des2'];
    $form1_des3 = $_POST['form1_des3'];
    $form2_des = $_POST['form2_des'];
    $form2_des2 = $_POST['form2_des2'];
    $footer_des1 = $_POST['footer_des1'];
    $footer_des2 = $_POST['footer_des2'];
    $footer_des3 = $_POST['footer_des3'];
    $footer_des4 = $_POST['footer_des4'];
    $before_after = $_POST['before_after'];
    $map = $_POST['map'];
    $services = $_POST['services'];
    $derma_services = $_POST['derma_services'];
    $services2 = $_POST['services2'];
    $faq = $_POST['faq'];
    $process = $_POST['process'];
    $services_images = $_POST['services_images'];
    $footer = $_POST['footer'];
    $footer2 = $_POST['footer2'];
    $w_app_button = $_POST['w_app_button'];
    $api_notification = $_POST['api_notification'];
    $ad_source = $_POST['ad_source'];
    $header1 = $_POST['header1'];
    $parteners = $_POST['parteners'];
    $about_image = $_POST['about_image'];

    if ($action == 'create') {
        $stmt = $db->prepare("INSERT INTO config (
            website_name, dr_name, phone_main, action_url, sheet_url, form1_des, cta, cta_text, form1_des2, form1_des3, form2_des, form2_des2, footer_des1, footer_des2, footer_des3, footer_des4, before_after, map, services, derma_services, services2, faq, process, services_images, footer, footer2, w_app_button, api_notification, ad_source, header1, parteners, about_image
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$website_name, $dr_name, $phone_main, $action_url, $sheet_url, $form1_des, $cta, $cta_text, $form1_des2, $form1_des3, $form2_des, $form2_des2, $footer_des1, $footer_des2, $footer_des3, $footer_des4, $before_after, $map, $services, $derma_services, $services2, $faq, $process, $services_images, $footer, $footer2, $w_app_button, $api_notification, $ad_source, $header1, $parteners, $about_image]);
    } elseif ($action == 'read') {
        $result = $db->query('SELECT * FROM config');
        foreach ($result as $row) {
            echo "ID: {$row['id']}<br>";
            echo "Website Name: {$row['website_name']}<br>";
            echo "Doctor Name: {$row['dr_name']}<br>";
            echo "Phone: {$row['phone_main']}<br>";
            echo "Action URL: {$row['action_url']}<br>";
            echo "Sheet URL: {$row['sheet_url']}<br>";
            echo "Form 1 Description: {$row['form1_des']}<br>";
            echo "CTA: {$row['cta']}<br>";
            echo "CTA Text: {$row['cta_text']}<br>";
            echo "Form 1 Description 2: {$row['form1_des2']}<br>";
            echo "Form 1 Description 3: {$row['form1_des3']}<br>";
            echo "Form 2 Description: {$row['form2_des']}<br>";
            echo "Form 2 Description 2: {$row['form2_des2']}<br>";
            echo "Footer Description 1: {$row['footer_des1']}<br>";
            echo "Footer Description 2: {$row['footer_des2']}<br>";
            echo "Footer Description 3: {$row['footer_des3']}<br>";
            echo "Footer Description 4: {$row['footer_des4']}<br>";
            echo "Before After: {$row['before_after']}<br>";
            echo "Map: {$row['map']}<br>";
            echo "Services: {$row['services']}<br>";
            echo "Derma Services: {$row['derma_services']}<br>";
            echo "Services 2: {$row['services2']}<br>";
            echo "FAQ: {$row['faq']}<br>";
            echo "Process: {$row['process']}<br>";
            echo "Services Images: {$row['services_images']}<br>";
            echo "Footer: {$row['footer']}<br>";
            echo "Footer 2: {$row['footer2']}<br>";
            echo "WhatsApp Button: {$row['w_app_button']}<br>";
            echo "API Notification: {$row['api_notification']}<br>";
            echo "Ad Source: {$row['ad_source']}<br>";
            echo "Header 1: {$row['header1']}<br>";
            echo "Partners: {$row['parteners']}<br>";
            echo "About Image: {$row['about_image']}<br>";
            echo "<hr>";
        }
    } elseif ($action == 'update') {
        $stmt = $db->prepare("UPDATE config SET 
            website_name = ?, dr_name = ?, phone_main = ?, action_url = ?, sheet_url = ?, form1_des = ?, cta = ?, cta_text = ?, form1_des2 = ?, form1_des3 = ?, form2_des = ?, form2_des2 = ?, footer_des1 = ?, footer_des2 = ?, footer_des3 = ?, footer_des4 = ?, before_after = ?, map = ?, services = ?, derma_services = ?, services2 = ?, faq = ?, process = ?, services_images = ?, footer = ?, footer2 = ?, w_app_button = ?, api_notification = ?, ad_source = ?, header1 = ?, parteners = ?, about_image = ? 
            WHERE id = ?");
        $stmt->execute([$website_name, $dr_name, $phone_main, $action_url, $sheet_url, $form1_des, $cta, $cta_text, $form1_des2, $form1_des3, $form2_des, $form2_des2, $footer_des1, $footer_des2, $footer_des3, $footer_des4, $before_after, $map, $services, $derma_services, $services2, $faq, $process, $services_images, $footer, $footer2, $w_app_button, $api_notification, $ad_source, $header1, $parteners, $about_image, $id]);
    } elseif ($action == 'delete') {
        $stmt = $db->prepare("DELETE FROM config WHERE id = ?");
        $stmt->execute([$id]);
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
header("Location: index.php");
exit;
?>
