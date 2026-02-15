<section id="about_us" class="about-section mt-5 mb-5 " >
    <div class="container">
        <div class="row align-items-center">
            <!-- النص -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="section-title mb-3"
                
                >عن    

                <?php echo $place_name; ?>


                </h2>
                <div class="section-divider mb-4"></div>
                <p class="about-text fs-5 lh-lg text-muted">

 <?php echo $about; ?>
                    
                </p>
                <div class="d-flex flex-wrap gap-3 mt-3">
                    <a hidden href="#services" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                        اكتشف خدماتنا
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $w_app_number; ?>&text=مرحباً! أود حجز موعد في مجمع العافية." 
                       target="_blank" 
                       class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                        حجز عبر واتساب
                    </a>
                </div>
            </div>
            <!-- صورة -->
            <div class="col-lg-5 text-center">
                <img src="place_image/pic.jpg" 
                     alt="عن مجمع العافية" 
                     class="img-fluid rounded-4 shadow-sm" 
                     style="max-height: 350px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>
