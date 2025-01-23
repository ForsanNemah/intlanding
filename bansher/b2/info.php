<?php
error_reporting(E_ERROR | E_PARSE);

 
//$ad_source=echo "<script> alert(""); </script>";

 
$action_url="https://script.google.com/macros/s/AKfycbztxLuuOHRbrVjn9qUqfYOFzDXsEiFJNyDlkc23p8F-iMVzIENkuBdVQDALmG4RL4U7eA/exec";

$logo_h='150px';
$logo_w='150px';
$form_bg_color="#CC9900";
$bg_image="skin.jpg";
$sliders=0;
$add_source="snap 1  ";
$phn="+966598350406";
$end_date="20-3-2023";
$end_time="12:00";
$insta_url="https://www.instagram.com/kalutara_resort";
$snap_url="https://t.snapchat.com/Qo1ndR7W";
$gmap_url="https://maps.app.goo.gl/ovuiUe5ZcJXJUeLd6?g_st=iw";

$site_name="بنشر متنقل الرياض  ";
$dr_name=" لبيع وإصلاح جميع انواع الإطارات والبطاريات والجنوط المكسره ";
$add_title="اتصل نصل إليك خدمة 24 ساعه";

$sidebar1_msg="  ";
$sidebar2_msg="اتصل نصل إليك خدمة 24 ساعه";
$sidebar3_msg="خدماتنا ";
















//echo "<script> alert('".$gmap_url."'); </script>";

 





try {



    $items = array();



$handle = fopen("services/asnan_services.txt", "r");
if ($handle) {
$i=0;
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>".$i; 
$i++;
$items['Peter'.$i]=$line;


    }

    fclose($handle);
}






 


$info = array(

    

    "website_title"=>$site_name,
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>$sidebar1_msg,
 "sidebar2_msg"=>$sidebar2_msg,
 "sidebar3_msg"=>$sidebar3_msg,

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>
    $site_name
    ,



    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
واحصل على العروض
    ",


    
    "lt_sub1"=>"    
    

 
    ",


    "lt_sub2"=>"    

 

    تتوفر خدمة التقسيط على دفعات



 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


    
  } catch(Exception $e) {
    
  }





















 





?>