<?php
// اسم الملف
$filename = 'forsan.vcf';

// تأكد أن الملف موجود
if (file_exists($filename)) {
    // إجبار المتصفح على تحميل الملف
    header('Content-Description: File Transfer');
    header('Content-Type: text/vcard');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
    readfile($filename);
    exit;
} else {
    echo "الملف غير موجود.";
}
