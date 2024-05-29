<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IMJOIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="imk.png" rel="icon">
  <link href="imk.png" rel="imk">

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <!-- <i class="bi bi-camera"></i> -->
        <img src="imk.png" class="img-fluid" alt="">
        <h1>IMJOIN</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="index.php" class="active">Home</a></li>
          <!-- <li><a href="about.html">Archive</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html" class="active">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li> -->
          <!-- <li><a href="services.html">Services</a></li> -->
          <!-- <li><a href="contact.html">Contact</a></li> -->
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
        <a href="auth.php" class="btn">LOGOUT</a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>BOWLING</h2>
            <!-- <p></p> -->

            <!-- <a class="cta-btn" href="contact.html">Available for hire</a> -->

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/gambar/bowling/bowling.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gambar/bowling/bowling-1.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gambar/bowling/bowling-2.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gambar/bowling/bowling-3.jpg" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>BOWLING</h2>
              <p>
                Secara umum, bowling adalah permainan dengan menggelindingkan bola ke arah depan menggunakan satu tangan untuk menjatuhkan sejumlah pin yang disusun secara berderet di ujung lintasan. Pemain bowling akan menggelindingkan bola pada lintasan yang panjang dan licin. Artikel ini telah tayang di Idntimes.com dengan judul "Olahraga Bowling: Sejarah, Peraturan, Peralatan, dan Teknik".               </p>
              <p>
                Pada lintasan bowling, terdapat semacam selokan di sebelah kanan dan kiri. Tak jarang pemain pemula gagal menggelindingkan bola bowling hingga menabrak pin, sehingga berakhir masuk ke selokan di samping kanan maupun kiri lintasan. Artikel ini telah tayang di Idntimes.com dengan judul "Olahraga Bowling: Sejarah, Peraturan, Peralatan, dan Teknik".              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>INFORMASI</h3>
              <ul>
                <li><strong>Category</strong> <span>Sports</span></li>
                <li><strong>date</strong> <span>01 JULY, 2024</span></li>
                <li><strong>Location</strong></li>
                <li><a href="#" class="location" onclick="redirectToMap()"><i class="bi bi-geo-alt-fill"></i></a></li>
                <script>
                  function redirectToMap() {
                    window.location.href = 'https://maps.app.goo.gl/kFo6dqFc3u9UL6LdA';
                  }
                </script>
                <li><a href="#" onclick="redirectToWA()" class="btn-visit align-self-start">JOIN</a></li>
                <script>
                  function redirectToWA() {
                    window.location.href = 'https://chat.whatsapp.com/FVdxlpDzIUgC73oofrcpey';
                  }
                </script>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>