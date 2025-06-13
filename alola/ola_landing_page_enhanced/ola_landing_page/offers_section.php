 
  <section class="py-5 mt-4">
    <div class="container">
      <h2 class="text-center mb-5">قسم العروض</h2>
      <div class="row g-4">


       
 
       



        <?php
$folderPath = 'offers/'; // Replace 'path/to/folder' with the actual path to your folder

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
    
    
    
    
    
    <div class="col-md-6 col-lg-4">
    <div class="card text-center">
      <img src="offers/'.$image.'" class="card-img-top mx-auto d-block" alt="Offer 1">
      <div class="card-body">
        <h5 class="card-title" hidden>عرض </h5>
        <p contenteditable="true" class="card-text" hidden>Description of Offer 1</p>
        <a target="_blank" href="https://wa.me/'.$phone_main.'" class="btn btn-success">

الحصول على العرض

        </a>
      </div>
    </div>
  </div>
    
    
    
    
    
    ';




}
?>





       




      </div>
    </div>
  </section>

 