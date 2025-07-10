<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>مؤسسة أجهزة الإطفاء</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Cairo', sans-serif;
      background: linear-gradient(135deg, #c0392b, #e74c3c);
      color: #ffffff;
      text-align: center;
      padding: 40px 20px;
      animation: fadeInBody 1.2s ease;
    }

    @keyframes fadeInBody {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .profile-img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      margin-bottom: 15px;
      object-fit: cover;
      border: 4px solid #ffffff;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
      animation: fadeIn 1.2s ease-in-out;
    }

    .brand-name {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 30px;
      color: #ffffff;
      animation: slideIn 1s ease-in-out;
    }

    @keyframes slideIn {
      0% { opacity: 0; transform: translateY(-20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .link-button {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      max-width: 400px;
      margin: 12px auto;
      padding: 14px 20px;
      background-color: #ffffff;
      color: #c0392b;
      font-size: 16px;
      border-radius: 12px;
      text-decoration: none;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      opacity: 0;
      animation: fadeInButton 1s ease forwards;
    }

    .link-button i {
      margin-left: 10px;
      font-size: 20px;
    }

    .link-button:hover {
      background-color: #f9f9f9;
      transform: translateY(-3px);
    }

    .whatsapp-btn {
      background-color: #25d366;
      color: white;
    }

    .whatsapp-btn:hover {
      background-color: #1ebe5d;
    }

    @keyframes fadeInButton {
      to { opacity: 1; }
    }

    .social-icons {
      margin-top: 40px;
      animation: fadeIn 1.5s ease-in-out;
    }

    .social-icons a {
      color: #ffffff;
      margin: 0 10px;
      font-size: 24px;
      transition: transform 0.3s, color 0.3s;
    }

    .social-icons a:hover {
      color: #f1c40f;
      transform: scale(1.2);
    }

    footer {
      margin-top: 50px;
      font-size: 13px;
      color: #f1f1f1;
      opacity: 0.8;
      animation: fadeIn 2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>

<body>

  <img src="logo.png" alt="شعار الشبكة الأولى" class="profile-img">
  
  <div class="brand-name">مؤسسة أجهزة الإطفاء</div>

  <a href="https://api.whatsapp.com/send?phone=966509448088&text=لدي%20استفسار%20يرجى%20التواصل%20معي" class="link-button whatsapp-btn" target="_blank">
    <i class="fab fa-whatsapp"></i> تواصل عبر واتساب
  </a>

  <a href="https://fieco998.com/" class="link-button">
    <i class="fas fa-globe"></i> موقعنا الإلكتروني
  </a>

  <a href="https://maps.app.goo.gl/ayZ1TCMffsdbernd7?g_st=com.google.maps.preview.copy" class="link-button" target="_blank">
    <i class="fas fa-location-dot"></i> لوكيشن فرع الخبر
  </a>

  <a href="https://maps.app.goo.gl/24boHx1c2xqPMNsRA?g_st=com.google.maps.preview.copy" class="link-button" target="_blank">
    <i class="fas fa-location-dot"></i> لوكيشن فرع الدمام
  </a>

  <a href="https://maps.app.goo.gl/VFWPSytSERtU1ix59" class="link-button" target="_blank">
    <i class="fas fa-location-dot"></i> لوكيشن فرع الرياض
  </a>

  <a href="https://maps.app.goo.gl/N8B3uA45c6ZkgEwt7?g_st=com.google.maps.preview.copy" class="link-button" target="_blank">
    <i class="fas fa-location-dot"></i> لوكيشن فرع حائل
  </a>

  <div class="social-icons">
    <a href="https://www.facebook.com/share/1Br7joz5Pj/" title="فيسبوك"><i class="fab fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/fieco.ksa?igsh=MTBhMHQxaDRycndhbA==" title="إنستقرام"><i class="fab fa-instagram"></i></a>
    <a href="https://x.com/fieco_ksa?t=TwBSw0aJ7j2dLzGyw6-tgQ&s=08" title="X"><i class="fab fa-x-twitter"></i></a>
    <a href="https://www.youtube.com/channel/UCazVuQa9MwachA9Otnm02oQ" title="يوتيوب"><i class="fab fa-youtube"></i></a>
    <a href="https://www.snapchat.com/add/fieco.ksa?share_id=CwBStRvU3lI&locale=en-US" title="سناب شات"><i class="fab fa-snapchat-ghost"></i></a>
    <a href="https://www.tiktok.com/@fieco_sa?is_from_webapp=1&sender_device=pc" title="تيك توك"><i class="fab fa-tiktok"></i></a>
  </div>

  <footer>
    جميع الحقوق محفوظة © مؤسسة أجهزة الإطفاء
  </footer>

</body>
</html>
