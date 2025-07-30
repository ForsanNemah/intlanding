<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>روابط سريعة</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tajawal Font -->
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap RTL CSS & Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Tajawal', sans-serif;
    }
    .container {
      max-width: 600px;
    }
    .link-button {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .link-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
    footer {
      margin-top: 50px;
      text-align: center;
      color: #6c757d;
    }
    .social-icons a {
      color: #0d6efd;
      font-size: 1.5rem;
      margin: 0 10px;
      transition: color 0.3s;
    }
    .social-icons a:hover {
      color: #084298;
    }
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      left: 20px;
      background-color: #25d366;
      color: white;
      font-size: 28px;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      text-align: center;
      line-height: 55px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      transition: background-color 0.3s;
    }
    .whatsapp-float:hover {
      background-color: #1ebc59;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container py-5">
    <h2 class="text-center mb-4 fw-bold"> 
        
روابط فرسان النعمة

</h2>

    <?php
      $apiUrl = 'https://opensheet.elk.sh/1TiqMmx4srBHp6oQIPOmuIkHOgj7ulQ-IDFb4unX_Uus/Sheet1';
      $json = @file_get_contents($apiUrl);
      $data = json_decode($json, true);

      if (is_array($data)) {
        foreach ($data as $item) {
          $name = htmlspecialchars($item['name']);
          $url = htmlspecialchars($item['url']);

          echo "
            <div class='mb-3'>
              <a href='$url' target='_blank' class='btn btn-primary w-100 link-button'>
                $name
              </a>
            </div>
          ";
        }
      } else {
        echo "<div class='alert alert-danger text-center'>تعذر تحميل البيانات. حاول مرة أخرى لاحقًا.</div>";
      }
    ?>
  </div>

  <footer class="py-4">
    <div class="social-icons mb-2">
      <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
      <a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
      <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a>
    </div>
    <div>&copy; <?php echo date('Y'); ?> جميع الحقوق محفوظة</div>
  </footer>

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/966568430828" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
