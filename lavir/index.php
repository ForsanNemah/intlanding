<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>لافيڤيان Maison de Pâtisserie</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/tagwal" rel="stylesheet">
<style>
    body {
        font-family: 'Tagwal', sans-serif;
        background: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
        flex-direction: column;
    }

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .profile-container {
        background: #fff;
        border-radius: 16px;
        width: 100%;
        max-width: 400px;
        text-align: center;
        padding: 30px 20px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
    }

    .profile-image,
    .profile-title,
    .profile-description {
        opacity: 0;
        animation: fadeSlideUp 0.8s ease forwards;
    }
    .profile-image { animation-delay: 0.2s; }
    .profile-title { animation-delay: 0.4s; }
    .profile-description { animation-delay: 0.6s; }

    .profile-image {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto 15px;
    }
    .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .profile-title {
        font-weight: 700;
        font-size: 20px;
        color: #333;
        margin-bottom: 8px;
    }
    .profile-description {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }

    .link-button {
        position: relative;
        display: block;
        width: 100%;
        background: #ffffff;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
        padding: 20px 14px;
        border-radius: 12px;
        font-weight: 600;
        margin-bottom: 12px;
        transition: all 0.2s ease;
        text-align: center;
        font-size: 18px;
        overflow: hidden;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeSlideUp 0.8s ease forwards;
    }
    .link-button:nth-of-type(1) { animation-delay: 0.8s; }
    .link-button:nth-of-type(2) { animation-delay: 0.95s; }
    .link-button:nth-of-type(3) { animation-delay: 1.1s; }
    .link-button:nth-of-type(4) { animation-delay: 1.25s; }
    .link-button:nth-of-type(5) { animation-delay: 1.4s; }
    .link-button:nth-of-type(6) { animation-delay: 1.55s; }
    .link-button:nth-of-type(7) { animation-delay: 1.7s; }
    .link-button:nth-of-type(8) { animation-delay: 1.85s; }
    .link-button:nth-of-type(9) { animation-delay: 2s; }
    .link-button:nth-of-type(10) { animation-delay: 2.15s; }
    .link-button:nth-of-type(11) { animation-delay: 2.3s; }
    .link-button:nth-of-type(12) { animation-delay: 2.45s; }
    .link-button:nth-of-type(13) { animation-delay: 2.6s; }

    .link-button:hover {
        background: #f0f0f0;
        transform: translateY(-3px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .link-button img {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
        border-radius: 8px;
        object-fit: cover;
    }

    .social-footer {
        display: flex;
        justify-content: center;
        gap: 14px;
        margin-top: 25px;
        flex-wrap: wrap;
        width: 100%;
        max-width: 400px;
    }
    .social-footer a {
        background: linear-gradient(135deg, #8e2de2, #4a00e0);
        color: #fff;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
        text-decoration: none;
        opacity: 0;
        transform: translateY(15px);
        animation: fadeSlideUp 0.6s ease forwards;
    }
    .social-footer a:nth-of-type(1) { animation-delay: 2.8s; }
    .social-footer a:nth-of-type(2) { animation-delay: 2.95s; }
    .social-footer a:nth-of-type(3) { animation-delay: 3.1s; }
    .social-footer a:nth-of-type(4) { animation-delay: 3.25s; }
    .social-footer a:nth-of-type(5) { animation-delay: 3.4s; }
    .social-footer a:nth-of-type(6) { animation-delay: 3.55s; }
    .social-footer a:nth-of-type(7) { animation-delay: 3.7s; }

    .social-footer a:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        transition: transform 0.3s, box-shadow 0.3s;
        z-index: 999;
        text-decoration: none;
    }
    .whatsapp-float:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
</style>

<!-- TikTok Pixel Code Start -->
<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};ttq.load('D1K2K3RC77U2K3H7GIS0');ttq.page();
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End -->
</head>
<body>
<div class="profile-container">
    <div class="profile-image">
        <img src="logo.webp" alt="Laviviane Logo">
    </div>
    <h1 class="profile-title">لافيڤيان Maison de Pâtisserie</h1>
    <p class="profile-description">لافيڤيان، كيك وشوكولاتة، نصنع لحظاتك الحلوة منذ ٢٠١٧</p>

    <a href="https://laviviane.com/" class="link-button" target="_blank" rel="noopener"><img src="images/appicon.jpeg" alt="App Icon">اطلب عبر متجرنا الالكتروني</a>
    <a href="https://iwtsp.com/966566622888" class="link-button" target="_blank" rel="noopener"><img src="images/wapp.jpeg" alt="WhatsApp Icon">اطلب عبر الواتساب</a>
    <a href="https://iwtsp.com/966566622888" class="link-button" target="_blank" rel="noopener"><img src="images/go.jpeg" alt="Government Icon">طلبات الجهات الحكومية</a>
    <a href="https://hungerstation.com/sa-ar/restaurant/laviviane-2/al-jubail/sudayr/78053" class="link-button" target="_blank" rel="noopener"><img src="images/hunger.png" alt="HungerStation Icon">اطلب عبر هنقرستيشن</a>
    <a href="https://jahez.link/CxVavEMC8Qb" class="link-button" target="_blank" rel="noopener"><img src="images/jahez.png" alt="Jahez Icon">اطلب عبر جاهز</a>
    <a href="https://thechefzco.app.link/rzfNYxef2Qb" class="link-button" target="_blank" rel="noopener"><img src="images/thechefz.png" alt="The Chefz Icon">اطلب عبر ذا تشيفز</a>
    <a href="https://mrsool.app.link/shops/937e0413ee607fe1f2e9ed7695884f14?type=service&type_name=Default" class="link-button" target="_blank" rel="noopener"><img src="images/marsol.png" alt="Mrsool Icon">اطلب عبر مرسول</a>
    <a href="https://toyou.io/merchant/833d90f2-c396-487f-a490-18c9648cb0c9" class="link-button" target="_blank" rel="noopener"><img src="images/toyou.png" alt="ToYo Icon">اطلب عبر تو يو</a>
    <a href="https://url.mykeeta.com/GoiGytwz" class="link-button" target="_blank" rel="noopener"><img src="images/keta.png" alt="Keeta Icon">اطلب عبر كيتا</a>
    <a href="https://goo.gl/maps/xFnRxLCzvgdTpe126" class="link-button" target="_blank" rel="noopener"><img src="images/gmap.png" alt="Google Maps Icon">فرع الرياض - الملقا</a>
    <a href="https://maps.app.goo.gl/AnUUn9U454c4SQna6?g_st=com.google.maps.preview.copy" class="link-button" target="_blank" rel="noopener"><img src="images/gmap.png" alt="Google Maps Icon">فرع الرياض - حطين</a>
    <a href="https://goo.gl/maps/BfpHu98zHg8g4rDGA" class="link-button" target="_blank" rel="noopener"><img src="images/gmap.png" alt="Google Maps Icon">فرع الخبر - اليرموك</a>
    <a href="https://goo.gl/maps/wxUPD8x8kUQ9Cdvq9" class="link-button" target="_blank" rel="noopener"><img src="images/gmap.png" alt="Google Maps Icon">فرع الجبيل - الفنادق</a>
</div>

<div class="social-footer">
    <a href="https://instagram.com/lavivianeksa" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
    <a hidden href="#" target="_blank" rel="noopener"><i class="fab fa-snapchat-ghost"></i></a>
    <a href="https://x.com/lavivianeksa" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
    <a href="https://tiktok.com/@lavivianeksa" target="_blank" rel="noopener"><i class="fab fa-tiktok"></i></a>
    <a hidden href="#" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
    <a hidden href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
    <a hidden href="#" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
    <a href="https://play.google.com/store/apps/details?id=com.laviviane.www&pli=1" target="_blank" rel="noopener" aria-label="تطبيق أندرويد"><i class="fab fa-android"></i></a>
    <a href="https://apps.apple.com/us/app/laviviane/id1482426068" target="_blank" rel="noopener" aria-label="تطبيق آيفون"><i class="fab fa-apple"></i></a>
</div>

<a href="https://wa.me/966566622888" target="_blank" class="whatsapp-float" aria-label="تواصل واتساب" rel="noopener">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>
