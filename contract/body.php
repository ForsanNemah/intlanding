<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>اتفاقية تقديم خدمات تسويقية</title>

    <!-- Bootstrap 5 RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-dark: #14213d;
            --brand-gold: #c9a45c;
            --brand-soft: #f8fafc;
            --brand-border: #e5e7eb;
            --brand-muted: #64748b;
            --brand-text: #111827;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Tajawal', Arial, sans-serif;
            color: var(--brand-text);
            background: #eef2f7;
            line-height: 1.9;
            font-size: 16px;
        }

        .contract-page {
            max-width: 1050px;
            margin: 24px auto;
            background: #fff;
            border: 1px solid var(--brand-border);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 55px rgba(15, 23, 42, 0.12);
        }

        .contract-top-line {
            height: 9px;
            background: linear-gradient(90deg, var(--brand-gold), var(--brand-dark));
        }

        .contract-header {
            background:
                radial-gradient(circle at top left, rgba(201, 164, 92, .16), transparent 34%),
                linear-gradient(180deg, #fff, #fbfdff);
            border-bottom: 1px solid var(--brand-border);
        }

        .brand-card {
            color: var(--brand-muted);
            font-size: .92rem;
        }

        .brand-card strong {
            display: block;
            color: var(--brand-dark);
            font-size: 1rem;
            font-weight: 800;
            margin-bottom: 2px;
        }

        .logo-img {
            max-width: 128px;
            max-height: 100px;
            object-fit: contain;
        }

        .contract-title {
            color: var(--brand-dark);
            font-weight: 800;
            letter-spacing: -.5px;
            margin: 10px 0 0;
            font-size: clamp(1.35rem, 4vw, 2rem);
        }

        .contract-subtitle {
            color: var(--brand-gold);
            font-weight: 700;
            font-size: .9rem;
        }

        .info-box,
        .party-box,
        .contract-section,
        .signature-box {
            border: 1px solid var(--brand-border);
            border-radius: 18px;
            background: #fff;
        }

        .info-box {
            background: var(--brand-soft);
            padding: 14px 16px;
            height: 100%;
        }

        .info-label {
            color: var(--brand-muted);
            font-size: .88rem;
            font-weight: 700;
        }

        .info-value {
            color: var(--brand-dark);
            font-weight: 800;
        }

        .intro-box {
            background: #fffaf0;
            border: 1px solid rgba(201, 164, 92, .38);
            border-radius: 18px;
            padding: 18px;
        }

        .party-box { overflow: hidden; height: 100%; }

        .party-title {
            background: var(--brand-dark);
            color: #fff;
            font-weight: 800;
            padding: 11px 16px;
        }

        .party-content {
            padding: 16px;
            font-size: .96rem;
        }

        .party-content > div { margin-bottom: 7px; }

        .contract-section {
            padding: 20px;
            margin-top: 18px;
        }

        .section-title {
            color: var(--brand-dark);
            font-size: 1.12rem;
            font-weight: 800;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-title::before {
            content: "";
            width: 7px;
            height: 25px;
            border-radius: 100px;
            background: var(--brand-gold);
            flex: 0 0 auto;
        }

        ul, ol { padding-right: 1.35rem; margin-bottom: 0; }
        li { margin-bottom: 8px; }
        p { margin-bottom: 10px; }

        .price-box {
            background: var(--brand-soft);
            border: 1px dashed rgba(20, 33, 61, .35);
            border-radius: 16px;
            padding: 16px;
            font-weight: 700;
        }

        .signature-box {
            min-height: 165px;
            background: var(--brand-soft);
            padding: 18px;
        }

        .signature-line {
            height: 58px;
            border-bottom: 1px solid #94a3b8;
            margin: 18px 0 12px;
        }

        .footer-note {
            color: var(--brand-muted);
            border-top: 1px solid var(--brand-border);
            font-size: .82rem;
        }

        [contenteditable="true"] {
            outline: 1px dashed transparent;
            border-radius: 8px;
        }

        [contenteditable="true"]:hover {
            outline-color: rgba(201, 164, 92, .7);
            background: rgba(201, 164, 92, .06);
        }

        @media (max-width: 767.98px) {
            body { background: #fff; font-size: 15px; }

            .contract-page {
                margin: 0;
                border-radius: 0;
                border-left: 0;
                border-right: 0;
                box-shadow: none;
            }

            .contract-header { text-align: center; }
            .brand-card { font-size: .85rem; }
            .logo-img { max-width: 105px; }
            .contract-section { padding: 16px; border-radius: 14px; }
            .intro-box { padding: 16px; }
            .party-content { font-size: .92rem; }
            .section-title { font-size: 1.03rem; }
            .section-title::before { height: 22px; }
            ul, ol { padding-right: 1.1rem; }
        }

        @media print {
            @page { size: A4; margin: 12mm; }

            body {
                background: #fff;
                font-size: 13px;
                line-height: 1.7;
            }

            .contract-page {
                margin: 0;
                max-width: 100%;
                border: 0;
                border-radius: 0;
                box-shadow: none;
            }

            .contract-section,
            .party-box,
            .info-box,
            .intro-box,
            .signature-box {
                break-inside: avoid;
                page-break-inside: avoid;
            }

            .contract-section { margin-top: 12px; padding: 14px; }
            .contract-title { font-size: 22px; }
            .logo-img { max-width: 95px; }
            .footer-note { font-size: 11px; }
        }
    </style>
</head>
<body>

<div class="container-fluid px-0 px-md-3">
    <article class="contract-page">
        <div class="contract-top-line"></div>

        <header class="contract-header p-4 p-md-5">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-md-4 order-2 order-md-1 text-center text-md-start">
                    <div class="brand-card">
                        <strong>وكالة قمة الانتشار للتسويق الإلكتروني</strong>
                        سجل تجاري رقم 2053126009
                    </div>
                </div>

                <div class="col-12 col-md-4 order-1 order-md-2 text-center">
                    <img src="logo2.png" class="img-fluid logo-img" alt="شعار قمة الانتشار">
                    <h1 class="contract-title">اتفاقية تقديم خدمات تسويقية</h1>
                    <div class="contract-subtitle">Marketing Services Agreement</div>
                </div>

                <div class="col-12 col-md-4 order-3 text-center text-md-end">
                    <div class="brand-card">
                        <strong>المملكة العربية السعودية</strong>
                        الخبر - الخبر الشمالية
                    </div>
                </div>
            </div>
        </header>

        <main class="p-3 p-md-5">
            <div class="row g-3 mb-4">
                <div class="col-12 col-sm-6">
                    <div class="info-box">
                        <span class="info-label">التاريخ:</span>
                        <span class="info-value"><?php echo $contract_date; ?></span>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="info-box">
                        <span class="info-label">رقم الاتفاقية:</span>
                        <span class="info-value"><?php echo $contract_id; ?></span>
                    </div>
                </div>
            </div>

            <div class="intro-box mb-4">
                بعون الله تعالى وتوفيقه، وبتاريخ
                <strong><?php echo $contract_date; ?></strong>
                ميلادي، تم توقيع هذه الاتفاقية بين كل من الطرفين الموضحين أدناه، وهما بكامل الرضا والأهلية المعتبرة شرعًا ونظامًا، وقد اتفقا على الالتزام بما ورد في هذه الاتفاقية من بنود وشروط.
                <br>
                ويُعد هذا التمهيد جزءًا لا يتجزأ من هذه الاتفاقية.
            </div>

            <div class="row g-3 mb-4">
                <div class="col-12 col-lg-6">
                    <div class="party-box">
                        <div class="party-title">الطرف الأول</div>
                        <div class="party-content">
                            <div><strong>الاسم:</strong> وكالة قمة الانتشار للخدمات التسويقية</div>
                            <div><strong>السجل التجاري:</strong> 2053126009</div>
                            <div><strong>المقر:</strong> المملكة العربية السعودية - الخبر</div>
                            <div><strong>الممثل:</strong> فهد بن خالد الخالدي</div>
                            <div><strong>البريد الإلكتروني:</strong> info@intshar.net</div>
                            <div><strong>رقم الجوال:</strong> 966539811400</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="party-box" contenteditable="true">
                        <div class="party-title">الطرف الثاني</div>
                        <div class="party-content">
                            <div><strong>الاسم:</strong> <?php echo $company_name; ?></div>
                            <div><strong>السجل التجاري:</strong> <?php echo $company_id; ?></div>
                            <div><strong>المقر:</strong> <?php echo $address; ?></div>
                            <div><strong>الممثل:</strong> <?php echo $customer_name; ?></div>
                            <div><strong>الصفة:</strong> <?php echo $signer_position; ?></div>
                            <div><strong>البريد الإلكتروني:</strong> <?php echo $email; ?></div>
                            <div><strong>رقم الجوال:</strong> <?php echo $phone; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="contract-section">
                <h2 class="section-title">الخدمات محل الاتفاقية</h2>
                <ol>
                    <?php include "get_services.php"; ?>
                </ol>
            </section>

            <section class="contract-section">
                <h2 class="section-title">التزامات الطرف الأول</h2>
                <ul>
                    <li>يلتزم الطرف الأول بتنفيذ الخدمات المتفق عليها وفق معايير مهنية مناسبة وبما يحقق أهداف الاتفاقية.</li>
                    <li>يلتزم الطرف الأول بفترة تجهيز لا تزيد عن عشرة أيام من كل شهر لتجهيز متطلبات العمل قبل البدء بالتنفيذ.</li>
                    <li>يلتزم الطرف الأول بالمحافظة على بيانات الطرف الثاني وعدم مشاركتها أو تسريبها بأي شكل من الأشكال.</li>
                </ul>
            </section>

            <section class="contract-section">
                <h2 class="section-title">التزامات الطرف الثاني</h2>
                <ul>
                    <li>يلتزم الطرف الثاني بتعيين مسؤول تواصل دائم مع الطرف الأول خلال مدة أقصاها يومان عمل من تاريخ توقيع الاتفاقية.</li>
                    <li>يلتزم الطرف الثاني بتزويد الطرف الأول بجميع الملفات والمصادر والمعلومات اللازمة لإنجاز العمل خلال مدة أقصاها يومان عمل من تاريخ توقيع الاتفاقية.</li>
                    <li>يلتزم الطرف الثاني بمراجعة واعتماد الأعمال المرسلة خلال مدة أقصاها يومان عمل، ويُعد التأخر في الاعتماد سببًا في تعديل جدول التسليم.</li>
                </ul>
            </section>

            <section class="contract-section">
                <h2 class="section-title">مدة الاتفاقية</h2>
                <p contenteditable="true">
                    اتفق الطرفان على أن تكون مدة الاتفاقية
                    <strong><?php echo $contract_period; ?></strong>
                    اعتبارًا من تاريخ
                    <strong><?php echo $contract_date; ?></strong>.
                </p>
                <p>وفي حال لم يُشعر أحد الطرفين الطرف الآخر برغبته في الإيقاف وفق المدة المحددة، تُعد الاتفاقية سارية وفق ذات الشروط.</p>
            </section>

            <section class="contract-section">
                <h2 class="section-title">قيمة الاتفاقية وآلية السداد</h2>
                <div class="price-box mb-3" contenteditable="true">
                    <?php echo $price; ?>
                </div>
                <ul>
                    <li contenteditable="true">السعر شامل ضريبة القيمة المضافة.</li>
                    <li contenteditable="true" hidden>يحصل الطرف الثاني على خصم 34% لأول شهر من الاتفاقية.</li>
                </ul>
            </section>

            <section class="contract-section">
                <h2 class="section-title">فسخ الاتفاقية</h2>
                <ul>
                    <li contenteditable="true">في حال رغب أحد الطرفين في فسخ الاتفاقية، يلتزم بإخطار الطرف الآخر قبل 14 يومًا من تاريخ الدفعة التالية، مع الالتزام بسداد جميع المستحقات المالية إن وجدت للطرف الأول.</li>
                    <li contenteditable="true">يجوز فسخ الاتفاقية في حال إخلال أحد الطرفين بأحد بنودها، إذا استمر الإخلال بعد إخطاره كتابيًا لمدة 10 أيام من قبل الطرف الآخر.</li>
                    <li>إذا أفلس أحد الطرفين أو أصبح في حكم المفلس وفق الأنظمة المعمول بها، مع تقديم الوثائق التي تثبت ذلك.</li>
                    <li>في حال انتهاء مدة الاتفاقية واستمر الطرف الثاني في طلب الأعمال من الطرف الأول، تُعد الاتفاقية مستمرة وسارية وفق البنود ذاتها.</li>
                </ul>
            </section>

            <section class="contract-section">
                <h2 class="section-title">إرجاع الكلمات السرية</h2>
                <ul>
                    <li>يلتزم الطرف الأول بتسليم جميع الكلمات السرية الخاصة بالحسابات المتفق عليها فور إنهاء هذه الاتفاقية.</li>
                    <li>يلتزم الطرف الثاني بتغيير الكلمات السرية الخاصة بحسابات التواصل الاجتماعي المتفق عليها بعد استلامها من الطرف الأول خلال مدة لا تزيد عن 48 ساعة من إنهاء الاتفاقية.</li>
                    <li>في حال قدّم الطرف الثاني إخلاء طرف للطرف الأول، يصبح تغيير الكلمات السرية غير ملزم للطرف الأول.</li>
                </ul>
            </section>

            <section class="contract-section">
                <h2 class="section-title">أحكام عامة</h2>
                <ul>
                    <li>في حال تأخر الطرف الثاني في الرد أو اعتماد الأعمال، فإن الطرف الأول لا يتحمل مسؤولية أي تأخير في التسليم، ويحق له تحديد تاريخ تسليم جديد.</li>
                    <li>لا تشمل هذه الاتفاقية أي مبالغ خاصة بالإعلانات على منصات التواصل الاجتماعي، ويتحملها الطرف الثاني بشكل مستقل.</li>
                    <li>لا يلتزم الطرف الأول بتقديم خدمات إضافية غير مذكورة في الاتفاقية، ويتم الاتفاق على أي خدمات إضافية بشكل منفصل.</li>
                    <li>يحق للطرف الأول نشر الأعمال المذكورة في الاتفاقية ضمن أعماله أو حساباته التسويقية بعد أخذ الإذن من الطرف الثاني.</li>
                    <li>سداد الطرف الثاني للقسط الأول يُعد قبولًا لكافة شروط وأحكام هذه الاتفاقية.</li>
                </ul>
            </section>

            <section class="contract-section">
                <h2 class="section-title">طريقة التواصل</h2>
                <p class="mb-0">يكون البريد الإلكتروني أو الواتساب الخاص بالطرف الأول ومسؤول المتابعة لدى الطرف الثاني الوسيلة الرسمية للتواصل والتعامل بين الطرفين.</p>
            </section>

            <section class="contract-section">
                <h2 class="section-title">التوقيع</h2>
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <div class="signature-box">
                            <strong>الطرف الأول</strong>
                            <p class="mb-0">وكالة قمة الانتشار للتسويق الإلكتروني</p>
                            <div class="signature-line"></div>
                            <p class="mb-1">الاسم: فهد بن خالد الخالدي</p>
                            <p class="mb-0">التوقيع:</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="signature-box">
                            <strong>الطرف الثاني</strong>
                            <p class="mb-0"><?php echo $company_name; ?></p>
                            <div class="signature-line"></div>
                            <p class="mb-1">الاسم: <?php echo $customer_name; ?></p>
                            <p class="mb-0">التوقيع:</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer-note text-center mt-4 pt-3">
                تم إعداد هذه الاتفاقية إلكترونيًا لصالح وكالة قمة الانتشار للتسويق الإلكتروني.
            </div>
        </main>
    </article>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
