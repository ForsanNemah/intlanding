<!DOCTYPE html>
<html lang="ar">
<head>

  <?php include "info.php";?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      text-align: center;
    }

    .container {
      height: 50vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .success-box {
      padding: 40px;
      background-color: #ffffff;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .success-box h1 {
      font-size: 36px;
      color: #28a745;
      margin-bottom: 20px;
    }

    .success-box p {
      font-size: 18px;
      color: #6c757d;
    }

    .whatsapp-btn {
      background-color: #25d366;
      color: white;
      font-size: 18px;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
      margin-top: 10px;
    }

    .whatsapp-btn:hover {
      background-color: #1ebea5;
      color: white;
    }
  </style>
  <title>تم التسجيل بنجاح</title>
</head>
<body>
  <div class="container">
    <div class="success-box">
      <h1>تم التسجيل بنجاح</h1>
      <p contenteditable="true"> سيتم التواصل معكم في أسرع وقت </p>
      
      <a href="https://wa.me/<?php echo $phone_main ?>" target="_blank" class="whatsapp-btn">
        تواصل معنا عبر واتساب
      </a>

      <br>

      <a hidden  href=" " class="btn btn-success mt-3">العودة إلى الصفحة الرئيسية</a>
    </div>
  </div>
</body>
</html>
