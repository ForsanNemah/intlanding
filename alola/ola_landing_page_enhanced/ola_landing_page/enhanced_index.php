<!DOCTYPE html>
<html dir="rtl" lang="ar">

<?php
include "head.php";
include "info.php";
?>

<head>
    <!-- Enhanced CSS -->
    <link rel="stylesheet" href="enhanced_style.css">
    
    <!-- Additional Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="spinner"></div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Floating Background Elements -->
        <div class="floating-element">
            <i class="fas fa-star" style="font-size: 3rem; color: rgba(255,255,255,0.1);"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-heart" style="font-size: 2.5rem; color: rgba(255,255,255,0.1);"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-gem" style="font-size: 2rem; color: rgba(255,255,255,0.1);"></i>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- Logo Container -->
                    <div class="logo-container" data-aos="fade-down" data-aos-duration="1000">
                        <img src="images/footerlogo.png" alt="الشبكة الأولى" class="img-fluid">
                    </div>
                    
                    <!-- Hero Content -->
                    <div class="text-center text-lg-start">
                        <h1 class="hero-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            الشبكة الأولى
                        </h1>
                        <h2 class="hero-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            أقوى الخصومات في جميع المجالات
                        </h2>
                        <p class="hero-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            السعودية - الأردن - تركيا
                        </p>
                        
                        <!-- CTA Button for larger screens -->
                        <div class="d-none d-lg-block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <a href="#registration-form" class="btn btn-enhanced pulsate">
                                <i class="fas fa-magic me-2"></i>
                                احصل على بطاقتك السحرية الآن
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <!-- Registration Form -->
                    <div class="form-container" id="registration-form" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="text-center mb-4">
                            <h3 class="form-title">
                                <i class="fas fa-gift text-primary me-2"></i>
                                لا يوجد دفع مقدماً
                            </h3>
                            <p class="form-subtitle">
                                سجل بياناتك وسيتم التواصل معك لشرح كل مميزات بطاقتنا السحرية
                            </p>
                        </div>

                        <?php include "form.php"; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator d-none d-lg-block">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-4 fw-bold text-dark mb-3" data-aos="fade-up">
                        لماذا الشبكة الأولى؟
                    </h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="200">
                        نقدم لك أفضل العروض والخصومات الحصرية
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center p-4 h-100 bg-white rounded-3 shadow-sm">
                        <div class="mb-3">
                            <i class="fas fa-percentage fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">خصومات حصرية</h4>
                        <p class="text-muted">احصل على خصومات تصل إلى 70% في أفضل المتاجر والمطاعم</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center p-4 h-100 bg-white rounded-3 shadow-sm">
                        <div class="mb-3">
                            <i class="fas fa-globe fa-3x text-success"></i>
                        </div>
                        <h4 class="fw-bold mb-3">تغطية واسعة</h4>
                        <p class="text-muted">خدماتنا متوفرة في السعودية والأردن وتركيا</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center p-4 h-100 bg-white rounded-3 shadow-sm">
                        <div class="mb-3">
                            <i class="fas fa-shield-alt fa-3x text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">ضمان الجودة</h4>
                        <p class="text-muted">جميع شركاؤنا معتمدون ويقدمون أعلى مستويات الجودة</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Content Sections -->
    <?php
    // Include other sections based on configuration
    if($about_image==1){
        include "about_image.php";
    }
    
    if($services==1){
        echo '<div class="mt-4 text-center"><h1>خدماتنا</h1></div>';
        include "services.php";
    }
    
    if($services2==1){
        echo '<div class="mt-4 text-center"><h1>خدماتنا</h1></div>';
        include "services2.php";
    }
    
    if($derma_services==1){
        echo '<div class="mt-4 text-center"><h1>خدماتنا</h1></div>';
        include "derma_services.php";
    }
    
    if($services_images==1){
        include "services_images.php";
    }
    
    if($parteners==1){
        include "parteners.php";
    }
    
    if($process==1){
        include "process.php";
    }
    
    if($before_after==1){
        include "before_after.php";
    }
    
    if($faq==1){
        include "faq.php";
    }
    
    if($map==1){
        include "map.php";
    }
    
    if($footer==1){
        include "footer.php";
    }
    
    if($footer2==1){
        include "footer2.php";
    }
    ?>

    <!-- Enhanced WhatsApp Button -->
    <a href="https://wa.me/966568430828" class="whatsapp-btn" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Loading overlay
        window.addEventListener('load', function() {
            const loadingOverlay = document.getElementById('loadingOverlay');
            setTimeout(() => {
                loadingOverlay.classList.add('fade-out');
                setTimeout(() => {
                    loadingOverlay.style.display = 'none';
                }, 500);
            }, 1000);
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

        // Form enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const formInputs = document.querySelectorAll('.form-control');
            
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });

        // Add floating animation to elements
        function addFloatingAnimation() {
            const floatingElements = document.querySelectorAll('.floating-element');
            floatingElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 2}s`;
            });
        }

        addFloatingAnimation();
    </script>
</body>
</html>

