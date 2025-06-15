<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قصر الجمال - مجمع طبي متخصص في علاجات التجميل</title>
    
    <!-- Bootstrap 5.3 RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Arabic -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #d4a574;
            --secondary-color: #f8f4f0;
            --accent-color: #8b6f47;
            --text-dark: #2c2c2c;
            --text-light: #666;
            --gold-gradient: linear-gradient(135deg, #d4a574 0%, #f4e4bc 100%);
            --shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        * {
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f8f4f0 0%, #ffffff 100%);
            color: var(--text-dark);
            line-height: 1.7;
        }

        .clinic-logo {
            max-width: 200px;
            height: auto;
            filter: drop-shadow(0 5px 15px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
        }

        .clinic-logo:hover {
            transform: scale(1.05);
        }

        .hero-section {
            background: var(--gold-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assets/images/clinic_interior_2.png') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: rgba(255,255,255,0.95);
            margin-bottom: 2rem;
            font-weight: 400;
        }

        .cta-button {
            background: linear-gradient(135deg, #8b6f47 0%, #d4a574 100%);
            border: none;
            padding: 20px 50px;
            font-size: 1.4rem;
            font-weight: 700;
            border-radius: 50px;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            color: white;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--accent-color);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gold-gradient);
            border-radius: 2px;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .service-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .service-description {
            color: var(--text-light);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .registration-form {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: var(--shadow);
            border: 3px solid var(--primary-color);
        }

        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            padding: 15px 20px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(212, 165, 116, 0.25);
        }

        .form-label {
            font-weight: 600;
            color: var(--accent-color);
            margin-bottom: 0.8rem;
        }

        .whatsapp-float {
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 30px;
            left: 30px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            text-align: center;
            font-size: 2rem;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            z-index: 1000;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            background-color: #128c7e;
            transform: scale(1.1);
            color: white;
        }

        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: var(--shadow);
            text-align: center;
            margin-bottom: 2rem;
        }

        .testimonial-text {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--accent-color);
        }

        .stats-section {
            background: var(--gold-gradient);
            color: white;
            padding: 5rem 0;
        }

        .stat-item {
            text-align: center;
            margin-bottom: 2rem;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            display: block;
        }

        .stat-label {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .about-section {
            padding: 6rem 0;
        }

        .about-image {
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .footer {
            background: var(--accent-color);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .contact-info {
            background: var(--secondary-color);
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .contact-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .cta-button {
                padding: 15px 30px;
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .clinic-logo {
                max-width: 150px !important;
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>



<body>
    <!-- Hero Section -->
     
    


<?php include "hero.php"; ?>

<?php //include "form.php"; ?>

















    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container">
            <h2 class="section-title fade-in">خدماتنا اللي تخليك أحلى</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card fade-in">
                        <div class="service-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h3 class="service-title">الفيلر</h3>
                        <p class="service-description">
                            علاجات الفيلر الحديثة اللي ترجع لبشرتك نضارتها وحيويتها. 
                            نستخدم أفضل أنواع الفيلر العالمية عشان تحصلين على نتائج طبيعية ومذهلة تدوم معاك فترة طويلة.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card fade-in">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="service-title">البوتكس</h3>
                        <p class="service-description">
                            تقنيات البوتكس الحديثة اللي تخلصك من التجاعيد وخطوط التعبير. 
                            نتائج سريعة وآمنة مع المحافظة على تعبيرات وجهك الطبيعية اللي تخليك تبانين أصغر وأحلى.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card fade-in">
                        <div class="service-icon">
                            <i class="fas fa-laser-pointer"></i>
                        </div>
                        <h3 class="service-title">الليزر</h3>
                        <p class="service-description">
                            أحدث تقنيات الليزر لإزالة الشعر وتجديد البشرة. 
                            علاجات آمنة ومضمونة تعطيك نتائج دائمة وتخليك تحسين بنعومة بشرتك وجمالها.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item fade-in">
                        <span class="stat-number">5000+</span>
                        <span class="stat-label">عميلة سعيدة</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item fade-in">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">سنوات خبرة</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item fade-in">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">نتائج مضمونة</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item fade-in">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">خدمة عملاء</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="assets/images/clinic_interior_1.png" alt="قصر الجمال - التصميم الداخلي" class="img-fluid about-image fade-in">
                </div>
                <div class="col-lg-6">
                    <div class="fade-in">
                        <h2 class="section-title text-start">ليش تختارين قصر الجمال؟</h2>
                        <p class="lead mb-4">
                            في قصر الجمال، نؤمن إن كل وحدة فيكم تستاهل تحس بالثقة والجمال. 
                            نحن نقدم أحدث علاجات التجميل بأيدي دكاترة متخصصين وبأعلى معايير الجودة والأمان.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                                    <span>دكاترة معتمدين ومتخصصين</span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                                    <span>أحدث التقنيات العالمية</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                                    <span>بيئة آمنة ومعقمة</span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                                    <span>نتائج طبيعية ومضمونة</span>
                                </div>
                            </div>
                        </div>
                        <a href="#registration" class="cta-button mt-4">احجزي موعدك حالاً</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5" style="background: var(--secondary-color);">
        <div class="container">
            <h2 class="section-title fade-in">ايش تقول عميلاتنا</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-card fade-in">
                        <p class="testimonial-text">
                            "تجربة روعة في قصر الجمال! النتايج فاقت كل توقعاتي والفريق محترف جداً. أنصح كل وحدة تزور هالمكان المميز."
                        </p>
                        <p class="testimonial-author">- سارة أحمد</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card fade-in">
                        <p class="testimonial-text">
                            "خدمة ممتازة ودكاترة على أعلى مستوى. حصلت على النتيجة اللي كنت أحلم فيها. شكراً لفريق قصر الجمال المتميز."
                        </p>
                        <p class="testimonial-author">- نورا محمد</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card fade-in">
                        <p class="testimonial-text">
                            "المكان نظيف والأجواء مريحة جداً. الدكتورة شرحت لي كل شي بالتفصيل وكانت النتايج طبيعية ومذهلة."
                        </p>
                        <p class="testimonial-author">- منى سالم</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Section -->




    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>قصر الجمال</h4>
                    <p>مجمعك الطبي المتخصص في علاجات التجميل</p>
                </div>
                <div class="col-lg-4">
                    <h4>معلومات التواصل</h4>
                    <p><i class="fas fa-map-marker-alt me-2"></i> الرياض - حي الجندارية</p>
                    <p><i class="fab fa-whatsapp me-2"></i> +966 58 309 0219</p>
                </div>
                <div class="col-lg-4">
                    <h4>ساعات العمل</h4>
                    <p>السبت - الخميس: 9:00 ص - 10:00 م</p>
                    <p>الجمعة: 2:00 م - 10:00 م</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 قصر الجمال. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/966583090219?text=مرحباً، أبي أحجز استشارة في قصر الجمال" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
  <script>
        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {

            observer.observe(el);
        });
        

        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            
            let message = `مرحباً، أبي أحجز موعد في قصر الجمال\n\nالاسم: ${name}\nرقم الجوال: ${phone}`;
            
            if (service) {
                const serviceNames = {
                    'filler': 'الفيلر',
                    'botox': 'البوتكس',
                    'laser': 'الليزر',
                    'consultation': 'استشارة عامة'
                };
                message += `\nالخدمة اللي أبيها: ${serviceNames[service]}`;
            }
            
           // const whatsappUrl = `https://wa.me/966583090219?text=${encodeURIComponent(message)}`;
            //window.open(whatsappUrl, '_blank');
        });

        // Smooth scrolling for anchor links
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some initial animations

        
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.querySelectorAll('.fade-in').forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('visible');
                    }, index * 100);
                });
            }, 500);
        });

        
    </script>


    
</body>
</html>

