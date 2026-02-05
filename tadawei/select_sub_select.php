<?php
// مصفوفة الخدمات مع الأنواع الفرعية
$services = [
    "قسم الاسنان" => ["توريد اللثة","تركيبات الاسنان","حشوات","قوالب التبييض المنزلي", "تبييض الاسنان بالليزر ", "الفلورايد  ", " ", " ازالة الرواسب مع التلميع  "],
    "قسم الجلدية" => ["فيلر","ابرة الياقوت", "بوتكس", "ليزر", "تقشير", "إبرة نظارة", ""],
     "قسم التجميل" => ["نحت الجسم", "شفط الدهون", "اذابة اللغلوغ", " ", "   ", ""],
       "عيادة العيون  " => [" عملية تصحيح النظر  ", " ازالة الماء من العين  ", " وحدة البصريات  ", " امراض عيون الاطفال والحول", "عمليات زراعة القرنية   ", ""],
    "عيادة العلاج الطبيعي" => [" علاج الام الرقبة","علاج الام الكتف","علاج الام الركبة","علاج الام الظهر","علاج الام الابهر","علاج طبيعي منزلي", " ", " "],
];
?>

 
    
    <style>
        .form-container {
            background: #08a9af;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            margin-top: 50px;
            transition: transform 0.3s ease;
        }
        .form-container:hover { transform: translateY(-5px); }
        .form-title { color: #fff; font-weight: 700; margin-bottom: 30px; text-align: center; font-size: 2.5rem; }
        .form-label { font-weight: 600; color: #f7f7f7; margin-bottom: 8px; }
        .form-control { border: 2px solid #e2e8f0; border-radius: 12px; padding: 12px 16px; font-size: 16px; transition: all 0.3s ease; }
        .form-control:focus { border-color: #667eea; box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25); transform: translateY(-2px); }
        .btn-register { background: linear-gradient(135deg, #ff0000 0%, #c43535 100%); border: none; border-radius: 12px; padding: 15px 40px; font-size: 18px; font-weight: 600; color: white; transition: all 0.3s ease; width: 100%; margin-top: 20px; }
        .btn-register:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4); background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%); }
        .btn-register:active { transform: translateY(-1px); }
        .invalid-feedback { font-weight: 500; }
        .loading-spinner { display: none; }
        .success-message, .error-message { display: none; color: white; padding: 15px; border-radius: 12px; text-align: center; margin-top: 20px; font-weight: 600; }
        .success-message { background: linear-gradient(135deg, #48bb78 0%, #38a169 100%); }
        .error-message { background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%); }
        .required-asterisk { color: #e53e3e; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="form-container">
                <h1 class="form-title">سجل الان<br>ولاتفوتي عروضنا</h1>
                <form id="registrationForm" novalidate>
                    <!-- Name Field -->
                    <div class="mb-4">
                        <label for="name" class="form-label">الاسم <span class="required-asterisk">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">يرجى إدخال الاسم</div>
                    </div>

                    <!-- Phone Field -->
                    <div class="mb-4">
                        <label for="phone" class="form-label">رقم الجوال <span class="required-asterisk">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" 
                               pattern="[0-9]{10,}" placeholder="05xxxxxxxx" required>
                        <div class="invalid-feedback">يرجى إدخال رقم جوال صحيح (10 أرقام على الأقل)</div>
                    </div>



             
















   <!-- Service Field -->
                    <div class="mb-4">
                        <label for="branch" class="form-label">الفرع</label>
                        
                             <select class="form-control" id="branch" name="branch">
    <option value="">اختر الفرع </option>
    <option value="   الطائف    ">  الطائف  </option>
    <option value=" تربه  ">    تربه  </option>
</select>


                    </div>

                    <!-- Service Field -->
                    <div class="mb-4">
                        <label for="service" class="form-label">الخدمة</label>
                        <select class="form-control" id="service" name="service">
                            <option value="">اختر الخدمة</option>
                            <?php foreach ($services as $main => $subs): ?>
                                <option value="<?php echo $main; ?>"><?php echo $main; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Sub-Service Field -->
                    <div class="mb-4" id="subServiceContainer" style="display:none;">
                        <label for="sub_service" class="form-label">الخدمة الفرعية</label>
                        <select class="form-control" id="sub_service" name="sub_service">
                            <option value="">اختر الخدمة الفرعية</option>
                        </select>
                    </div>




                    <div class="mb-4">
                        <label for="name" class="form-label">ملاحظات اضافية  </label>
                        <input type="text" class="form-control" id="note" name="note"  >
                        <div class="invalid-feedback">ملاحضات اضافية    </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-register">
                        <span class="button-text">تسجيل</span>
                        <span class="loading-spinner">
                            <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                            جاري التسجيل...
                        </span>
                    </button>

                    <!-- Messages -->
                    <div class="success-message" id="successMessage">تم التسجيل بنجاح! سيتم تحويلك الآن...</div>
                    <div class="error-message" id="errorMessage">حدث خطأ أثناء التسجيل. يرجى المحاولة مرة أخرى.</div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5.3 JS -->
 

<!-- Custom JavaScript -->
<script>
    const services = <?php echo json_encode($services, JSON_UNESCAPED_UNICODE); ?>;
    const serviceSelect = document.getElementById('service');
    const subServiceSelect = document.getElementById('sub_service');
    const subServiceContainer = document.getElementById('subServiceContainer');

    serviceSelect.addEventListener('change', function() {
        const selectedService = this.value;
        subServiceSelect.innerHTML = '<option value="">اختر الخدمة الفرعية</option>';
        if (services[selectedService]) {
            let hasValidSubs = false;
            services[selectedService].forEach(sub => {
                if (sub.trim() !== "") { // تجاهل القيم الفارغة
                    let option = document.createElement('option');
                    option.value = sub.trim();
                    option.textContent = sub.trim();
                    subServiceSelect.appendChild(option);
                    hasValidSubs = true;
                }
            });
            subServiceContainer.style.display = hasValidSubs ? 'block' : 'none';
        } else {
            subServiceContainer.style.display = 'none';
        }
    });
</script>







   <script>
        // SHA-256 hashing function for phone numbers
        async function sha256(message) {
            const msgBuffer = new TextEncoder().encode(message);
            const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);
            const hashArray = Array.from(new Uint8Array(hashBuffer));
            const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
            return hashHex;
        }

        // Format phone number to international format
        function formatPhoneNumber(phone) {
            // Remove any non-digit characters
            let cleanPhone = phone.replace(/\D/g, '');
            
            // If it starts with 05, convert to +966 format
            if (cleanPhone.startsWith('05')) {
                cleanPhone = '+966' + cleanPhone.substring(1);
            }
            // If it starts with 5 (without 0), add +966
            else if (cleanPhone.startsWith('5') && cleanPhone.length === 9) {
                cleanPhone = '+966' + cleanPhone;
            }
            // If it doesn't start with +, assume it's Saudi number
            else if (!cleanPhone.startsWith('+')) {
                cleanPhone = '+966' + cleanPhone;
            }
            
            return cleanPhone;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const nameInput = document.getElementById('name');
            const phoneInput = document.getElementById('phone');
              const branch = document.getElementById('branch');
            const serviceInput = document.getElementById('service');
             const sub_service = document.getElementById('sub_service');
              const note = document.getElementById('note');
            
            const submitButton = form.querySelector('button[type="submit"]');
            const buttonText = submitButton.querySelector('.button-text');
            const loadingSpinner = submitButton.querySelector('.loading-spinner');
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');
            
            // Phone input validation - only allow numbers
            phoneInput.addEventListener('input', function(e) {
                // Remove any non-digit characters
                this.value = this.value.replace(/\D/g, '');
            });
            
            // Real-time validation
            function validateField(field) {
                if (field.checkValidity()) {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                    return true;
                } else {
                    field.classList.remove('is-valid');
                    field.classList.add('is-invalid');
                    return false;
                }
            }
            
            nameInput.addEventListener('blur', () => validateField(nameInput));
            phoneInput.addEventListener('blur', () => validateField(phoneInput));
            
            // Form submission
            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                // Reset messages
                successMessage.style.display = 'none';
                errorMessage.style.display = 'none';
                
                // Validate form
                let isValid = true;
                
                // Validate name
                if (!nameInput.value.trim()) {
                    validateField(nameInput);
                    isValid = false;
                } else {
                    nameInput.classList.remove('is-invalid');
                    nameInput.classList.add('is-valid');
                }
                
                // Validate phone
                const phoneValue = phoneInput.value.trim();
                if (!phoneValue || phoneValue.length < 10 || !/^\d+$/.test(phoneValue)) {
                    validateField(phoneInput);
                    isValid = false;
                } else {
                    phoneInput.classList.remove('is-invalid');
                    phoneInput.classList.add('is-valid');
                }
                
                if (!isValid) {
                    return;
                }
                
                // Show loading state
                buttonText.style.display = 'none';
                loadingSpinner.style.display = 'inline-block';
                submitButton.disabled = true;
                
                // Prepare phone number for pixel tracking
                const formattedPhone = formatPhoneNumber(phoneValue);
                const hashedPhone = await sha256(formattedPhone);
                
                // Fire pixel events for successful form submission with phone number
                try {
                    // Snapchat Pixel Sign Up event with phone number
                    if (typeof snaptr !== 'undefined') {
                        snaptr('track', 'SIGN_UP', {
                            'user_phone_number': hashedPhone
                        });
                    }
                    
                    // TikTok Pixel Sign Up event with phone number
                    if (typeof ttq !== 'undefined') {
                        ttq.track('CompleteRegistration', {
                            'phone_number': formattedPhone
                        });
                    }
                } catch (error) {
                    console.log('Pixel tracking error:', error);
                }
                
                // Prepare form data
                const date_and_time = new Date().toLocaleString();
                const formData = new FormData();
                formData.append('name', nameInput.value.trim());
                formData.append('phone', phoneValue);
                   formData.append('branch', branch.value);
                formData.append('service', serviceInput.value);
              
                  formData.append('sub_service', sub_service.value);
                 formData.append('date_and_time', date_and_time);
                  formData.append('source', ad_source);
                   formData.append('note', note.value);
                    




                  let message = `لديك تسجيل جديد باسم ${nameInput.value} رقم جوال ${phoneValue} خدمة ${serviceInput.value} حملة  ${ad_name}`;
                    sendWappiMessage(message, w_app_group_id);

                
                // Submit to Google Apps Script
                fetch(sheet_url, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        // Show success message
                        successMessage.style.display = 'block';
                        
                        // Redirect after 2 seconds
                        setTimeout(() => {
                            window.location.href = 'done.php';
                        }, 2000);
                    } else {
                        throw new Error('Network response was not ok');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    errorMessage.style.display = 'block';
                    
                    // Reset button state
                    buttonText.style.display = 'inline-block';
                    loadingSpinner.style.display = 'none';
                    submitButton.disabled = false;
                });
            });
        });
    </script>
 
 
 