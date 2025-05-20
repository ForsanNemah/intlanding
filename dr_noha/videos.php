
<?php
$videos = [
    'MoKw9U0-taU',
    '6N9Q9T7n5tU'
    // Add more video URLs as needed
];
?>





<div class="mt-4 mb-4 text-center"  >

<h1>


فيديوهات من تشافي 

</h1>

</div

      

<div class="container mt-4">
















        <div class="row">
            <?php foreach ($videos as $video):
                
              
//echo $video;
              
echo '




 <div class="container ">
  <div class="row justify-content-center">
    <div class="col-lg-4">
      <div class="iframe-container">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/'.$video.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

           
      </div>
    </div>
  </div>
</div>
 <br>


















';
                
             endforeach; ?>
        </div>
    </div>

 