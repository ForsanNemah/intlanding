<!DOCTYPE html>
<html lang="ar" dir="rtl">


<?php include "info.php" ?>;



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/your/custom-rtl-styles.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      height: 50vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .success-box {
      padding: 40px;
      text-align: center;
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
      margin-top: 20px;
      background-color: #25D366;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      font-size: 16px;
      display: inline-flex;
      align-items: center;
      text-decoration: none;
    }

    .whatsapp-btn:hover {
      background-color: #1ebe5b;
      color: white;
      text-decoration: none;
    }

    .whatsapp-btn i {
      margin-left: 8px;
    }
  </style>
  <title>تم التسجيل بنجاح</title>
</head>
<body class="rtl">
  <div class="container">
    <div class="success-box">
      <h1>تم التسجيل بنجاح</h1>
      <p contenteditable="true">
        سيتم التواصل معكم لعرض مزايا البطاقة
      </p>

       <p contenteditable="true">


       لو مستعجل لمعرفة عروضنا تواصل معنا عبر واتساب 
🥰

      </p>


      <a class="whatsapp-btn" href="https://wa.me/<?php echo $phone_main ?>" target="_blank">
        <i class="bi bi-whatsapp"></i> تواصل عبر واتساب
      </a>
    </div>
  </div>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
