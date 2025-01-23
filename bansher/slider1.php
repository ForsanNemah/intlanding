<?php


 



make_slider("0","one","بنشر متنقل ");
/*
make_slider("0/2","tow","د/عبدالمجيد جاويش");
make_slider("0/3","three"," د/محمد عبد العزيز");
make_slider("0/4","four","د/محمد عمران");
make_slider("0/5","five","د/فضل ابراهيم");
make_slider("0/6","six","د/هادية حسون ");
*/
//make_slider("sidebar2","tow");
//make_slider("sidebar3","three");


?>








<?php








  function  make_slider ($dir,$id,$des)


{


 


  $slider_images;

  if ($handle = opendir($dir)) {
    $counter=0;
  
      while (false !== ($entry = readdir($handle))) {
  
          if ($entry != "." && $entry != "..") {



           
            //echo $entry."<br>";
  

            if( $counter==0){







              $slider_images="<div class='item  active '>
  
              <img src='$dir/$entry' class='img-responsive' alt='Responsive image'   >
            
              </div>"."";












            }
            else{

         

              $slider_images=$slider_images." <div class='item '>
  
              <img src='$dir/$entry' class='img-responsive' alt='Responsive image'   >
            
              </div>"." ";

            }



            $counter++;






  
 
             
          }
      }
  
      closedir($handle);
  }
  
  









 //echo $slider_images."<br>";
 //echo "<br>";
 //echo "<br>";
 //echo "<br>";
 //echo "<br>";
































echo "

 

  <h2>  
  
 $des


 

</h2>
<br>

 
<br>
<div id='$id' class='carousel slide' data-ride='carousel'  >
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#$id' data-slide-to='0' class='active'></li>
      <li data-target='#$id' data-slide-to='1'></li>
      <li data-target='#$id' data-slide-to='2'></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class='carousel-inner' >

	
      

     
       

   
    
    

          

         

 

       

        

 

 
 ".$slider_images."
           

          



           




         


           
    
       

    <!-- Left and right controls -->
    <a class='left carousel-control' href='#$id' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#$id' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right'></span>
      <span class='sr-only'>Next</span>
    </a>

  </div>
  
  </div>






";


}


?>



