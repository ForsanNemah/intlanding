<!DOCTYPE html>
<html dir="rtl" lang="ar"">

<?php


include "head.php";
 

//include "nav.php";

?>

<body class="mainbg">


























  <?php

 



if($header==0){
  include "header0.php";

}


if($header==1){
  include "header1.php";

}

if($header==2){
  include "header2.php";

}


include "form.php";
//include "w_form.php";
//include "calls.php";

if($services_images==1){

  

  include "services_images.php";

}




//include "packages.php";
//include "about.php";
//include "why_us.php";
//include "gmap_reviews.php";



?>



<div>


<?php
//include "form.php";
include "w_app_form.php";



?>


</div>













<?php

 



if($about_image==1){
  include "about_image.php";

}
 



?>











<?php


if($w_app_button==1){
  include "w_app.php";

}





?>




<br>
<br>
  <div class="text-center">

 


 


<?php

if($before_after==1){

  echo '
  
  
  
  
  <a href="#cases_section">

  <button class="btn btn-primary btn-booking rounded-pill pulsate"> 

شوف حالات قبل وبعد 

</button>
  </a>
  
  
  
  
  
  ';

}


?>






  



</div>









 










<?php

if($services==1){

  echo '
  
  
  
  
  <div class="mt-4 text-center">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
 
 
 

 
 
 
 
 
  
  
  
  
  
  ';

  include "services.php";

}


?>















<?php

if($services2==1){

  echo '
  
  
  
  
  <div class="mt-4 text-center">

  <h1>
 
 
 قسم العروض 
 
  </h1>
 
 </div
 
 
  
  ';

  include "services2.php";

}


?>




















<?php

if($derma_services==1){

  echo '
  
  
  
  
  <div class="mt-4 text-center">

  <h1>
 
 
عروضنا
  </h1>
 
 </div
 
 
  
  ';

  include "derma_services.php";

}


?>

















<?php

if($services_images==1){

  

  //include "services_images.php";

}



if($parteners==1){

  

  include "parteners.php";

}

//include "team.php";





?>








































<br>
<br>

<?php
if($cta==1){



  echo '
  
  
  
  <div class="text-center">



  <a href="#myform">
  <button class="btn btn-primary btn-booking rounded-pill pulsate"> 
'.$cta_text.'
  
    </button>
  
  </a>
  
  
  </div>
  
  
  
  
  
  
  
  
  
  
  
  ';
}




?>
 




 

<?php


if($process==1){

  include "process.php";

}




?>












<?php

if($before_after==1){

include "before_after.php";

}

?>














<?php

if($videos==1){

include "videos.php";
//include "logos_slider.php";

}


?>




<?php

if($faq==1){

include "faq.php";
}


?>








<?php



if($footer==1){
  
   
  include "footer.php";
}


if($map==1){
  
  include "map.php";
   
}




if($footer2==1){
  
  include "footer2.php";
}


if($w_btn_only==1){
  
  include "w_btn_only.php";
}





?>






















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/js/all.min.js"
    integrity="sha384-PASTE-INTEGRITY-HERE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-PASTE-INTEGRITY-HERE"
    crossorigin="anonymous"></script>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
  AOS.init();
</script>


</body>

</html>