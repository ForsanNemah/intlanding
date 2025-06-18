<style>
  .footer {
    background-color: #ffffff; /* خلفية بيضاء */
    color: #000000; /* خط أسود */
    padding: 2rem 0;
  }

  .footer p,
  .footer a,
  .footer button {
    color: #000000;
  }

  .footer hr {
    background-color: #000;
  }

  .pulsate {
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  @media (max-width: 768px) {
    .footer img {
      max-width: 100px;
      margin-bottom: 10px;
    }

    .footer button {
      width: 100%;
    }

    .footer p {
      font-size: 1rem;
    }
  }
</style>

<footer class="mt-4 footer" id="footer_id" data-aos-duration="1000" data-aos="zoom-in-up">
  <div class="container">
    <div class="row">
      <!-- القسم النصي -->
      <div class="col-12 col-md-8 text-center">
        <p contenteditable="true" class="fs-4 mb-2">
          <?php echo $website_name; ?>
        </p>
        <p contenteditable="true" class="mb-2">
          <?php /* echo $footer_des2; */ ?>
        </p>
        <p contenteditable="true" class="mb-2">
          <?php /* echo $footer_des3; */ ?>
        </p>
        <p contenteditable="true" class="mb-3">
          <?php /* echo $footer_des4; */ ?>
        </p>

        <a href="#myform">
          <button type="button" class="btn btn-primary rounded-pill pulsate">
            التواصل مع فريق المبيعات
          </button>
        </a>

        <hr class="my-4" style="height: 3px; width: 100%;">
      </div>

      <!-- الشعارات -->
      <div class="col-12 col-md-4 text-center mb-3">
        <?php
        $folderPath = 'footer_logo/';
        $files = scandir($folderPath);
        foreach ($files as $file) {
          $filePath = $folderPath . '/' . $file;
          if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
            echo '<img src="' . $filePath . '" class="img-fluid mb-2" alt="logo">';
          }
        }
        ?>
      </div>
    </div>

    <!-- روابط التواصل الاجتماعي (مخفية حسب الكود الأصلي) -->
    <div class="row py-3 d-none">
      <div class="col text-center">
        <a href="https://www.facebook.com/intshar.ksa" target="_blank"><i class="text-dark fab fa-facebook fa-lg mx-2"></i></a>
        <a href="https://www.instagram.com/intshar_ksa" target="_blank"><i class="text-dark fab fa-instagram fa-lg mx-2"></i></a>
        <a href="#"><i class="text-dark fas fa-times fa-lg mx-2"></i></a>
        <a href="https://x.com/intshar_ksa" target="_blank"><i class="text-dark fab fa-twitter fa-lg mx-2"></i></a>
        <a href="#"><i class="text-dark fab fa-snapchat fa-lg mx-2"></i></a>
        <a href="https://www.tiktok.com/@intshar_ksa" target="_blank"><i class="text-dark fab fa-tiktok fa-lg mx-2"></i></a>
      </div>
    </div>

    <!-- توقيع -->
    <div class="row mt-3">
      <div class="col text-center">
        <a hidden href="https://intshar.net/home/" style="text-decoration: none; color: #000;">
          بواسطة قمة الإنتشار للتسويق الالكتروني
        </a>
      </div>
    </div>
  </div>
</footer>
