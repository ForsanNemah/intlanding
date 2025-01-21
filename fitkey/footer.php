<style>
  .footer {
    background-color: #f8f9fa;
    padding: 2rem 0;
  }

  .footer p, .footer a {
    color: #007bff; /* Bootstrap primary blue */
    font-size: 1rem;
    text-decoration: none;
  }

  .footer a:hover {
    text-decoration: underline;
    color: #0056b3; /* Darker blue for hover */
  }

  .footer .social-icons a {
    margin: 0 10px;
    color: #fff;
    font-size: 1.5rem;
  }

  .footer .logo {
    max-width: 150px;
    margin-bottom: 1rem;
  }

  .footer hr {
    height: 2px;
    background-color: #ddd;
    border: none;
    width: 50%;
    margin: 1.5rem auto;
  }
</style>

<footer class="mt-4 footer" id="footer_id" data-aos-duration="1500" data-aos="zoom-in-up">
  <div class="container">
    <div class="row">
      <!-- Main Content -->
      <div class="col-md-8">
        <div class="text-center">
          <p class="fs-3"><?php echo $website_name; ?></p>
          <p>
            
          </p>
          <p contenteditable="true"><?php // echo $footer_des3; ?></p>
          <p contenteditable="true"><?php // echo $footer_des4; ?></p>
          <a href="#order_section">
            <button type="button" class="btn btn-primary rounded-pill pulsate">
              <?php echo $cta_form; ?>
            </button>
          </a>
          <hr>
        </div>
      </div>

      <!-- Logo Section -->
      <div class="text-center col-md-4">
        <?php
          // Dynamically load the logo
          echo '<img src="' . $logo . '" alt="Logo" class="img-fluid logo">';
        ?>
      </div>
    </div>

    <!-- Social Links -->
    <div  hidden class="mt-4 row" style="background-color: #2099f4; padding: 1rem 0;">
      <div class="text-center col">
        <div class="social-icons">
          <a href="https://www.facebook.com/intshar.ksa" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/intshar_ksa" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fas fa-times"></i></a>
          <a href="https://x.com/intshar_ksa" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-snapchat"></i></a>
          <a href="https://www.tiktok.com/@intshar_ksa" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>

    <!-- Footer Credits -->
    <div class="mt-3 row">
      <div class="text-center col">
        <?php 
          if ($footer_cp == 1) {
            echo '<a href="https://2moh.net/home/" style="text-decoration: none;">بواسطة طموح للتسويق الالكتروني</a>';
          }
        ?>
      </div>
    </div>
  </div>
</footer>
