<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php

include "header.php";
include "wapi.php";

?>



<body>

  <!-- شعار -->
  <img src="logo.png" alt="شعار بهارات ياسين" class="profile-img">
  <div class="brand-name">    



  الموسى للذبائح

  </div>

  <!-- روابط -->
  <!-- <a id="whatsapp-btn" href="https://api.whatsapp.com/send?phone=966504422275&text=%D8%A7%D8%A8%D8%BA%D9%89%20%D8%A7%D8%B6%D8%AD%D9%8A%D8%A9%20%D9%88%D8%B9%D9%86%D8%AF%D9%8A%20%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D9%82%D8%A8%D9%84%20%D9%84%D8%A7%20%D8%A7%D8%B7%D9%84%D8%A8%20" class="link-button whatsapp-btn" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-whatsapp"></i> اطلب اضحيتك عبر واتساب
  </a> -->











  <form method="post"  action="wbtn_event.php" id="whatsapp-form">
  <input type="hidden" name="phone" value="966504422275">
  <input type="hidden" name="msg" value="ابغى اضحية وعندي استفسار قبل لا اطلب">
  <button id="whatsapp-btn" type="submit" class="link-button whatsapp-btn">
    <i class="fa-brands fa-whatsapp"></i> اطلب اضحيتك عبر واتساب
  </button>
</form>


  <!-- زر الموقع -->
  <a href="https://maps.app.goo.gl/A7ZTEgqy1CYNieTR8" class="link-button" target="_blank" rel="noopener noreferrer">
    <i class="fa-solid fa-location-dot"></i> لوكيشن فرع الرياض
  </a>



  <?php

include "single_image.php";
?>
  <!-- أيقونات التواصل -->
  <div class="social-icons">
    <a hidden href="https://www.facebook.com/yspices.sa" aria-label="فيسبوك" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/almousafarm/" aria-label="انستقرام" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://www.tiktok.com/@almousa_farm" aria-label="تيك توك" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
    <a hidden href="https://x.com/yspices_ksa" aria-label="تويتر (X)" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
    <a hidden href="https://www.youtube.com/@yspices_ksa" aria-label="يوتيوب" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
    <a href="https://www.snapchat.com/add/almousa_farm" aria-label="سناب شات" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-snapchat"></i></a>
    <a hidden href="https://www.linkedin.com" aria-label="لينكدإن" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>
    <a hidden href="https://www.pinterest.com" aria-label="بينترست" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-pinterest"></i></a>
    <a hidden href="https://www.telegram.org" aria-label="تيليجرام" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-telegram"></i></a>
    <a hidden href="mailto:info@yspices.com" aria-label="بريد إلكتروني"><i class="fa-solid fa-envelope"></i></a>
  </div>

  <!-- فوتر -->

  <a href="https://intshar.net/">

  <footer>
    جميع الحقوق محفوظة ©    قمة الانتشار للتسويق الالكتروني <script>document.write(new Date().getFullYear());</script>
  </footer>

</a>
 
  <!-- JavaScript to handle WhatsApp button click -->
  <script>
    document.getElementById("whatsapp-btn").addEventListener("click", function(event) {
      console.log("تم الضغط على زر واتساب");
      //document.getElementById("whatsapp-btn").disabled = true;
      //alert("done");
      // يمكنك هنا تتبع النقرات باستخدام TikTok أو Facebook Pixel مثلاً
      // fbq('track', 'Contact');
      // ttq.track('Contact');
    });









    document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
    const btn = document.getElementById('whatsapp-btn');
    btn.disabled = true;                    // Disable button
    btn.innerHTML = 'جاري تحويلك انتظر قليلا'  ;   // Optional: change button text
  });















  </script>

</body>
</html>















