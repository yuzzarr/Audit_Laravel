<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page - SMAS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<!-- 
  Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span>SM Audit System</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="getstarted scrollto" href="/Login">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header><!-- End Header -->

  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang di Sebelas Maret Audit System (SMAS)</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Sebelas Maret Audit System (SMAS) digunakan sebagai media evaluasi prodi/unit berbasis manajemen risiko agar diperoleh peningkatan mutu pendidikan tinggi yang berkelanjutan</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="/Login" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Masuk</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>

  <main id="main">
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Prodi</h2> -->
          <p>Program Studi</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-sm-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Informatika</h3>
              <div><sup>S1</sup><span></span></div>
              <img src="{{asset('assets/img/pricing-free.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Fakultas Teknologi Informasi dan Sains Data</li>
              </ul>
              <a href="#" class="btn-buy">Selengkapnya</a>
            </div>
          </div>

          <div class="col-sm-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3 style="color: #65c600;">Sains Data</h3>
              <div class="price"><sup>S1</sup></div>
              <img src="{{asset('assets/img/pricing-starter.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Fakultas Teknologi Informasi dan Sains Data</li>
              </ul>
              <a href="#" class="btn-buy">Selengkapnya</a>
            </div>
          </div>

          
          </div>

          
        </div>

      </div>

    </section>

    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-2">

          <div class="col-sm-6 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jumlah Pengunjung</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
                <p>Bookmark</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pemweb Kelompok 3 - 2023</span></strong>. All Rights Reserved
        <ul>Raissa Nurul I. - Shalli Dyangrosa P.B - Yuzzar Rizky M.</ul>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>