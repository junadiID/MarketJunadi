<?php
session_start();
require '../config.php';
require '../lib/database.php';

if (isset($_SESSION['user'])) {
    header("Location: ".$config['web']['url']);
} else {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MARKET JUNADI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <src 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>MARKET JUNADI</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Daftar Layanan</a></li>
          <li><a class="nav-link scrollto" href="#features">Fitur Kami</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          <li><a href="<?php echo $config['web']['url'] ?>auth/register"><button class="btn btn-outline-warning" >Daftar</button></a></li>
          <li><a href="<?php echo $config['web']['url'] ?>auth/login"><button class="btn btn-outline-info">Masuk</button></a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Mau Follower Sosmed Kamu Banyak <span>#MarketJunadi</span> AJAH</h1>
            <h2>Kami menyediakan berbagai layanan social media marketing yang bergerak terutama di Indonesia. Dengan bergabung bersama kami, Anda dapat menjadi penyedia jasa social media atau reseller social media seperti jasa penambah Followers, Likes, dll</h2>
            <div class="text-center text-lg-start">
              <a href="<?php echo $config['web']['url'] ?>auth/register" class="btn-get-started scrollto">Register Sekarang</a>
            </div>
          </div>
        </div>
        <!--<a href='https://www.freepik.com/vectors/social-media'>Social media vector created by stories - www.freepik.com</a>-->
        <div class="col-lg-4 order-1 order-lg-2 img1" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/img1.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          </div>
              
          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h2>3 Langkah Mudah Untuk Memulai Transaksi</h2>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bi bi-clipboard-plus"></i></div>
              <h4 class="title"><a href="#">Lakukan Registrasi</a></h4>
              <p class="description">Pendaftaran Gratis Tanpa biaya, Setelah Mendaftar Akun Anda Langsung Aktif Dan Dapat Melakukan Isi Saldo</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bi bi-wallet2"></i></div>
              <h4 class="title"><a href="#">Melakukan Isi Saldo</a></h4>
              <p class="description">Langkah Selanjutnya Anda Melakukan Isi Saldo Agar Dapat Digunakan Untuk Transaksi Semua Produk Terlengkap Dari Kami.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bi bi-cart4"></i></div>
              <h4 class="title"><a href="#">Melakukan Transaksi</a></h4>
              <p class="description">Langkah Terakhir Melakukan Transaksi Anda Dengan Produk Terlengkap Dan Termurah Dari Kami.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2></h2>
          <p>Fitur Market Junadi</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="bi bi-speedometer" style="color: #ffbb2c;"></i>
              <h3><a href="">Layanan Terbaik</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-megaphone-fill" style="color: #5578ff;"></i>
              <h3><a href="">Pelayanan Bantuan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="bi bi-file-richtext" style="color: #e80368;"></i>
              <h3><a href="">Desain Web Responsipe</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-credit-card-2-front" style="color: #e361ff;"></i>
              <h3><a href="">Deposit Saldo</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="bi bi-grid-1x2-fill" style="color: #47aeff;"></i>
              <h3><a href="">Kemudahan Pengguna</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="bi bi-shield-fill-check" style="color: #e80368;"></i>
              <h3><a href="">Data Terjamin Aman</a></h3>
            </div>
          </div>


          
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pengguna</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pesanan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="3000000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Deposit Saldo</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Layanan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Member</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  marketjunadi.my.id Mantap, Pesanan Nya Di Proses Sangat Cepat Dan Layanan Nya Murah Meriah.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>member</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MARKETJUNADI.MY.ID Terbaik, Pelayanan Nya Fast Respon.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>member</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MARKETJUNADI.MY.ID Harga Sangat Terjangkau Dan Produk Layanan Lengkap.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>member</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MARKETJUNADI.MY.ID Bagus Untuk Reseller Harganya murah murah dan cepat.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/junjun.jpg"  class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Junjun Junaedi</h4>
                <h6>CEO & FOUNDER</h6>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/junadi_id/"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/andi.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Andi Solihin</h4>
                <span>Admin</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/nurul.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nurul Islam</h4>
                <span>Admin</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">-->
          <!--  <div class="member" data-aos="zoom-in" data-aos-delay="400">-->
          <!--    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>-->
          <!--    <div class="member-info">-->
          <!--      <h4>Amanda Jepson</h4>-->
          <!--      <span>Accountant</span>-->
          <!--      <div class="social">-->
          <!--        <a href=""><i class="bi bi-twitter"></i></a>-->
          <!--        <a href=""><i class="bi bi-facebook"></i></a>-->
          <!--        <a href=""><i class="bi bi-instagram"></i></a>-->
          <!--        <a href=""><i class="bi bi-linkedin"></i></a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Pertanyaan yang Sering Diajukan</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah Ini Aman? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Hanya perlu username tanpa password jadi aman ya.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Followers HIGH QUALITY? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Ya, followers Real Aktif >95% INDONESIA ✅ & Follower Random.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Akun apa saja yg tidak boleh? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Semua akun yg tidak sesuai dengan aturan hukum & agama ❌
                  ex : penipuan, hoax, judi, porn, dll.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Kapan diproses? Berapa lama? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sesuai urutan order, waktu tunggu/antre + proses total ± 1-2 minggu proses bertahap krn real followers & agar akun IG tetap aman.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Permanen? Drop? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Drop bisa tapi hanya SEDIKIT karena real followers ya, biasanya dari bonusnya, nanti akan stabil sendiri,jika tidak capai target ada GARANSI, jadi tetap aman ya 👍
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Ada GARANSI? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Ya, kami berikan GARANSI selama 1 bulan,
                   garansi uang kembali sesuai gain followers, jadi aman banget ya 😍
                   contoh : order 10.000 folls tapi cuma dapat 9.000, kurang 1.000 > untuk garansi dikembalikan dihitung harga 1000 follower.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Info</h2>
          <p>Kontak Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi :</h4>
                <p>Jl. Aminta Amalia Gng Nuri Sukabumi</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email :</h4>
                <p>admin@marketjunadi.my.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telpon :</h4>
                <p>0857 2217 6451</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kamu" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Tunggu</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="">
    <footer class="text-center text-white" style="background-color: #057685;">

      <div class="container p-4 pb-0">

        <section class="">
          <h4 class="d-flex justify-content-center align-items-center">
            <span class="me-3">Daftar gratis</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Daftar!
            </button>
          </h4>
        </section>
  
      </div>

  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgb(0, 0, 139);">
        <a class="text-white" href="https://www.marketjunadi.my.id/"><h5>Copyright © 2021 MARKETJUNADI. All Rights Reserved.</h5></a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php } ?>