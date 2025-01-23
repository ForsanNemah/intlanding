
<!DOCTYPE html>
<html lang="en">
    



















<?php

include 'head.php';

 
?>





<?php
include 'info.php';
//include 'cta/cta_call.php';
include 'cta/cta_whatsapp.php';
//include 'cta/cta_insta.php';
//include 'cta/cta_snap.php';
//include 'cta/cta_gmap.php';

 
?>









<body>
  





<?php

//include "info.php";

?>

 <script>

  var php_var = "<?=$site_name?>";
   //alert(php_var);

 </script>
 















<div 
class="bg-light  "
>
<div id="cta_whatsapp" >
 


</div>



<div id="cta_call">
 


</div>
</div>



















    <div>
        
    </div>
    <!-- Header -->
    <?php

include 'logo_section.php';

 
?>

    <!-- Appointment Section -->






   

    <div id="count_down_counter">



</div>







<?php

//include "video.php";
include "form.php";
?>







	<div class="how-it-works-container section-container section-container-gray-bg  "    >
	        <div class="container">

         


          <?php

include 'about.php';

 
?>









	            <div class="row">


               

<div id="slider1"></div>
           

  </div>	 
<br>

  <div class="row">
	                 

                   <div id="slider2"></div>
                              
                   
                     </div>	 


                     <br>

  <div class="row">
	                 

                   <div id="slider3"></div>
                              
                   
                     </div>	 
                   
                   




</div>
 </div>
</div>













<div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <!-- <a class="btn btn-primary" style="background-color: #1c3c49 " href="#form">  سجل الان </a> -->
                </div>
            </div>
        </div>
    



<?php

include 'footer.php';

 
?>



      

    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="js/main.js"></script> -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    
    <script>

$(document).ready(function () {
  //alert(ad_source);

  //$("#source_id").val('dddd');

  //alert($("#source_id_form").val());



  $("#mony_id").on(' input', function(){
     //alert("wwe");
     $('#total_mony_id').attr('value',parseFloat( $("#mony_id").val()*.15)  +parseFloat( $("#mony_id").val() )    );
});










 
  var element = document.getElementById("myloader");
        element.style.display = "none"
        var done_icon = document.getElementById("done_icon");
        done_icon.style.display = "none"
 


  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

	var currentdate = new Date(); 
var datetime = "" + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + "  "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                //alert(datetime);


                //$("#includedContent").load("form_name_phn_type.php"); 
                $("#slider1").load("slider1.php"); 
                //$("#slider2").load("slider2.php"); 
                //$("#cta_whatsapp").load("cta/cta_whatsapp.php"); 
           // $("#cta_call").load("cta/cta_call.php"); 
               // $("#slider3").load("slider3.php"); 
                
               // $("#includedContent").load("form_name_phn.php"); 
                // $("#includedContent").load("form_only_whatsapp.php"); 
				
                //$("#count_down_counter").load("count_down.php");
                //$("#tabel_1").load("tabel_1.php"); 
 
    

      const scriptURL = "<?=$action_url?>";
      //alert(scriptURL);
  const form = document.forms['myform']
 
  form.addEventListener('submit', e => {

    //waitingDialog.show();
    
    
	$(':input[type=submit]').prop('disabled', true)
  $('#today').attr('value', datetime )
  $('#w_link_id').attr('value', 'wa.me/966'+$("#phn_id").val() )
  element.style.display = "block"
  //alert("progress")
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => 
 
      
      google_response()
      
      
     
      
      
    
   
    
	
    
	  )
      .catch(error => console.error('Error!', error.message))
  })


    
  function google_response() {
   
   element.style.display = "none";
   done_icon.style.display = "block"
   
   event_phn=$("#phn_id").val();
   snaptr('track','SIGN_UP', {
  'user_email': event_email,
    'user_phone_number': event_phn
});
    
   alert("تمت عملية التسجيل بنجاح وسيتم التواصل معك في اقرب وقت ");

   //window.location.replace("https://api.whatsapp.com/send?phone="+phn+"&text=%D8%AA%D9%81%D8%A7%D8%B5%D9%8A%D9%84%20%D8%A7%D9%83%D8%AB%D8%B1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%A7%D8%B9%D9%84%D8%A7%D9%86%20") ;




 
   //alert(event_phn);

   
   
} 
	
});










			












    </script>
</body>
</html>


<style>


.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}


/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
 














 

.carousel {
  width:700px;
  height:700px;
  margin:0 auto;
}

 

@media only all and (max-width: 500px) {
  

  .carousel {
  width:400px;
  height:500px;
  margin:0 auto;
}

}

 
 






select>option{ 
                   height:25px;
                 }









                 .pulsate {
    -webkit-animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite; 
    opacity: 0.5;
}
@-webkit-keyframes pulsate {
    0% { 
        opacity: 0.5;
    }
    50% { 
        opacity: 1.0;
    }
    100% { 
        opacity: 0.5;
    }
}







</style>
