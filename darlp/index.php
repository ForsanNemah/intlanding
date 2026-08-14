<?php
// Dar Alamirat Competition Form
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>مسابقة دار الأميرات</title>

    <link rel="icon" href="./logo.png" type="image/png">
    <link rel="shortcut icon" href="./logo.png" type="image/png">

    <!-- Bootstrap RTL -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        rel="stylesheet"
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-900: #4c283c;
            --brand-800: #63354e;
            --brand-700: #7b4663;
            --brand-500: #a96688;
            --brand-100: #f7eaf1;
            --text: #2f2530;
            --muted: #766b73;
            --line: #eadfe5;
            --surface: rgba(255, 255, 255, .92);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Tajawal", system-ui, -apple-system, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 92% 5%, rgba(208, 146, 177, .20), transparent 30%),
                radial-gradient(circle at 8% 92%, rgba(117, 70, 95, .10), transparent 32%),
                linear-gradient(145deg, #fffafc 0%, #f9f1f5 45%, #fff 100%);
        }

        .page-wrapper { max-width: 820px; }

        .logo-box {
            background: transparent;
            
        }

        .main-logo {
            max-width: 170px;
            max-height: 82px;
            object-fit: contain;
        }

        .banner-card {
            overflow: hidden;
            width: 100%;
            aspect-ratio: 1200 / 300;
            border-radius: 28px;
            background: #f2e6ec;
            box-shadow: 0 18px 45px rgba(82, 43, 64, .11);
            animation: pulse-banner 4s ease-in-out infinite;
        }

        .banner-card img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: pulse-banner-img 4s ease-in-out infinite;
        }

        @keyframes pulse-banner-img {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.01);
            }
        }

        @keyframes pulse-banner {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 18px 45px rgba(82, 43, 64, .11);
            }
            50% {
                transform: scale(1.005);
                box-shadow: 0 24px 55px rgba(82, 43, 64, .15);
            }
        }

        .form-card {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, .98);
            background: var(--surface);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            box-shadow: 0 28px 70px rgba(74, 38, 58, .13);
        }

        .form-card::before {
            content: "";
            position: absolute;
            inset: 0 0 auto 0;
            height: 5px;
            background: linear-gradient(90deg, var(--brand-800), var(--brand-500), #d6a0b9);
        }

        .small-badge {
            background: var(--brand-100);
            color: var(--brand-800);
            border: 1px solid #efdce6;
            border-radius: 999px;
            font-weight: 700;
            letter-spacing: .1px;
        }

        h1 {
            color: var(--brand-900);
            font-size: clamp(1.6rem, 4vw, 2.15rem);
        }

        .intro-text { color: var(--muted); }

        .field-group { margin-bottom: 1.35rem; }

        .form-label {
            margin-bottom: .6rem;
            color: #3f3039;
            font-size: .98rem;
        }

        .input-wrap { position: relative; }

        .input-icon {
            position: absolute;
            top: 50%;
            right: 18px;
            width: 20px;
            height: 20px;
            transform: translateY(-50%);
            color: #9a7187;
            pointer-events: none;
            z-index: 2;
        }

        .form-control,
        .form-select {
            min-height: 58px;
            border-radius: 16px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--text);
            font-size: 1rem;
            box-shadow: 0 7px 22px rgba(73, 35, 56, .045);
            transition: border-color .18s ease, box-shadow .18s ease, transform .18s ease;
        }

        .input-wrap .form-control,
        .input-wrap .form-select { padding-right: 52px; }

        .form-control::placeholder { color: #aaa0a6; }

        .form-control:hover,
        .form-select:hover { border-color: #d8c2ce; }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--brand-500);
            box-shadow: 0 0 0 4px rgba(169, 102, 136, .11), 0 10px 26px rgba(73, 35, 56, .07);
        }

        .form-text {
            margin-top: .5rem;
            color: #8a7d84;
            font-size: .83rem;
        }

        .policy-box {
            margin-top: 1.5rem;
            padding: 20px;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: #fff9fc;
            box-shadow: 0 8px 24px rgba(73, 35, 56, .045);
        }

        .policy-title {
            color: var(--brand-900);
            font-weight: 800;
            margin-bottom: .8rem;
        }

        .policy-list {
            margin-bottom: 1rem;
            padding-right: 1.25rem;
            color: #554650;
            line-height: 1.9;
        }

        .policy-check {
            padding: 14px 16px;
            border-radius: 14px;
            background: var(--brand-100);
        }

        .policy-check .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
            margin-left: .65rem;
            cursor: pointer;
        }

        .policy-check .form-check-input:checked {
            background-color: var(--brand-800);
            border-color: var(--brand-800);
        }

        .policy-check .form-check-label {
            cursor: pointer;
            font-weight: 700;
            color: var(--brand-900);
        }

        .submit-btn {
            min-height: 60px;
            border: 0;
            border-radius: 17px;
            font-weight: 800;
            font-size: 1.06rem;
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700), #a85f83);
            box-shadow: 0 16px 32px rgba(105, 50, 81, .25);
            transition: transform .18s ease, box-shadow .18s ease, opacity .18s ease;
        }

        .submit-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 20px 38px rgba(105, 50, 81, .31);
        }

        .submit-btn:disabled { opacity: .72; }

        .alert {
            border: 0;
            border-radius: 15px;
            font-weight: 600;
        }

        .success-message,
        .error-message { display: none; }

        .footer-box {
            background: rgba(255, 255, 255, .76);
            border-radius: 22px;
            border: 1px solid rgba(255, 255, 255, .96);
            box-shadow: 0 12px 34px rgba(80, 40, 62, .08);
            backdrop-filter: blur(12px);
        }

        .footer-logo {
            max-width: 100px;
            max-height: 56px;
        }

        .store-link {
            color: var(--brand-700);
            font-weight: 800;
            text-decoration: none;
        }

        .store-link:hover { color: var(--brand-900); }

        iframe { display: none; }

        @media (max-width: 576px) {
            .page-wrapper { padding-inline: 14px; }
            .form-card { border-radius: 24px; padding: 28px 18px !important; }
            .banner-card { border-radius: 20px; }
            .logo-box { border-radius: 20px; }
            .main-logo { max-width: 140px; }
            .form-control, .form-select { min-height: 56px; }
        }
    </style>
</head>


<body>

<div class="container page-wrapper py-4 py-md-5">

    <!-- ============================= -->
    <!-- Logo -->
    <!-- ============================= -->

    <header class="text-center mb-4">

        <div class="logo-box d-inline-block px-4 py-3">

            <img
                src="./logo.png"
                alt="دار الأميرات"
                class="main-logo img-fluid"
            >

        </div>

    </header>


    <!-- ============================= -->
    <!-- Banner -->
    <!-- ============================= -->

    <div class="banner-card mb-4" id="bannerCard">
        <img
            src="./banner.png"
            alt="مسابقة دار الأميرات"
            onerror="document.getElementById('bannerCard').style.display='none'"
        >
    </div>


    <!-- ============================= -->
    <!-- Form -->
    <!-- ============================= -->

    <section class="form-card p-4 p-md-5">

        <div class="text-center mb-4">

            <span
                class="small-badge d-inline-block px-3 py-2 mb-3"
            >
                مسابقة دار الأميرات
            </span>

            <h1 class="fw-bold mb-2">
                سجّل بياناتك للمشاركة
            </h1>

            <p class="intro-text mb-0">
                جميع البيانات التالية إلزامية
            </p>

        </div>


        <form
            id="competitionForm"

            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScfZybvQNNnaBeSqakkTgBJ1_w_NRoYxtx2DQcV3Y5GQygLbQ/formResponse"

            method="POST"

            target="hiddenFrame"
        >


            <!-- ============================= -->
            <!-- Name -->
            <!-- ============================= -->

            <div class="field-group">
                <label for="name" class="form-label fw-bold">
                    الاسم <span class="text-danger">*</span>
                </label>
                <div class="input-wrap">
                    <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="7" r="4"/></svg>
                    <input
                        type="text"
                        id="name"
                        name="entry.158219109"
                        class="form-control form-control-lg"
                        placeholder="اكتب الاسم الكامل"
                        minlength="2"
                        autocomplete="name"
                        required
                    >
                </div>
            </div>


            <!-- ============================= -->
            <!-- Phone -->
            <!-- ============================= -->

            <div class="field-group">
                <label for="phone" class="form-label fw-bold">
                    رقم الجوال <span class="text-danger">*</span>
                </label>
                <div class="input-wrap">
                    <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92z"/></svg>
                    <input
                        type="tel"
                        id="phone"
                        name="entry.627270384"
                        class="form-control form-control-lg"
                        placeholder="05xxxxxxxx"
                        maxlength="10"
                        inputmode="numeric"
                        autocomplete="tel"
                        required
                    >
                </div>
                <div class="form-text">يجب أن يتكون الرقم من 10 أرقام ويبدأ بـ 05</div>
            </div>


            <!-- ============================= -->
            <!-- National ID -->
            <!-- ============================= -->

            <div class="field-group">
                <label for="nationalId" class="form-label fw-bold">
                    رقم الهوية الوطنية <span class="text-danger">*</span>
                </label>
                <div class="input-wrap">
                    <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8" cy="11" r="2"/><path d="M5.5 16c.7-1.5 1.7-2.2 2.5-2.2S9.8 14.5 10.5 16M13 10h5M13 14h5"/></svg>
                    <input
                        type="text"
                        id="nationalId"
                        name="entry.1357066827"
                        class="form-control form-control-lg"
                        placeholder="أدخل رقم الهوية المكون من 10 أرقام"
                        maxlength="10"
                        inputmode="numeric"
                        autocomplete="off"
                        required
                    >
                </div>
                <div class="form-text">رقم الهوية / الإقامة يجب أن يتكون من 10 أرقام</div>
            </div>


            <!-- ============================= -->
            <!-- Educational Institution -->
            <!-- ============================= -->

            <div class="field-group">
                <label for="Institution" class="form-label fw-bold">
                    المجال الدراسي <span class="text-danger">*</span>
                </label>
                <div class="input-wrap">
                    <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 10.5 12 5l9 5.5-9 5.5-9-5.5Zm0 0v6.5L12 22l9-5V10.5M12 15.5V22"/></svg>
                    <select
                        id="Institution"
                        name="entry.1494061078"
                        class="form-select form-select-lg"
                        required
                    >
                        <option value="" selected disabled>
                            اختر المجال  الدراسي
                        </option>
                        <option value="مدرسة">مدرسة</option>
                        <option value="جامعة">جامعة</option>
                        <option value="معهد">معهد</option>
                    </select>
                </div>
            </div>


            <div class="field-group">
                <label for="Year" class="form-label fw-bold">
                    العام الدراسي <span class="text-danger">*</span>
                </label>
                <div class="input-wrap">
                    <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 10.5 12 5l9 5.5-9 5.5-9-5.5Zm0 0v6.5L12 22l9-5V10.5M12 15.5V22"/></svg>
                    <input
                        type="text"
                        id="Year"
                        name="entry.646189226"
                        class="form-control form-control-lg"
                        placeholder="اكتب العام الدراسي"
                        autocomplete="off"
                        required
                    >
                </div>
            </div>


            <!-- ============================= -->
            <!-- City -->
            <!-- ============================= -->

            <div class="field-group">

                <label
                    for="city"
                    class="form-label fw-bold"
                >
                    المدينة
                    <span class="text-danger">*</span>
                </label>


                <div class="input-wrap">
                    <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>

                <select
                    id="city"

                    name="entry.881780927"

                    class="form-select form-select-lg"

                    required
                >

                    <option
                        value=""
                        selected
                        disabled
                    >
                        اختر المدينة
                    </option>

                </select>
                </div>

            </div>


            <!-- ============================= -->
            <!-- Participation Policy -->
            <!-- ============================= -->

            <div class="policy-box">
                <div class="policy-title">
                    شروط وسياسة المشاركة
                </div>

                <ol class="policy-list">
                    <li>أن يكون المشارك مقيمًا في المملكة العربية السعودية.</li>
                    <li>يتم توريد المبلغ مباشرة إلى الجهة التعليمية.</li>
                    <li>ألا تزيد الرسوم عن 35,000 ريال سعودي.</li>
                     <li >عدد الفائزين  5 فائزين فقط</li>
                </ol>

                <div class="form-check policy-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="policyAgreement"
                        required
                    >
                    <label class="form-check-label" for="policyAgreement">
                        أقر بأنني قرأت شروط وسياسة المشاركة أعلاه وأوافق عليها.
                        <span class="text-danger">*</span>
                    </label>
                </div>
            </div>


            <!-- ============================= -->
            <!-- Error Message -->
            <!-- ============================= -->

            <div
                id="errorMessage"
                class="alert alert-danger error-message"
            ></div>


            <!-- ============================= -->
            <!-- Success Message -->
            <!-- ============================= -->

            <div
                id="successMessage"
                class="alert alert-success success-message"
            >
                تم إرسال بياناتك بنجاح، شكرًا لمشاركتك.
            </div>


            <!-- ============================= -->
            <!-- Submit -->
            <!-- ============================= -->

            <div class="d-grid mt-4">

                <button
                    id="submitButton"

                    type="submit"

                    class="submit-btn btn btn-primary"
                >
                    إرسال البيانات
                </button>

            </div>

        </form>


        <!-- Google Form hidden iframe -->

        <iframe
            id="hiddenFrame"
            name="hiddenFrame"
            title="Google Form"
        ></iframe>

    </section>

    
    

    <!-- ============================= -->
    <!-- Footer -->
    <!-- ============================= -->

    <footer class="text-center mt-4">

        <div
            class="footer-box d-inline-block px-5 py-4"
        >

            <img
                src="./logo.png"

                alt="دار الأميرات"

                class="footer-logo img-fluid d-block mx-auto mb-3"
            >


            <a
                href="https://daralamirat.com.sa/"

                target="_blank"

                rel="noopener noreferrer"

                class="store-link"
            >
               انقر هنا للتسوق عبر متجرنا
            </a>

        </div>

    </footer>

</div>


<!-- ============================= -->
<!-- Bootstrap JavaScript -->
<!-- ============================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


<script>

/*
|--------------------------------------------------------------------------
| Saudi Cities
|--------------------------------------------------------------------------
|
| IMPORTANT:
| Do NOT use .sort()
|
| The cities will appear in exactly
| the same order as this array.
|
*/

const saudiCities = [

    // ==========================
    // المدن الرئيسية
    // ==========================

    "الرياض",
    "جدة",
    "الدمام",

    "مكة المكرمة",
    "المدينة المنورة",
    "الخبر",
    "الطائف",
    "أبها",
    "خميس مشيط",
    "تبوك",
    "القصيم - بريدة",
    "حائل",
    "جازان",
    "نجران",
    "الأحساء",
    "الجبيل",
    "الظهران",
    "القطيف",
    "حفر الباطن",
    "سكاكا",
    "الباحة",
    "عرعر",


    // ==========================
    // المنطقة الشرقية
    // ==========================

    "الهفوف",
    "المبرز",
    "رأس تنورة",
    "بقيق",
    "الخفجي",
    "النعيرية",
    "قرية العليا",


    // ==========================
    // منطقة مكة
    // ==========================

    "رابغ",
    "القنفذة",
    "الليث",
    "الجموم",
    "بحرة",
    "خليص",
    "الكامل",
    "أضم",
    "ميسان",
    "العرضيات",
    "تربة",
    "رنية",
    "الخرمة",


    // ==========================
    // القصيم
    // ==========================

    "عنيزة",
    "الرس",
    "البكيرية",
    "المذنب",
    "البدائع",
    "رياض الخبراء",
    "الشماسية",
    "عيون الجواء",
    "الأسياح",
    "عقلة الصقور",
    "ضرية",
    "النبهانية",


    // ==========================
    // عسير
    // ==========================

    "أحد رفيدة",
    "محايل عسير",
    "بيشة",
    "النماص",
    "تنومة",
    "ظهران الجنوب",
    "سراة عبيدة",
    "رجال ألمع",
    "بلقرن",
    "المجاردة",
    "بارق",
    "تثليث",


    // ==========================
    // جازان
    // ==========================

    "صبيا",
    "أبو عريش",
    "صامطة",
    "بيش",
    "الدرب",
    "ضمد",
    "العارضة",
    "الحرث",
    "فيفاء",
    "الداير",
    "العيدابي",
    "الريث",
    "فرسان",
    "أحد المسارحة",
    "الطوال",


    // ==========================
    // نجران
    // ==========================

    "شرورة",
    "حبونا",
    "بدر الجنوب",
    "يدمة",
    "ثار",
    "خباش",


    // ==========================
    // تبوك
    // ==========================

    "ضباء",
    "الوجه",
    "أملج",
    "تيماء",
    "حقل",
    "البدع",


    // ==========================
    // حائل
    // ==========================

    "بقعاء",
    "الغزالة",
    "الشنان",
    "الحائط",
    "السليمي",
    "الشملي",
    "موقق",
    "سميراء",


    // ==========================
    // الحدود الشمالية
    // ==========================

    "رفحاء",
    "طريف",
    "العويقيلة",


    // ==========================
    // الجوف
    // ==========================

    "دومة الجندل",
    "القريات",
    "طبرجل",


    // ==========================
    // الباحة
    // ==========================

    "بلجرشي",
    "المندق",
    "المخواة",
    "قلوة",
    "العقيق",
    "القرى",
    "غامد الزناد",
    "الحجرة",


    // ==========================
    // باقي منطقة الرياض
    // ==========================

    "وادي الدواسر",
    "الخرج",
    "الدوادمي",
    "المجمعة",
    "الزلفي",
    "شقراء",
    "القويعية",
    "عفيف",
    "حوطة بني تميم",
    "الأفلاج",
    "السليل",
    "المزاحمية",
    "ضرما",
    "ثادق",
    "حريملاء",
    "رماح",
    "مرات",
    "الغاط",
    "الحريق",
    "الدلم",
    "الدرعية"
];


/*
|--------------------------------------------------------------------------
| Add cities to select
|--------------------------------------------------------------------------
|
| No sorting here.
| This preserves:
|
| الرياض
| جدة
| الدمام
| ...
|
*/

const citySelect =
    document.getElementById("city");


[...new Set(saudiCities)].forEach(function(city) {

    const option =
        document.createElement("option");

    option.value = city;

    option.textContent = city;

    citySelect.appendChild(option);

});


/*
|--------------------------------------------------------------------------
| Form Elements
|--------------------------------------------------------------------------
*/

const form =
    document.getElementById("competitionForm");


const phoneInput =
    document.getElementById("phone");


const nationalIdInput =
    document.getElementById("nationalId");


const policyAgreement =
    document.getElementById("policyAgreement");


const submitButton =
    document.getElementById("submitButton");


const errorMessage =
    document.getElementById("errorMessage");


const successMessage =
    document.getElementById("successMessage");


const hiddenFrame =
    document.getElementById("hiddenFrame");


let formSubmitted = false;


/*
|--------------------------------------------------------------------------
| Phone Input
|--------------------------------------------------------------------------
|
| Numbers only
|
*/

phoneInput.addEventListener(
    "input",
    function() {

        this.value =
            this.value
                .replace(/\D/g, "")
                .slice(0, 10);

    }
);


/*
|--------------------------------------------------------------------------
| National ID Input
|--------------------------------------------------------------------------
*/

nationalIdInput.addEventListener(
    "input",
    function() {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
    }
);


/*
|--------------------------------------------------------------------------
| Submit
|--------------------------------------------------------------------------
*/

form.addEventListener(
    "submit",
    function(event) {

        errorMessage.style.display =
            "none";


        successMessage.style.display =
            "none";


        const phone =
            phoneInput.value.trim();


        if (!policyAgreement.checked) {

            event.preventDefault();

            errorMessage.innerText =
                "يجب الموافقة على شروط وسياسة المشاركة قبل إرسال البيانات.";

            errorMessage.style.display =
                "block";

            policyAgreement.focus();

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Validate Saudi phone
        |--------------------------------------------------------------------------
        |
        | Must:
        | - Start with 05
        | - Be exactly 10 digits
        |
        */

        if (!/^05\d{8}$/.test(phone)) {

            event.preventDefault();


            errorMessage.innerText =
                "يرجى إدخال رقم جوال صحيح مكون من 10 أرقام ويبدأ بـ 05.";


            errorMessage.style.display =
                "block";


            phoneInput.focus();


            return;

        }


        const nationalId =
            nationalIdInput.value.trim();


        if (!/^\d{10}$/.test(nationalId)) {

            event.preventDefault();

            errorMessage.innerText =
                "يرجى إدخال رقم هوية / إقامة صحيح مكون من 10 أرقام.";

            errorMessage.style.display =
                "block";

            nationalIdInput.focus();

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Start sending
        |--------------------------------------------------------------------------
        */

        formSubmitted = true;


        submitButton.disabled =
            true;


        submitButton.innerText =
            "جاري إرسال البيانات...";

    }
);


/*
|--------------------------------------------------------------------------
| Google Form Response
|--------------------------------------------------------------------------
*/

hiddenFrame.addEventListener(
    "load",
    function() {

        if (!formSubmitted) {

            return;

        }


        /*
        |--------------------------------------------------------------------------
        | Success
        |--------------------------------------------------------------------------
        */

        successMessage.style.display =
            "block";


        submitButton.disabled =
            false;


        submitButton.innerText =
            "إرسال البيانات";


        /*
        |--------------------------------------------------------------------------
        | Reset Form
        |--------------------------------------------------------------------------
        */

        form.reset();


        formSubmitted =
            false;


        /*
        |--------------------------------------------------------------------------
        | Scroll to success
        |--------------------------------------------------------------------------
        */

        successMessage.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }
);

</script>

</body>
</html>