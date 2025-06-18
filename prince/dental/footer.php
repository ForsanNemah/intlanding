<style>
  .footer {
    background-color: #ffffff; /* خلفية بيضاء */
    color: #333; /* لون نص غامق */
    padding: 40px 0;
  }
  .footer p {
    margin-bottom: 10px;
  }
  .footer hr {
    background-color: #ccc;
    height: 2px;
    width: 60%;
  }
  .footer .btn-primary {
    font-size: 16px;
    padding: 10px 25px;
  }
  .social-icons i {
    margin: 0 10px;
    font-size: 22px;
    color: #2099f4; /* لون أيقونات التواصل الأزرق */
  }
  .footer a {
    color: #2099f4;
  }
</style>
</head>
<body>

<footer class="footer mt-4" id="footer_id" data-aos-duration="1500" data-aos="zoom-in-up"> 
  <div class="container">
    <div class="row">
      <!-- النصوص -->
      <div class="col-md-8 text-center">
        <p class="fs-3">
          <?php echo $website_name; ?>
        </p>

        <p>السعودية   </p>

        <p contenteditable="true">
          <?php // echo $footer_des3; ?>
        </p>

        <p contenteditable="true">
          <?php // echo $footer_des4; ?>
        </p>

        <a href="#order_section">
          <button type="button" class="btn btn-primary rounded-pill pulsate mt-2">
   الحصول على استشارة مجانية
          </button>
        </a>

        <hr class="mt-4">
      </div>

      <!-- الشعار -->
      <div class="col-md-4 text-center">
        <?php
          echo '<img src="'.$logo.'" alt="Logo" class="img-fluid logo">';
        ?>
      </div>
    </div>

    <!-- روابط التواصل -->
    <div class="row mt-3" style="background-color: #f8f8f8;" hidden>
      <div class="col text-center social-icons py-2">
        <a href="https://www.facebook.com/intshar.ksa" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/intshar_ksa" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fas fa-times" target="_blank"></i></a>
        <a href="https://x.com/intshar_ksa" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-snapchat"></i></a>
        <a href="https://www.tiktok.com/@intshar_ksa" target="_blank"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>

    <!-- الحقوق -->
    <div class="row mt-3">
      <div class="col text-center">
        <?php 
        if ($footer_cp == 1) {
          echo '<a href="https://intshar.net" style="text-decoration: none;">بواسطة قمة الانتشار للتسويق الالكتروني</a>';
        }
        ?>
      </div>
    </div>
  </div>
</footer>
