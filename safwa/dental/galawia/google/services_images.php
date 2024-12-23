 
<div id="services_id" class="mb-4"  >

<br>
<br>
</div>



 <div class="mt-4 text-center"  >

<h1>


حالات قبل ويعد

</h1>

</div


 
  <section >
    <div class="container">



      <div class="row">








      <?php
$folderPath = 'intshar_images/'; // Replace 'path/to/folder' with the actual path to your folder

$files = scandir($folderPath); // Get all files and directories from the folder

$imageFiles = array();

foreach ($files as $file) {
    $filePath = $folderPath . '/' . $file;
    
    // Check if the file is a regular file and ends with a known image extension
    if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
        $imageFiles[] = $file;
    }
}

// Output the image file names
foreach ($imageFiles as $image) {
    ///echo $image . "<br>";


    echo '
    
    
    
    
    <div class="col-md-4" data-aos-duration="1500" data-aos="zoom-in-up">
    <div class="service">
      <img src="intshar_images/'. $image.'" alt="Service 3" class="img-fluid">



 




      <h3> </h3>
      <p contenteditable="true"> </p>
    </div>

     <a href="#order_section" class="col-6">

  <button class="mb-5 btn btn-danger btn-lg">   
     
  حجز موعد كشف مجاني 
     </button>
    </a>
  </div>
    
    
    
    
    
    
    
    
    ';

/*
    echo '
    
    
    
    
    <a href="#order_section" class="col-12">

  <button class="mb-5 btn btn-danger btn-lg">   
     
     اطلب الان
     </button>
    </a>
   
    
    
    
    
    ';
*/



}
?>






























 











      </div>



     


    </div>
  </section>