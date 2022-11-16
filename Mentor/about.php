<?php
  $koneksi = mysqli_connect("localhost","root","","school");
  $query = mysqli_query($koneksi,"SELECT * FROM guru");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMKN 8 BUTON</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/sekolahimg.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">nama sekolah</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a class="active" href="about.html">Detail Sekolah</a></li>
          <li><a href="berita.html">Berita</a></li>
          <li><a href="galeri.html">Galeri</a></li>
          <li><a href="alumni.html">Alumni</a></li>

          <li><a href="contact.html">contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../spada/login.php" class="get-started-btn">Masuk</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
   <!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
</section><!-- End Counts Section -->

    <!-- ======= Counts Section ======= -->

    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          
            <div class="section-title">
              <h2>ALAMAT</h2>
              <h3>SMKN 8 BUTON</h3>
              <p>Jalan Larangka Nomor 04 Desa Sampubalo, Sampuabalo, Kec. Siontapia, Kab. Buton Prov. Sulawesi Tenggara </p>
              <div data-aos="fade-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53709.2300236133!2d123.00627150889235!3d-5.366327863237236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3ffa3a79a4f41%3A0x53f852a50e303b3e!2sKec.%20Siontapina%2C%20Kabupaten%20Buton%2C%20Sulawesi%20Tenggara!5e1!3m2!1sid!2sid!4v1667813946908!5m2!1sid!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
  </div>
</section><!-- End Counts Section -->


<div class="container" data-aos="fade-up">
<div class="dropdown">
  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <!-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content"> -->
            <h2>Nama-Nama Guru</h2>
            <p class="fst-italic">
              Guru SMKN 8 BUTON  
            </p>
            
          <!-- </div> -->
        </div>

      </div>
    </section><!-- End About Section -->
  </button>
 <table border="1" cellpadding="10" class="dropdown-menu p-4 table table-striped-columns">
              <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Jabatan</th>
                  </tr>
              </thead>
              <tbody class="table-group-divider">
              <?php
              $b = mysqli_num_rows($query);
                for ($i = 0; $i < $b; $i++){
                  $a = mysqli_fetch_assoc($query);
                  ?>
                    <tr>
                      <td><?= $a["nama_guru"]?></td>
                      <td><?= $a["nip"]?></td>
                      <td><?= $a["jabatan"]?></td>
                  </tr>
                  </tbody>

                  <?php
                }

              ?>
          </table>
</div>
</div>



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div>
          <h2 style="font-family: inter;">Jadwal pembelajarn</h2>
          <table border="1">
            <tr>
                <th rowspan="2" bgcolor="yellow">HAri</th>
                <th colspan="2" bgcolor="#00ff80">jadwal</th>
            </tr>
            <tr>
                <th>mtk</th>
                <th>bhd</th>
            </tr>
            <tr>
                <td>senin</td>
                <td>bkk</td>
                <td>231 Kg</td>
            </tr>
            <tr>
                <td>Februari</td>
                <td>342 </td>
                <td>423 </td>
            </tr>
            <tr>
                <td>Maret</td>
                <td>432 </td>
                <td>124 </td>
            </tr>
            <tr>
                <td>April</td>
                <td>453</td>
                <td>ss</td>
            </tr>
        </table>
        </div>
        

      </div>
    </section><!-- End Counts Section -->

    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SMKN 8 BUTON</h3>
            <p>
              Buton <br>
              buron jsdjs<br>
              indonesia <br><br>
              <strong>Phone:</strong> 039434830932<br>
              <strong>Email:</strong> smkn8buton@gmail.com<br>
            </p>
          </div>

        </div>
      </div>
    </div>

  <!-- <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script> -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script> -->

</body>

</html>