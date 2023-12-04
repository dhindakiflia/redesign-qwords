<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Qwords</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/img/logo-qwords.png')}}" rel="icon">
  <link href="{{ asset('/lumia/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/lumia/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/lumia/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/lumia/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/lumia/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/lumia/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/lumia/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        {{-- <h1><a href="#">Lumia</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#"><img src="{{ asset('img/logo-qwords-white.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#cloud-hosting-indo">Cloud Hosting</a></li>
              <li><a href="#others-services">Others</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#domain">Domain</a></li>
          <li><a class="nav-link scrollto" href="#commitment">Our Commitment</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="https://api.whatsapp.com/send?phone=628112292430"><i class="bi bi-whatsapp"></i></a>
        <a href="tel:08041808888"><i class="bi bi-telephone"></i></a>
        <a href="https://www.instagram.com/qwordsdotcom/"><i class="bi bi-instagram"></i></a>
        <a href="https://twitter.com/qwordsdotcom"><i class="bi bi-twitter-x"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1 class="text-left">Cloud Hosting</h1>
      <h2 class="text-left">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3.</h2>
      <h2 class="spacing text-left">Mulai dari</h2>
      <h2 class="text-left">Rp.<span class="price">14.500</span>/bln</h2>
      <a href="#cloud-hosting-indo" class="btn-get-started scrollto"><span>Get Started </span></a>
    </div>
  </section><!-- End Hero -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact text-left">
            <img src="{{ asset('img/logo-qwords-black.png') }}" style="width: 230px;padding: 0px;" alt="">
            <p>
              Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung layanan support 24/7
            </p>
            <img src="{{ asset('img/logo1.png') }}" style="width: 170px; padding:20px 0px;" alt="">
            <p>
              Terdaftar di PSE, ICANN dan Partner Lainnya
            </p>
            <img src="{{ asset('img/logo2.png') }}" style="width: 100px; padding:20px 0px;" alt="">
            <img src="{{ asset('img/logo3.png') }}" style="width: 100px; padding:20px 0px;" alt="">
            <img src="{{ asset('img/logo4.png') }}" style="width: 100px; padding:20px 0px;" alt="">
            <img src="{{ asset('img/qrcode.png') }}" style="width: 70px; padding:20px 0px; margin-left: 20px" alt="">
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Contents</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cloud-hosting-indonesia">Cloud Hosting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#domain">Domain</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#commitment">Our Commitment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
            </ul>
            <br>
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About Us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Corporate Website</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Qwords History</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Qwords Differences</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Media Publication</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Network & Infrastructure</a></li>
            </ul>
            <br>
            <h4>Customer Care</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pembayaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Faktur Pajak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bantuan 24 Jam</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <p>
              <strong>Kantor Surabaya</strong><br>
              Gedung Bursa Efek Indonesia Lt.10,<br>
              Jl. Taman AIS Nasution No.21, <br>
              Surabaya 60271 - Indonesia <br>
              <strong>Phone:</strong> 031 30008800<br>
            </p><br>

            <p>
              <strong>Kantor Yogyakarta</strong><br>
              Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman,<br>
              Yogyakarta 55584 - Indonesia <br>
              <strong>Phone:</strong> 0274 6058800<br>
            </p><br>

            <p>
              <strong>Kantor Jakarta</strong><br>
              Gedung Cyber 1 Lantai 3<br>
              Jl.Kuningan Barat no.8,<br>
              Jakarta 12710 - Indonesia <br>
              <strong>Phone:</strong> 021 39708800<br>
            </p><br>

            <p>
              <strong>Kantor Bandung</strong><br>
              Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi,<br>
              Bandung 40163 - Indonesia <br>
              <strong>Phone:</strong> 022 30508800<br>
            </p><br>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://api.whatsapp.com/send?phone=628112292430"><i class="bi bi-whatsapp"></i></a>
        <a href="tel:08041808888"><i class="bi bi-telephone-fill"></i></a>
        <a href="https://www.instagram.com/qwordsdotcom/"><i class="bi bi-instagram"></i></a>
        <a href="https://www.facebook.com/qwordsdotcom"><i class="bi bi-facebook"></i></a>
        <a href="mail:info@qwords.com"><i class="bi bi-envelope"></i></a>
        <a href="https://www.youtube.com/user/qwordsvideo"><i class="bi bi-youtube"></i></a>
        <a href="https://twitter.com/qwordsdotcom"><i class="bi bi-twitter-x"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/lumia/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/lumia/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/lumia/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/lumia/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/lumia/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/lumia/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/lumia/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/lumia/assets/js/main.js') }}"></script>

</body>

</html>