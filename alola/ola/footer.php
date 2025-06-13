 
  <style>
    
  
    
  </style>
</head>
<body>
  <footer class="mt-4 footer" id="footer_id" data-aos-duration="1500"  data-aos="zoom-in-up"> 
    <div class="container">
      <div class="row">


        <div class="col-8">

        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p contenteditable="true" class="text-center fs-3">   
            
    
    <?php
echo $website_name;
    ?>
    
    
    </p>
         
        
      </div>
        </div>



        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p contenteditable="true" class="text-center"> 


        <?php
//echo $footer_des2;
    ?>
        </p>
         
        
      </div>
        </div>




        
        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p contenteditable="true" class="text-center ">

        <?php
//echo $footer_des3;
    ?>


        </p>
         
        
      </div>
        </div>






        
        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p contenteditable="true" class="text-center"
        
        
        <?php
//echo $footer_des4;
    ?>
        
      </p>


       
      
        
      </div>
        </div>



        <div class="row">
        <div class="col-8 d-flex justify-content-center">


        <a href="#myform">


        <button type="button" class="btn btn-primary rounded-pill pulsate"> احجز الحين</button>

        </a>
     
      














        
        
      </div>













     











        </div>











       
        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        

        <hr style="height: 3px; background-color: white; width: 450px;">
        
      </div>
        </div>
        
       
 
       
          















        </div>





        















        <div class="col-4"  >



        <?php
$folderPath = 'footer_logo/'; // Replace 'path/to/folder' with the actual path to your folder

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
    
    
    
   
    
    <img src="footer_logo/'.$image.'" class="img-fluid"    >
    
    
    
    
    ';




}
?>








        
        </div>
      </div>
    </div>







   



  <div class="row"  style="background-color: #2099f4;">


  <div class="container" hidden>
  <div class="row justify-content-center">
    <div class="col-auto">
      <a href="https://www.facebook.com/intshar.ksa" target="_blank"><i class="text-white fab fa-lg fa-facebook"></i></a>
    </div>
    <div class="col-auto">
      <a href="https://www.instagram.com/intshar_ksa" target="_blank"><i class="text-white fab fa-lg fa-instagram"></i></a>
    </div>
    <div class="col-auto">
      <a href="#"><i class="text-white fas fa-lg fa-times" target="_blank"></i></a>
    </div>
    <div class="col-auto">
      <a href="https://x.com/intshar_ksa" target="_blank"><i class="text-white fab fa-lg fa-twitter"></i></a>
    </div>
    <div class="col-auto">
      <a href="#"><i class="text-white fab fa-lg fa-snapchat" target="_blank"></i></a>
    </div>
    <div class="col-auto">
      <a href="https://www.tiktok.com/@intshar_ksa" target="_blank"><i class="text-white fab fa-lg fa-tiktok"></i></a>
    </div>
  </div>
</div>












</div>


<div class="container">
    <div class="row justify-content-center">
      <div class="text-center col-md-6">
 
       <a href="https://intshar.net/home/" style=" text-decoration: none;">

بواسطة  قمة الإنتشار  للتسويق الالكتروني 


       </a>



      </div>
    </div>
  </div>


  </footer>

  