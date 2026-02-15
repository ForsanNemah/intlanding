<?php
$folder = "images_only/";
$allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

$images = array_diff(scandir($folder), array('.', '..'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Images Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }
        .item {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .item img {
            max-width: 100%;
            border-radius: 8px;
        }
        .whatsapp-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #25D366;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        .whatsapp-btn:hover {
            background: #1ebe5d;
        }
    </style>
</head>
<body>

 

<div class="gallery">
    <?php foreach ($images as $image): ?>
        <?php
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed_types)):
        ?>
            <div class="item">
                <img src="<?= $folder . $image ?>" alt="">
                <a 
                    class="whatsapp-btn" 
                    href="https://wa.me/966570776673" 
                    target="_blank">
                  
                    طلب عبر واتساب
                </a>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

</body>
</html>
