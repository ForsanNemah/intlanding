 
  <style>
    body {
      background: linear-gradient(145deg, #f9fbfd, #e9eff5);
      font-family: 'Tajawal', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 30px 15px;
    }

    .card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      padding: 40px 30px;
      width: 100%;
      max-width: 700px;
      text-align: center;
      position: relative;
    }

    .btn-location {
      position: relative;
      font-size: 1.1rem;
      padding: 14px 24px;
      border-radius: 12px;
      background-color: #be6e29;
      color: white;
      font-weight: bold;
      margin: 10px 0;
      display: block;
      text-align: center;
      text-decoration: none;
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.4s ease;
    }

    .btn-location.show {
      opacity: 1;
      transform: translateY(0);
    }

    .btn-location:hover {
      background-color: #0056b3;
      transform: scale(1.02);
      text-decoration: none;
      color: white;
    }

    .btn-location .material-icons {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 22px;
    }

    .nav-pills .nav-link {
      font-weight: bold;
      border-radius: 10px;
      padding: 10px 20px;
    }
  </style>
</head>

<body>
  <div class="card animate__animated animate__fadeInUp">
    <!-- أسماء المدن كأزرار تبويب -->
    <ul class="nav nav-pills justify-content-center mb-4" id="cityTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="khobar-tab" data-bs-toggle="tab" data-bs-target="#khobar" type="button" role="tab">الخبر</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="dammam-tab" data-bs-toggle="tab" data-bs-target="#dammam" type="button" role="tab">الدمام</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="ihsan-tab" data-bs-toggle="tab" data-bs-target="#ihsan" type="button" role="tab">الإحساء</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="jubail-tab" data-bs-toggle="tab" data-bs-target="#jubail" type="button" role="tab">الجبيل</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="abqaiq-tab" data-bs-toggle="tab" data-bs-target="#abqaiq" type="button" role="tab">أبقيق</button>
      </li>
    </ul>

    <!-- محتوى التبويبات -->
    <div class="tab-content">
      <!-- الخبر -->
      <div class="tab-pane fade show active" id="khobar" role="tabpanel">
        <a href="https://maps.app.goo.gl/N8MQirpkU8R4KLMT9" target="_blank" class="btn-location" onclick="trackViewContent('الخبر - الشراع')" >
          <span class="material-icons">location_on</span>
          الخبر - الشراع
        </a>

        <a href="https://goo.gl/maps/YLbGgaoAPanYBgwX9" target="_blank" class="btn-location" onclick="trackViewContent('الخبر العزيزية (الخزامى)')">
          <span class="material-icons">location_on</span>
          الخبر العزيزية (الخزامى)
        </a>

        <a href="https://goo.gl/maps/grhVRPZcVE3QXqKU8" target="_blank" class="btn-location" onclick="trackViewContent('الظهران')">
          <span class="material-icons">location_on</span>
          الظهران
        </a>
      </div>

      <!-- الدمام -->
      <div class="tab-pane fade" id="dammam" role="tabpanel">
        <a href="https://goo.gl/maps/h2xTTDnnjnYMVCSj9" target="_blank" class="btn-location" onclick="trackViewContent('الدمام - الفيصليه')">
          <span class="material-icons">location_on</span>
          الدمام - الفيصليه
        </a>
      </div>

      <!-- الإحساء -->
      <div class="tab-pane fade" id="ihsan" role="tabpanel">
        <a href="https://goo.gl/maps/93EwAe7rTwZApApU7" target="_blank" class="btn-location" onclick="trackViewContent('الإحساء - الهفوف حي الروضة')">
          <span class="material-icons">location_on</span>
          الإحساء - الهفوف حي الروضة
        </a>
        <a href="https://goo.gl/maps/UZNxojcpGpktKPAo7" target="_blank" class="btn-location" onclick="trackViewContent('الإحساء - الهفوف حي الرقيقة')">
          <span class="material-icons">location_on</span>
          الإحساء - الهفوف حي الرقيقة
        </a>
        <a href="https://maps.google.com/?cid=17715121357787891184&entry=gps" target="_blank" class="btn-location" onclick="trackViewContent('الإحساء - المبرز حي السلام')">
          <span class="material-icons">location_on</span>
          الإحساء - المبرز حي السلام
        </a>
        <a href="https://goo.gl/maps/g1ZnR4kwXXb23z7YA" target="_blank" class="btn-location" onclick="trackViewContent('الإحساء - العيون')">
          <span class="material-icons">location_on</span>
          الإحساء - العيون
        </a>
      </div>

      <!-- الجبيل -->
      <div class="tab-pane fade" id="jubail" role="tabpanel">
        <a href="https://goo.gl/maps/dkdoPuRe25mYSmFi9" target="_blank" class="btn-location" onclick="trackViewContent('الجبيل - البلد')">
          <span class="material-icons">location_on</span>
          الجبيل - البلد
        </a>
        <a href="https://goo.gl/maps/T2jDJQUWk1C6yhVHA" target="_blank" class="btn-location" onclick="trackViewContent('الجبيل - الصناعية')">
          <span class="material-icons">location_on</span>
          الجبيل - الصناعية
        </a>
      </div>

      <!-- أبقيق -->
      <div class="tab-pane fade" id="abqaiq" role="tabpanel">
        <a href="https://goo.gl/maps/rSKTVRdPB5JZRHcS6" target="_blank" class="btn-location" onclick="trackViewContent('أبقيق')">
          <span class="material-icons">location_on</span>
          أبقيق
        </a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript لعرض الأزرار بتأثير عند التبديل -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabButtons = document.querySelectorAll('[data-bs-toggle="tab"]');
      const allButtons = document.querySelectorAll('.btn-location');

      function showButtons(container) {
        const buttons = container.querySelectorAll('.btn-location');
        buttons.forEach((btn, index) => {
          setTimeout(() => btn.classList.add('show'), index * 150);
        });
      }

      function hideButtons() {
        allButtons.forEach(btn => btn.classList.remove('show'));
      }

      // عند تحميل الصفحة لأول مرة
      showButtons(document.querySelector('#khobar'));

      // عند تغيير التبويب
      tabButtons.forEach(tab => {
        tab.addEventListener('shown.bs.tab', (e) => {
          hideButtons();
          const targetId = e.target.getAttribute('data-bs-target');
          const targetPane = document.querySelector(targetId);
          showButtons(targetPane);
        });
      });
    });
  </script>

  <!-- سكريبت واتساب API -->
  <script>
    function openWhatsApp(branchName) {
      const phoneNumber = "966500000000"; // ضع رقم الواتساب هنا بدون 0 في البداية
      const message = `مرحباً، أود معرفة المزيد عن فرع ${branchName}`;
      const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
      window.open(url, "_blank");
    }
  </script>
 