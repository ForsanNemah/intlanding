<div class="mt-5 d-flex justify-content-center" id="order_section">
  <div class="text-center row col-sm-6 col-md-1">
    <?php




echo '<img src="'.$logo.'" alt="Logo" class="img-fluid logo" >';

    /*
    $folder = 'footer_logo'; // Replace with the actual folder path

    // Get the list of files in the folder
    $files = scandir($folder);

    // Iterate over each file in the folder
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue; // Skip current and parent directory entries
        }

        $filePath = $folder . '/' . $file;

        // Check if the file is an image
        if (is_file($filePath) && getimagesize($filePath) !== false) {
            // Display the image with custom styles
            
        }

        
    }

    */
    ?>
  </div>
</div>

<div class="d-flex justify-content-center">
  <h2><?php echo $website_name; ?></h2>
</div>

<div class="d-flex justify-content-center">
  <h4><?php echo $dr_name; ?></h4>
</div>

<div class="row">
  <div class="d-flex justify-content-center"></div>
  <div class="row">
    <?php
    if($taby_and_tamara==1){
      echo ' <img src="tandt.png" alt="Image" class="responsive">';
    }
    ?>
  </div>
</div>

<script>
  var elements = document.getElementsByClassName('image-container');

  // Loop through the elements and hide them
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = 'none';
  }
</script>

<style>
  .form-container {
    background-size: cover;
    margin-top: 0;
  }

  /* Custom style to control logo size */
  .logo {
    width: 150px; /* Increased the size of the logo */
  }
</style>
