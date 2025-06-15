

    <section class="py-5" id="registration">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-form fade-in">
                        <h2 class="section-title mb-5">احجزي استشارتك المجانية حالاً</h2>
                        <p class="text-center mb-4 lead">
                            سجلي بياناتك وراح نتواصل معاك خلال 24 ساعة لحجز موعدك
                        </p>
                        <form id="registrationForm" method="post" action="post_to_google_sheet.php">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label">الاسم الكامل *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label">رقم الجوال *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="service" class="form-label">الخدمة اللي تبينها</label>
                                <select class="form-control" id="service" name="service">
                                    <option value="">اختاري الخدمة</option>
                                    <option value="filler">الفيلر</option>
                                    <option value="botox">البوتكس</option>
                                    <option value="laser">الليزر</option>
                                    <option value="consultation">استشارة عامة</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="cta-button pulse-animation">
                                    <i class="fab fa-whatsapp me-2"></i>
                                    احجزي موعدك عبر الواتساب
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
        /*
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

        /*
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.querySelectorAll('.fade-in').forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('visible');
                    }, index * 100);
                });
            }, 500);
        });

        */
    </script>