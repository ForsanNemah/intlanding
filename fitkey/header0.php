<div class="mt-5 container-fluid">
  <!-- Logo Section -->
  <div class="row justify-content-center" id="order_section">
    <div class="col-auto text-center">
      <?php
        if (isset($logo)) {
          echo '<img src="' . htmlspecialchars($logo) . '" alt="Logo" class="img-fluid logo">';
        }
      ?>
    </div>
  </div>

  <!-- Website and Doctor Name Section -->
  <div class="mt-3 row justify-content-center">
    <div class="col-auto text-center">
      <h2><?php echo htmlspecialchars($website_name); ?></h2>
      <h4 class="mt-2 text-muted"><?php echo htmlspecialchars($dr_name); ?></h4>
    </div>
  </div>

  <!-- Tabby and Tamara Section -->
  <div class="mt-5 row justify-content-center">
    <div class="col-auto text-center pulsate">
      <?php
        if (isset($taby_and_tamara) && $taby_and_tamara == 1) {
          echo '<img src="tandt.png" alt="Tabby and Tamara" class="img-fluid"  ">';
        }
      ?>
    </div>
  </div>
</div>

<script>
  // Hide elements with the 'image-container' class
  document.querySelectorAll('.image-container').forEach(el => {
    el.style.display = 'none';
  });
</script>

<style>
  .logo {
    width: 150px; /* Adjust logo size */
    max-height: 100px;
    object-fit: contain;
  }

  h2 {
    font-size: 1.75rem;
    font-weight: bold;
  }

  h4 {
    font-size: 1.25rem;
    color: #6c757d; /* Muted color for subtitle */
  }

  .img-fluid {
    max-width: 100%;
    height: auto;
  }

  .container-fluid {
    max-width: 100%;
    padding: 0;
  }
</style>
