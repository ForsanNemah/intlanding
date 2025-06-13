<!DOCTYPE html>
<html>
<head>

<?php include "info.php" ?>

  <title>
  <?php

echo $website_name;

?>
  </title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: white;
    }

    #image-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: transform 2s ease-in-out;
    }

    #image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div id="image-container">
    <img src="preloader.jpg" alt="Redirect Image">
  </div>





  <div id="index_id">


  <?php 
  
  
  
 
  include "index.php" ;
  
  
  ?>;

  </div>




 

  <script>
    // Set the URL to redirect to
    var myDiv = document.getElementById("index_id");

// Hide the div
myDiv.style.display = "none";

    const redirectUrl = "index.php";

    // Wait for 2 seconds and then zoom out the image
    setTimeout(function() {
      const imageContainer = document.getElementById('image-container');
      imageContainer.style.transform = 'scale(0)';

      myDiv.style.display = "block";
    }, 2000);

    // Wait for 4 seconds and then redirect
    
   


    
  </script>
</body>
</html>