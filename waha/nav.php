 
    <style>
      body {
        font-family: 'Noto Kufi Arabic', 'Tajawal', sans-serif;
        background-color: #f8f9fa;
      }
      .navbar {
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
      }
      .navbar-brand img {
        height: 45px;
        width: auto;
      }
      .nav-link {
        font-size: 1rem;
        margin: 0 0.3rem;
        color: #fff !important;
        transition: color 0.2s ease;
      }
      .nav-link:hover, .nav-link.active {
        color: #ffe082 !important;
      }
      .navbar-toggler {
        border: none;
      }
      .navbar-toggler:focus {
        box-shadow: none;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 fixed-top">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="logo/logow.png" alt="شعار الموقع" class="me-2" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="تبديل التنقل">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item"><a class="nav-link active" href="index.php">الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link" href="#about_us">من نحن</a></li>
            <li class="nav-item"><a class="nav-link" href="#our_services_id">خدماتنا</a></li>
            <li hidden class="nav-item"><a class="nav-link" href="#offers">عروضنا</a></li>
            <li class="nav-item"><a class="nav-link" href="#why_us">لماذا نحن</a></li>
            <li class="nav-item"><a class="nav-link" href="#footer_id">تواصل معنا</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/biistrap@latest/dist/js/biistrap.bundle.min.js"></script>
    <script>
      // Close navbar on link click (for mobile)
      document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
          const navbarCollapse = document.querySelector('.navbar-collapse');
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse && navbarCollapse.classList.contains('show')) {
            bsCollapse.hide();
          }
        });
      });
    </script>
 