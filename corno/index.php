<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مواقع الفروع</title>

  <!-- Bootstrap 5 RTL -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google Font: Tajawal -->
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(145deg, #f9fbfd, #e9eff5);
      font-family: 'Tajawal', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 30px 15px;
    }

    .card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      padding: 40px 30px;
      width: 100%;
      max-width: 500px;
      text-align: center;
      position: relative;
    }

    .logo {
      max-width: 150px;
      margin-bottom: 20px;
    }

    /* logo2 ملتصق بالزر الأول */
    .logo2 {
      display: block;
      max-width: 100px;
      margin: 0 auto 2px auto; /* مسافة صغيرة تحت الصورة */
      position: relative;
      right: auto;
      left: auto;
      left: -170px;  
    }


    @media (max-width: 576px) {
  .logo2 {
    max-width: 150px;   /* تكبير الحجم في الهواتف */

   
    


  }
}


    .btn-location {
      position: relative;
      font-size: 1.1rem;
      padding: 14px 24px;
      border-radius: 12px;
      background-color: #be6e29;
      color: white;
      font-weight: bold;
      margin: 10px 0;
      display: block;
      text-align: center;
      text-decoration: none;
    }

    .btn-location:hover {
      background-color: #0056b3;
      transform: scale(1.02);
      text-decoration: none;
      color: white;
    }

    .btn-location .material-icons {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 22px;
    }

    /* الصور الإضافية أسفل الأزرار */
    .extra-image {
      width: 100%;
      border-radius: 12px;
      margin-top: 15px;
    }

    /* Floating WhatsApp Button */
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 1000;
      background-color: #25D366;
      color: white;
      padding: 12px 14px;
      border-radius: 50%;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
      width: 55px;
      height: 55px;
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
      color: white;
      text-decoration: none;
    }

    @media (max-width: 576px) {
      .btn-location {
        font-size: 1rem;
        padding: 12px 18px;
      }

      .logo {
        max-width: 120px;
      }

      .logo2 {
        max-width: 120px;
      }
    }
  </style>

  <!-- Snapchat Pixel Code -->
  <script type='text/javascript'>
    (function(e,t,n){
      if(e.snaptr) return;
      var a = e.snaptr = function(){
        a.handleRequest ? a.handleRequest.apply(a, arguments) : a.queue.push(arguments);
      };
      a.queue = [];
      var s = 'script';
      var r = t.createElement(s);
      r.async = !0;
      r.src = n;
      var u = t.getElementsByTagName(s)[0];
      u.parentNode.insertBefore(r, u);
    })(window, document, 'https://sc-static.net/scevent.min.js');

    snaptr('init', '41698027-2ac5-47ce-8717-4c7898b2d339');
    snaptr('track', 'PAGE_VIEW');
  </script>
</head>

<body>

  <div class="card animate__animated animate__fadeInUp">

    <!-- Logo -->
    <img src="corno.png" alt="الشعار" class="logo" />

    <!-- logo2 ملتصق بالزر الأول -->
    <img src="logo2.png" alt="الشعار" class="logo2" />

    <!-- Buttons -->
    <a href="https://goo.gl/maps/h2xTTDnnjnYMVCSj9" target="_blank"
       class="btn-location" onclick="trackViewContent()">
      <span class="material-icons">location_on</span>
      الدمام - الفيصليه
    </a>
    <a href="https://maps.app.goo.gl/N8MQirpkU8R4KLMT9" target="_blank"
       class="btn-location" onclick="trackViewContent()">
      <span class="material-icons">location_on</span>
      الخبر - الشراع
    </a>
    <a href="https://goo.gl/maps/grhVRPZcVE3QXqKU8" target="_blank"
       class="btn-location" onclick="trackViewContent()">
      <span class="material-icons">location_on</span>
      الظهران
    </a>
    <a href="https://goo.gl/maps/YLbGgaoAPanYBgwX9" target="_blank"
       class="btn-location" onclick="trackViewContent()">
      <span class="material-icons">location_on</span>
      الخبر العزيزية (الخزامى)
    </a>

    <!-- الصور الجديدة -->
    <img src="corno1.jpg" alt="صورة إضافية 1" class="extra-image" />
    <img src="corno2.jpg" alt="صورة إضافية 2" class="extra-image" />

  </div>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/966598874795" target="_blank" class="whatsapp-float" aria-label="تواصل عبر واتساب">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 448 512" width="28" height="28">
      <path d="M380.9 97.1C339 55.2 283.1 32 224.5 32c-118.3 0-213.6 95.2-213.6 213.4 0 37.5 9.8 74 28.4 106.2L4.2 480l131.5-34.5c30.5 16.6 65 25.3 100.6 25.3h.1c118.2 0 213.6-95.3 213.6-213.5 0-58.6-23.2-114.5-65.1-156.2zM224.5 438c-30.5 0-60.4-8.2-86.4-23.7l-6.2-3.7-77.9 20.5 20.8-76.1-4-6.3c-17.9-28.4-27.4-61.3-27.4-94.4 0-98.4 80.2-178.5 178.6-178.5 47.6 0 92.3 18.5 126 52.2s52 78.3 52 125.9c0 98.4-80.2 178.6-178.5 178.6zm101.7-138.1c-5.6-2.8-33.1-16.3-38.2-18.2-5.1-1.9-8.8-2.8-12.5 2.8s-14.4 18.2-17.6 21.9c-3.2 3.8-6.5 4.2-12.1 1.4-33.1-16.5-54.7-29.5-76.5-66.7-5.8-10 5.8-9.3 16.5-30.9 1.8-3.8.9-7-0.5-9.8-1.4-2.8-12.5-30-17.1-41.1-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2s-9.8 1.4-14.9 7c-5.1 5.6-19.5 19-19.5 46.3 0 27.3 20 53.7 22.7 57.4s39.3 60.1 95.3 84.2c13.3 5.8 23.6 9.2 31.7 11.8 13.3 4.2 25.4 3.6 35-2.2 10.7-6.3 33.1-30.2 37.8-59.4 4.7-29.3 0-54.4-5.6-59.1z"/>
    </svg>
  </a>

  <!-- ViewContent Tracker -->
  <script>
    function trackViewContent() {
      snaptr('track', 'VIEW_CONTENT');
    }
  </script>

</body>
</html>
