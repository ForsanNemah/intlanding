<div class="container mt-5 text-center" id="order_section">
  <div class="row justify-content-center">
    <div class="col-md-3 col-sm-6">
      <?php
        echo '<img src="'.$logo.'" alt="Logo" class="img-fluid logo mx-auto d-block">';
      ?>
    </div>
  </div>

  <h2 class="mt-4"><?php echo $website_name; ?></h2>
  <h4><?php echo $dr_name; ?></h4>

  <?php if ($taby_and_tamara == 1): ?>
    <div class="mt-3">
      <img src="tandt.png" alt="Payment Option" class="img-fluid responsive">
    </div>
  <?php endif; ?>
</div>

<script>
  // Hide elements with class 'image-container'
  document.querySelectorAll('.image-container').forEach(el => el.style.display = 'none');
</script>

<style>
  .form-container {
    background-size: cover;
    margin-top: 0;
  }

  .logo {
    width: 220px; /* Increased logo size */
  }

  .responsive {
    max-width: 100%;
    height: auto;
  }
</style>
