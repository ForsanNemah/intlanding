
<?php


//include "list_model.php";

?>


<div class="form-container" id="myform" data-aos-duration="1500"  data-aos="zoom-in-up">
  <div class="row justify-content-center custom_row_margin">
    <div class="col-lg-6">
      <div class="mt-2 card">
        <div class="card-body form_bg" >
          <h1 class="text-center card-title pulsate" style="color: white;">
          <?php
          echo $form1_des;
          ?>
 



          </h1>















          <h2 class="text-center card-title " style="color: white;">
        

<?php
          echo $form1_des2;
          ?>



          </h2>



          <h2 class="mb-4 text-center card-title" style="color: white;">
        

        <?php
                  echo $form1_des3;
                  ?>
        
        
        
                  </h2>



          <form method="post" action="post_to_google_sheet.php" onsubmit="form1_action()">




          <input type="text" class="form-control" name="source" value="<?php echo $ad_source  ?> "  hidden>

          <input type="text" class="form-control" name="is_w_app" value="0"  hidden>













            <div class="mb-3">
              
              <input type="text" class="form-control" name="name" placeholder="الاسم" required>
            </div>


       <div class="mb-3">
  <input 
    id="phn_form1" 
    type="number" 
    class="form-control" 
    name="phone" 
    placeholder="رقم الجوال" 
    required 
    min="500000000" 
    max="5999999999"
  >
</div>


            <div class="mb-3">
              
              <input type="text" class="form-control" name="city" placeholder="المدينة" required>
            </div>



           





















































 <div class="mb-3"   >


         
<?php
//include "select_and_sub_select.php";
//include "model_locations.php";
//include "select_and_sub_select2.php";
//include "branches_model.php";
//include "list_model.php";

?>
            </div>



























<?php



if($services_list==1){
   

  echo '



<div class="mb-3"  >


<select name="service"    class="form-select">




';


$filename = 'services.txt'; // Specify the path to your text file

// Check if the file exists
if (file_exists($filename)) {
// Read the file into an array, with each line as an element
$lines = file($filename, FILE_IGNORE_NEW_LINES);

// Output the HTML select tag


// Iterate over the lines and create an option for each line
foreach ($lines as $line) {
echo '<option>' . htmlspecialchars($line) . '</option>';
}

// Close the HTML select tag

} else {
echo 'File not found.';
}



echo '
</select>

</div>
';
}
?>
























            





            <div class="text-center">


            <img  class="img-fluid" id="loading_gif" src="images/loading.gif" alt="Italian Trulli"  width="50" height="50" >


              <button id="form1_button" type="submit" class="btn btn-primary rounded-pill">احجز الان</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

































<script>















try {
  // كود يحتمل الخطأ
   
 
$('#loading_gif').hide();


function form1_action() {
  //alert("The form was submitted");
  
 
  document.getElementById("form1_button").disabled = true;
 

  //$('#form1_button').hide();
  //$('#loading_gif').show();
 
  //alert("wwe");
  document.getElementById('form1_button').innerText = 'يرجى الإنتظار سيتم تحويلك الان';




fbq('track', 'Purchase', {
  value: 149.00,
  currency: 'SAR'
});













//alert("submit");

  var event_phn=document.getElementById('phn_form1').value
 








//alert(event_phn);

ttq.track('Purchase', {
  value: 99.99, // قيمة الطلب
  currency: 'USD', // العملة (مثال: 'USD' أو 'SAR')
  contents: [
    {
      content_id: 'product123',
      content_name: 'Marcafe Coffee',
      quantity: 1,
      price: 149.00
    }
  ],
  content_type: 'product',
  user_properties: {
    phone_number: '+966'+event_phn, // رقم الجوال بصيغة دولية
    email: 'forsan20172017@gmail.com'     // البريد الإلكتروني
  }
});


















  if( tiktok_pixel_on==1){

    ttq.identify({
 
 "phone_number":"966"+event_phn  // string. The phone number of the customer if available. It must be hashed with SHA-256 on the client side.

});


ttq.track('CompleteRegistration', {});

  }




  if( snap_pixel_on==1){


    snaptr('track','SIGN_UP', {
  
  'user_phone_number': "966"+event_phn         
});

  }




















//alert("submited"+event_phn);





}






} catch (error) {
  // الكود هنا يتنفذ فقط إذا حصل خطأ
  console.error("🚨 حصل خطأ:", error.message);
}


</script>