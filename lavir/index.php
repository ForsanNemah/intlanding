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
        animation: fadeIn 1s ease-in;
        flex-direction: column;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
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
        padding: 26px 14px;
        border-radius: 12px;
        font-weight: 600;
        margin-bottom: 12px;
        transition: all 0.2s ease;
        text-align: center;
        font-size: 18px;
        overflow: hidden;
    }
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
    }
    .social-footer a:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }
    /* WhatsApp Floating Button */
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
</head>
<body>

    <div class="profile-container">

        <!-- Profile Image -->
        <div class="profile-image">
            <img src="logo.webp" alt="Laviviane Logo">
        </div>

        <!-- Profile Title and Description -->
        <h1 class="profile-title">لافيڤيان Maison de Pâtisserie</h1>
        <p class="profile-description">لافيڤيان، كيك وشوكولاتة، نصنع لحظاتك الحلوة منذ ٢٠١٧</p>

        <!-- Links -->
        <a href="#" class="link-button"><img src="images/appicon.jpeg" alt="App Icon">اطلب عبر التطبيق</a>
        <a href="#" class="link-button"><img src="images/wapp.jpeg" alt="WhatsApp Icon">اطلب عبر الواتساب</a>
        <a href="#" class="link-button"><img src="images/go.jpeg" alt="Government Icon">طلبات الجهات الحكومية</a>
        <a href="#" class="link-button"><img src="images/hunger.png" alt="HungerStation Icon">اطلب عبر هنقرستيشن</a>
        <a href="#" class="link-button"><img src="images/jahez.png" alt="Jahez Icon">اطلب عبر جاهز</a>
        <a href="#" class="link-button"><img src="images/thechefz.png" alt="The Chefz Icon">اطلب عبر ذا تشيفز</a>
        <a href="#" class="link-button"><img src="images/marsol.png" alt="Mrsool Icon">اطلب عبر مرسول</a>
        <a href="#" class="link-button"><img src="images/toyou.png" alt="ToYo Icon">اطلب عبر تو يو</a>
        <a href="#" class="link-button"><img src="images/keta.png" alt="Keeta Icon">اطلب عبر كيتا</a>
        <a href="#" class="link-button"><img src="images/gmap.png" alt="Location Icon">فرع الرياض - الملقا</a>
        <a href="#" class="link-button"><img src="images/gmap.png" alt="Location Icon">فرع الرياض - حطين</a>
        <a href="#" class="link-button"><img src="images/gmap.png" alt="Location Icon">فرع الخبر - اليرموك</a>
        <a href="#" class="link-button"><img src="images/gmap.png" alt="Location Icon">فرع الجبيل - الفنادق</a>
    </div>

    <!-- Social Footer without LinkedIn and Telegram -->
    <div class="social-footer">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/966XXXXXXXXX" target="_blank" class="whatsapp-float" aria-label="تواصل واتساب">
        <i class="fab fa-whatsapp"></i>
    </a>

</body>
</html>
