

<section class=" appointment"  >
        <div class="appointment-section">
            <div class="container">


            
















                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form">
                            <div class="appointment-form text-center">



          

<div class="container h-100 d-flex justify-content-center">
<div class="appointment-title text-light" id="myloader"         >
<div class="loader"></div> 
</div>
</div>


<div class="container h-100 d-flex justify-content-center">

<div class="appointment-title text-light"  id="done_icon"  >
<img src="ads/done.gif" class="img-fluid" width='100px' height='100px' alt="Responsive image"   >

</div>

</div>







                                <form id="form" role="form"      method="post" name="myform" bgcolor=”#800000">





                                    <p class="appointment-title text-light">     

                                    <?php

include 'info.php';

 echo $info['ev_form_sub1'];




?>
                                    
                                    </p>
                                    <p class="appointment-title text-light" style="font-size:1.2em;direction:rtl">   
                                  
                                  
                                  
        وسيتم نقلك الى وتساب مباشرة 
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  </p>












 




















                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="الاسم" dir="rtl" required>
                                    </div>


                                    <div class="form-group">
                                        <input name="phone" id="phn_id" type="number" class="form-control" placeholder="رقم الهاتف" dir="rtl" required>
                                    </div>

                                   

                                 


                                   




                                    <div class="form-group" hidden>
                                        <input name="source" type="text" class="form-control"    value="<?php
           require('info.php');
//echo "wwe";
 
echo  $add_source;

?>">
                                    </div>




<?php



//include "services_select.php";

?>


 





                                    <div class="form-group"  hidden >
    <label class="sr-only" for="r-form-1-email">date</label>
    <input type="text" name="date_and_time" id="today" placeholder=" التاريخ  " class="r-form-1-email form-control" id="r-form-1-email"  >
</div>


<div class="form-group" hidden>
                                        <input name="whatsapp_link" id="w_link_id" type="text" class="form-control"   >
                                    </div>




























                                    <button id="send" type="submit" class="btn submit-btn">فتح وتساب </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 passion">
                        <div class="text-center text-lg-right">
                            <h4 class="text-light">
                            <?php

include 'info.php';

 echo $info['lt_sub1'];




?>
                            </h4>
                            <br />
                            <p class="text-light" style="font-size: 1.2em; font-size: 1.2em; font-family: inherit !important ">     

                       <?php

include 'info.php';

 echo $info['lt_sub2'];




?>     
             </p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <br>
   <br>
    <section>
