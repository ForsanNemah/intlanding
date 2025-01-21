<?php
// init_db.php
try {
    $db = new PDO('sqlite:config.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table
    $db->exec("CREATE TABLE IF NOT EXISTS config (
        id INTEGER PRIMARY KEY,
        website_name TEXT,
        dr_name TEXT,
        phone_main TEXT,
        action_url TEXT,
        sheet_url TEXT,
        form1_des TEXT,
        cta INTEGER,
        cta_text TEXT,
        form1_des2 TEXT,
        form1_des3 TEXT,
        form2_des TEXT,
        form2_des2 TEXT,
        footer_des1 TEXT,
        footer_des2 TEXT,
        footer_des3 TEXT,
        footer_des4 TEXT,
        before_after INTEGER,
        map INTEGER,
        services INTEGER,
        derma_services INTEGER,
        services2 INTEGER,
        faq INTEGER,
        process INTEGER,
        services_images INTEGER,
        footer INTEGER,
        footer2 INTEGER,
        w_app_button INTEGER,
        api_notification INTEGER,
        ad_source TEXT,
        header1 INTEGER,
        parteners INTEGER,
        about_image INTEGER
    )");
    echo "Database initialized successfully.";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
