



<?php
//$rootDir = $_SERVER['DOCUMENT_ROOT'];
//echo "Root Directory: " . $rootDir;


?>
















<div class="d-flex justify-content-center ">



<div class="row col-6 col-md-2">



<?php
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
      // Display the image path
      //echo "Image: $filePath<br>";



      


     echo ' <img src="'.$filePath.'" alt="Logo"  class="img-fluid"   >


     ' ;


    
  }
}
?>









</div>
 

</div>






<div class="mt-5 d-flex justify-content-center ">

<h2>



<?php
echo $website_name;

?>
 </h2>
 

</div>



<div class=" d-flex justify-content-center">

 
<h4> 

<?php
echo $dr_name;

?>


</h4>

</div>





<div class="d-flex justify-content-center">

 
<h4> 

السعودية-الأردن-تركيا


</h4>

</div>






  <div class="row">

  <div class="d-flex justify-content-center ">







 









  </div>


    <div class="mt-5 row" >

    <?php


if($taby_and_tamara==1){
  //echo ' <img src="tandt.png" alt="Image"  class="responsive"   >';

}




?>
   
    </div>
    
  </div>

 

  <script>


//alert("wwe");

var elements = document.getElementsByClassName('image-container');

// Loop through the elements and hide them
for (var i = 0; i < elements.length; i++) {
  elements[i].style.display = 'none';
}


//alert("wwe2");


  </script>



<style>


.form-container {
    background-size: cover;
    margin-top: 0;
}






.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y)* -1);
    margin-right: calc(var(--bs-gutter-x) / 2);
    margin-left: calc(var(--bs-gutter-x) / 2);
}


 
</style>