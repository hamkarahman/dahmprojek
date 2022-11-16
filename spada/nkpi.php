<?php
  $koneksi = mysqli_connect("localhost","root","","school");
  $query = mysqli_query($koneksi,"SELECT * FROM matpel");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NkPI</title>
     <!-- Favicons -->
     <link href="assets/img/sekolahimg.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="assets/css/style.css" rel="stylesheet">

     <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
        <!-- <img class="img1" src="" alt=""> -->
        <h1 class="logo me-auto">
            SMKN 8 BUTON</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a class="active" href="about.html">Kelas x</a></li>
                <li><a href="pengumuman.php" >Pengumuman</a></li>

                    <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Akun</span> <i class="bi bi-chevron-right"></i></a>
                                <li class="dropdown"><a href="#"><span>petunjuk</span> <i class="bi bi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </li>
                    </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        
        </div>
        </main><!-- End #main -->
  </header><!-- End Header -->

 <!-- ======= Counts Section ======= -->
 <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          
            <div class="section-title">
              
            </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    <br><br>
    <div class="container">
        <button>
          <a href="index.php">NKIP KElAS X</a> 
        </button>
    </div>
    <br>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
    <?php
    $b = mysqli_num_rows($query);
    for($i = 0; $i < $b; $i++){
         $a = mysqli_fetch_assoc($query);
        ?>
                <div class="container" >
                    <div class="row" >
                            <div class="icon-box">
                                 <h3>
                                    <a href="bhsinggris.php">
                                    <?= $a['nama_matpel'];?>
                                    </a>
                                </h3>

                            </div>
                        </div>
                        <br>
                    </div>

                </div>
                                    <?php
                           
                                }
                                ?>
    </section><!-- End Features Section -->

  </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>