<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISTEM AKADEMIK MAHASISWA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('p4')}}/assets/img/logo.png" rel="icon">
  <link href="{{asset('p4')}}/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('p4')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('p4')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('p4')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('p4')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('p4')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('p4')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('p4')}}/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.html"><img src="{{asset('p4')}}/assets/img/logo.png" alt="" class="img-fluid"></a><a href="{{asset('p4')}}/index.html">STMIK BANDUNG</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#features">APP FEATURES</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li class="dropdown"><a href="#management"><span>ACADEMIC MANAGEMENT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Semester</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href=/smt1>Semester 1</a></li>
                  <li><a href=/smt2>Semester 2</a></li>
                  <li><a href=/smt3>Semester 3</a></li>
                  <li><a href=/smt4>Semester 4</a></li>
                  <li><a href=/smt5>Semester 5</a></li>
                  <li><a href=/smt6>Semester 6</a></li>
                  <li><a href=/smt7>Semester 7</a></li>
                  <li><a href=/smt8>Semester 8</a></li>
                </ul>
              </li>
              <li class="dropdown">
              <a href="#"><span>Jurusan</span></a>
              <ul>
                  <li><a href="#">Teknik Informatika</a></li>
                  <li><a href="#">Sistem Informasi</a></li>
              </ul>
          </li>


              <li><a href="#">Dosen Pengampu</a></li>
              <li><a href="#">Jadwal Perkuliahan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
          <li><a class="getstarted scrollto" href="/login">LOG IN</a></li>
          <li><a class="getstarted scrollto" href="/register">SIGN UP</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>SISTEM AKADEMIK MAHASISWA</h1>
            <h2>Sistem akademik mahasiswa adalah sebuah sistem yang dirancang untuk mengelola berbagai aspek akademik dalam suatu institusi pendidikan tinggi, seperti universitas atau perguruan tinggi. Sistem ini mencakup berbagai modul dan fungsi yang berkaitan dengan aktivitas akademik mahasiswa, mulai dari pendaftaran mata kuliah hingga pelaporan hasil studi.</h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{asset('p4')}}/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Fitur Aplikasi</h2>
          <p>Selamat datang di aplikasi kami yang menyediakan berbagai fitur penting untuk mendukung pengelolaan akademik yang efisien dan transparan. Di dalam aplikasi ini, Anda akan menemukan beragam fitur yang dirancang untuk memenuhi kebutuhan perwalian dan manajemen akademik Anda.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Autentikasi dan Otorisasi</h4>
                  <p>Fitur ini memastikan keamanan aplikasi dengan memerlukan pengguna untuk melakukan login dan memberikan akses sesuai dengan peran mereka.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Pendaftaran dan Pengaturan Mata Kuliah</h4>
                  <p>Fitur ini memungkinkan mahasiswa untuk mendaftarkan mata kuliah yang ingin mereka ambil dan mengatur jadwal perkuliahan mereka.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Pemilihan Mata Kuliah</h4>
                  <p>Fitur ini memberikan akses ke informasi lengkap tentang setiap mata kuliah yang tersedia di program studi mahasiswa.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Konfirmasi Perwalian</h4>
                  <p>Fitur ini memberikan pembaruan status perwalian dan memastikan bahwa proses perwalian berjalan dengan lancar.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>Pemantauan Akademik</h4>
                  <p>Fitur ini memungkinkan mahasiswa untuk melacak kemajuan akademik mereka dan mengakses transkrip akademik.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>Pengumuman dan Notifikasi</h4>
                  <p>Fitur ini memberikan informasi penting kepada mahasiswa melalui pengumuman dan notifikasi yang disesuaikan.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('p4')}}/assets/img/features.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
  <div class="container">

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <img src="{{asset('p4')}}/assets/img/details-4.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
      <h3>Notifikasi dan Pengingat</h3><!--no 4-->
          <p class="fst-italic">
            Sistem akademik mahasiswa menyediakan fitur notifikasi dan pengingat untuk membantu mahasiswa dalam mengelola aktivitas akademik mereka dengan lebih mudah dan tepat waktu.
          </p>
          <p>
            Membantu mahasiswa dalam mengetahui perkembangan akademik mereka, memastikan mahasiswa tidak terlambat mengikuti kegiatan akademik penting, dan membantu mahasiswa dalam menyelesaikan proses akademik dengan tepat waktu.
          </p>
          <ul>
            <li><strong><i>Notifikasi Pendaftaran Mata Kuliah </i></strong>Mahasiswa akan menerima notifikasi ketika masa pendaftaran mata kuliah dibuka.</li>
            <li><strong><i>Notifikasi Jadwal Kuliah </i></strong>Mahasiswa akan menerima notifikasi berisi jadwal kuliah mereka.</li>
            <li><strong><i>Notifikasi Hasil Ujian </i></strong>Mahasiswa akan menerima notifikasi berisi hasil ujian mereka.</li>
            <li><strong><i>Notifikasi Pengesahan KRS </i></strong>Mahasiswa akan menerima pengingat ketika KRS mereka belum disahkan.</li>
          </ul>
      </div>
    </div>

  </div>
</section><!-- End Details Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

  <div class="section-title">
      <h2>Frequently Asked Questions</h2>
      <p>Di bawah ini adalah beberapa pertanyaan yang sering diajukan mengenai sistem akademik mahasiswa. Jika Anda memiliki pertanyaan lain, jangan ragu untuk menghubungi kami.</p>
</div>

<div class="accordion-list">
  <ul>
    <li data-aos="fade-up">
      <i class="bx bx-help-circle icon-help"></i> 
      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Bagaimana cara mendaftar untuk perwalian? 
        <i class="bx bx-chevron-down icon-show"></i>
        <i class="bx bx-chevron-up icon-close"></i>
      </a>
      <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
        <p>
          Mahasiswa dapat mendaftar untuk perwalian melalui sistem web dengan mengikuti langkah-langkah yang tertera pada panduan pendaftaran perwalian.
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="100">
      <i class="bx bx-help-circle icon-help"></i> 
      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Bagaimana cara melihat mata kuliah? 
        <i class="bx bx-chevron-down icon-show"></i>
        <i class="bx bx-chevron-up icon-close"></i>
      </a>
      <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
        <p>
          Mahasiswa dapat melihat mata kuliah melalui sistem akademik dengan mengakses menu "semester" dan mengikuti langkah-langkah yang tersedia.
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="200">
      <i class="bx bx-help-circle icon-help"></i> 
      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Bagaimana cara mengetahui jadwal perkuliahan? 
        <i class="bx bx-chevron-down icon-show"></i>
        <i class="bx bx-chevron-up icon-close"></i>
      </a>
      <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
        <p>
          Jadwal perkuliahan dapat dilihat pada sistem akademik di menu "Jadwal Perkuliahan".
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="300">
      <i class="bx bx-help-circle icon-help"></i> 
      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Bagaimana cara menghubungi DPA? 
        <i class="bx bx-chevron-down icon-show"></i>
        <i class="bx bx-chevron-up icon-close"></i>
      </a>
      <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
        <p>
          Mahasiswa dapat menghubungi DPA melalui kontak yang tersedia di profil DPA pada sistem akademik.
        </p>
      </div>
    </li>
  </ul>
</div>

          </div>
        </li>
      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
    </div>

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>
              Jl. Cikutra No.113, Cikutra<br>
              Kec. Cibeunying Kidul, Kota Bandung, Jawa barat<br>
              Indonesia - 40124<br><br></p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@stmikbandung.ac.id</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+62 22 1234567</p>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63329.702039241516!2d107.5919446!3d-6.9174639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63753e5b67d%3A0x3030bfbcaf770c0!2sBandung%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1623826955741!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>STMIK Bandung</h3>
            <p>
              Jl. Cikutra No.113, Cikutra<br>
              Kec. Cibeunying Kidul, Kota Bandung, Jawa barat<br>
              Indonesia - 40124<br><br>
              <strong>Phone:</strong> +022-7207777<br>
              <strong>Email:</strong> info@stmik-bandung.ac.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">HOME</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">APP FEATURES</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">F.A.Q</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#management">ACADEMIC MANAGEMENT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">CONTACT</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Social Media</h4>
            <p></p>
            <div class="social-links mt-3">
              <a href="https://www.youtube.com/channel/UCquRaRrD-VR2sWhHNHDLV5g" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://id-id.facebook.com/BandungSTMIK" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/stmikbandung/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://id.linkedin.com/company/stmik-bandung" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Agista Valomita</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('p4')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('p4')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('p4')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('p4')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('p4')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('p4')}}/assets/js/main.js"></script>

</body>

</html>