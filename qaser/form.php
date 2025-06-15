

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



  