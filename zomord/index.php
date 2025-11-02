<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <?php

include "info.php";







if (isset($_GET['ad_source'])) {
    $ad_source = $_GET['ad_source'];
    //echo "Ad Source: " . htmlspecialchars($ad_source);
} else {
    //echo "Ad Source not provided.";
}

include "header.php";





include "floating.php";
?>


</head>
<body>
    <!-- Hero Section -->
     
 <?php


//include "form.php";
include "nav.php";
include "hero.php";
include "select_sub_select.php";



?>
    <!-- About Us Section -->
   <?php

include "about.php";
include "why_us.php";


?>

    <!-- Services Section -->
     

    <?php
   

//include "services.php";
include "services_images.php";

?>

    <!-- Before & After Section -->

      <?php

//include "bafter.php";

?>
    
    <!-- Offers Section -->
      

    <!-- Footer -->
      <?php

include "footer.php";

?>

    <!-- Floating Buttons -->
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    
</body>
</html>

