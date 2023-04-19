<?php
session_start();
error_reporting(0);
include './config/koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$namaku = $_SESSION['nama'];
// if (isset($_SESSION['id']) && $_SESSION['login'] == true) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TokoMart | Pusat Belanja & Kebutuhan Harian</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="icon" href="img/logobaru.png" type="image/png">
</head>

<!-- disavesementara yg bawah ini -->
<script>
  function hidenav() {
    document.getElementById("navbarNav").className = "navbar-collapse collapse hide";
    // document.getElementById("kliku").className = "navbar-toggler collapsed";
  }
</script>

<?php
$row = mysqli_query($conn, "SELECT * From user");
$no = 1;
foreach ($row as $row_array) {
  if ($row_array['id'] == 1) {
    $status1 = $row_array['status'];
  } else if ($row_array['id'] == 2) {
    $status2 = $row_array['status'];
  } else {
    $status3 = $row_array['status'];
  }
}
?>
<nav id="whatsappku">
  <a class="waku" href="https://wa.me/6282113637521" target="_blank"><span class="">
      <i class="fa fa-circle fa-stack-2x text-success"></i>
      <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
    </span></a>
  <a <?php if ($status1 == 0) {
        echo "hidden";
      } ?> class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=6282113637521' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status1 == 1) {
        echo "hidden";
      } ?> class='adminoff text-decoration-none' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status1 == 1) {
        echo "hidden";
      } ?> class='adminoff2 text-decoration-none text-danger text-center fw-bold' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status1 == 0) {
        echo "hidden";
      } ?> class='adminon text-decoration-none text-success text-center fw-bold' href='https://api.whatsapp.com/send?phone=6282113637521' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>

  <a class="waku" href="https://wa.me/6282243958335" target="_blank"><span class="">
      <i class="fa fa-circle fa-stack-2x text-success"></i>
      <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
    </span></a>
  <!-- <a class='fixed-whatsapp2' href='https://api.whatsapp.com/send?phone=6282243958335' rel='nofollow noopener' target='_blank' title='Whatsapp'> -->
  <a <?php if ($status2 == 0) {
        echo "hidden";
      } ?> class='fixed-whatsapp2' href='https://api.whatsapp.com/send?phone=6282243958335' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status2 == 1) {
        echo "hidden";
      } ?> class='stafoff text-decoration-none' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status2 == 1) {
        echo "hidden";
      } ?> class='stafoff2 text-decoration-none text-danger text-center fw-bold' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status2 == 0) {
        echo "hidden";
      } ?>class='stafon text-decoration-none text-success text-center fw-bold' href='https://api.whatsapp.com/send?phone=6282243958335' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>

  <a class="waku" href="https://wa.me/6282113637580" target="_blank"><span class="">
      <i class="fa fa-circle fa-stack-2x text-success"></i>
      <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
    </span></a>
  <a <?php if ($status3 == 0) {
        echo "hidden";
      } ?> class='fixed-whatsapp3' href='https://api.whatsapp.com/send?phone=6282113637580' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status3 == 1) {
        echo "hidden";
      } ?> class='clientoff text-decoration-none' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status3 == 1) {
        echo "hidden";
      } ?> class='clientoff2 text-decoration-none text-danger text-center fw-bold' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a <?php if ($status3 == 0) {
        echo "hidden";
      } ?>class='clienton text-decoration-none text-success text-center fw-bold' href='https://api.whatsapp.com/send?phone=6282113637580' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
</nav>

<nav hidden id="whatsappku2">
  <a class="waku" href="https://wa.me/6282113637580" target="_blank"><span class="">
      <i class="fa fa-circle fa-stack-2x text-success"></i>
      <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
    </span></a>
  <a  class='fixed-whatsapp4' href='https://api.whatsapp.com/send?phone=6282113637580' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a  class='tiga text-decoration-none' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a  class='tiganama text-decoration-none text-primary text-center fw-bold' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a  class='tiga2 text-decoration-none text-danger text-center fw-bold' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
  <a  class='tigaon text-decoration-none text-success text-center fw-bold' href='https://api.whatsapp.com/send?phone=6282113637580' rel='nofollow noopener' target='_blank' title='Whatsapp'>
  </a>
</nav>



<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="200" class="">
  <!-- START NAVIGASI BAR -->
  <!-- <nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-2 py-md-0"> -->
  <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white fixed-top py-0 py-md-0 shadow">
    <div class="container">
      <div class="mx-auto">
        <a href="#" class="navbar-brand fw-bold text-capitalize" style="color: rgba(96, 56, 238, 0.808) ;-webkit-text-stroke: 0.5px rgba(96, 56, 238, 0.808)">
          <span class="d-none">My</span>
          <img src="img/logoku.png" alt="logo" class="main-logo d-none d-md-inline w-75">
          <img src="img/logoku.png" alt="logo" class="small-logo d-inline d-md-none w-100">
        </a>
      </div>
    </div>
    <!-- <button id="kliku" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button> -->
    <!-- menu awal -->
    <!-- <div class="collapse navbar-collapse hide" id="navbarNav">
          <ul class="navbar-nav ms-auto fw-bold">
            <li class="nav-item" onclick="navku()">
              <a href="#showcase" class="nav-link p-3">Home</a>
            </li>
            <li class="nav-item" onclick="navku()">
              <a href="#menu" class="nav-link p-3">Menu</a>
            </li>
            <li class="nav-item" onclick="navku()">
              <a href="#services" class="nav-link p-3">Services</a>
            </li>
            <li class="nav-item" onclick="navku()">
              <a href="#reviews" class="nav-link p-3">Reviews</a>
            </li>
          </ul>
        </div> -->

    <!-- menu -->
    <!-- <div class="container pt-3"> -->

    <div class="container">
      <!-- <div class=" col-1">
                                <span data-feather="chevron-left"></span>
                              </div> -->
      <!-- <div class="pt-2 table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                                <table class="table table-bordered table-hover table-striped table-md w-100" style="width:auto"> -->
      <div class="pt-2 table-size table-scroll table-responsive" style="overflow-x: auto">
        <table class="table table-hover table-striped table-md w-75" style="width:auto">
          <!-- <thead style="background-color: rgba(0, 0, 0, 0.2);"> -->
          <thead>
            <tr>
              <th scope="col" rowspan="3" class="text-nowrap link-success h5"><a href="?produk=sayuran" class="text-success text-decoration-none"><button class="btn btn-outline-success fw-bold text-uppercase">Sayuran Daun Hijau</button></a></th>
              <th scope="col" rowspan="3" class="text-nowrap link-info h5"><a href="?produk=wortelbuncis" class="text-info text-decoration-none"><button class="btn btn-outline-primary fw-bold text-uppercase">Wortel, Buncis & Lainnya</button></a></th>
              <th scope="col" rowspan="3" class="text-nowrap link-danger h5"><a href="?produk=cabaibawang" class="text-danger text-decoration-none"><button class="btn btn-outline-danger fw-bold text-uppercase">Cabai, Bawang & Bumbu</button></a></th>
              <th scope="col" rowspan="3" class="text-nowrap link-warning h5"><a href="?produk=nagetbakso" class="text-warning text-decoration-none"><button class="btn btn-outline-warning fw-bold text-uppercase">Naget, Bakso, Tempe & Lainnya</button></a></th>
              <th scope="col" rowspan="3" class="text-nowrap link-primary h5"><a href="?produk=ayamikan" class="text-primary text-decoration-none"><button class="btn btn-outline-info fw-bold text-uppercase">Ayam & Ikan</button></a></th>
              <th scope="col" rowspan="3" class="text-nowrap link-dark h5"><a href="?produk=ikanasin" class="text-dark text-decoration-none"><button class="btn btn-outline-dark fw-bold text-uppercase">Ikan Asin</button></a></th>
            </tr>
          </thead>
        </table>
        <hr>
      </div>
    </div>
    <div <?php if ($namaku != null) {
            echo "show";
          } ?>hidden class="container mb-2 row">
      <a href="./login"><button class="btn btn-primary text-center w-100 text-white">Masuk Ke Panel</button></a>
    </div>
    
  </nav>
  
  <!-- versi  scroll -->
  <!-- versi  scroll -->
  <style>
    #navbarku {
      /* background-color: #333; */
      /* position: fixed; */
      top: 0;
      width: 100%;
      display: block;
      transition: top 0.3s;
    }

    #navbarbawah {
      /* background-color: #333; */
      /* position: fixed; */
      top: 0;
      width: 100%;
      display: block;
      transition: top 0.3s;
    }

    #navbar {
      overflow: hidden;
      background-color: #f1f1f1;
      /* padding: 90px 10px; */
      /* transition: 0.9s; */
      transition: 200ms;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 99;
    }
  </style>
  <script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      scrollFunction()
      scrollFunction2()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("navbar").style.top = "-92px";
      } else {
        document.getElementById("navbar").style.top = "0px";
      }
    }
    /////// navbar bawah
    function scrollFunction2() {
      var whatsappku = document.getElementById("whatsappku");
      var whatsappku2 = document.getElementById("whatsappku2");
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        // document.getElementById("navbarku").style.top = "0px";
        // whatsapp.style.top = "0px";
        whatsappku.style.display = "block";
        whatsappku2.style.display = "block";
        // whatsappku.style.marginTop = "0px"
      } else {
        // whatsappku.style.marginTop = "-50px";
        // whatsapp.style.top = "-2px";
        whatsappku.style.display = "none";
        whatsappku2.style.display = "none";
        // document.getElementById("navbarku").style.top = "-50px";
      }
      prevScrollpos = currentScrollPos;
      // if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      //   whatsapp.style.display = "none";
      // } else {
      //   whatsapp.style.display = "block";
      // }

    }
  </script>
  <!-- <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;

      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbarbawah").style.top = "0";
      } else {
        document.getElementById("navbarbawah").style.top = "-50px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script> -->


  <!-- menuku -->
  <section id="awal" class="pt-5 text-center">
    <div class="pt-5">
      <div class="pt-5">
        <div class="container pt-3">

          <!-- <div class="row">
              <div class="col-1">
                <span data-feather="chevron-left"></span>
              </div>
              <div class="table-size table-scroll table-responsive bg-white col-10" style="overflow-x: auto">
                <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                  <thead>
                    <tr>
                      <th scope="col" rowspan="3" class="text-nowrap link-success h5"><a href="?produk=sayuran" class="text-success text-decoration-none">Sayuran Daun Hijau</a></th>
                      <th scope="col" rowspan="3" class="text-nowrap link-info h5"><a href="?produk=wortelbuncis" class="text-info text-decoration-none">Wortel, Buncis & Lainnya</a></th>
                      <th scope="col" rowspan="3" class="text-nowrap link-danger h5"><a href="?produk=cabaibawang" class="text-danger text-decoration-none">Cabai & Bawang</a></th>
                      <th scope="col" rowspan="3" class="text-nowrap link-warning h5"><a href="?produk=nagetbakso" class="text-warning text-decoration-none">Naget, Bakso, Tempe & Lainnya</a></th>
                      <th scope="col" rowspan="3" class="text-nowrap link-primary h5"><a href="?produk=ayamikan" class="text-primary text-decoration-none">Ayam & Ikan</a></th>
                      <th scope="col" rowspan="3" class="text-nowrap link-dark h5"><a href="?produk=ikanasin" class="text-dark text-decoration-none">Ikan Asin</a></th>
                    </tr>
                  </thead>
                </table>
                <hr>
              </div>
              <div class="col-1">
                <span data-feather="chevron-right"></span>
              </div>
            </div> -->

        </div>
      </div>
  </section>

  <div>
    <?php include "./konten.php"; ?>
  </div>
  <!-- mapku -->
  <!-- <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="500px" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Indomaret%20Gatot%20Subroto%201%20Taangerang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br>
        <br>
        <style>
          .mapouter {
            position: relative;
            text-align: center;
            height: auto;
            width: auto;
          }

          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: auto;
            width: auto;
          }
        </style>
      </div>
    </div> -->
  <!-- END NEWSLATER -->

  <!-- START FOOTER -->
  <footer class="bg-light text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-4">
          <h5 class="text-uppercase">Alamat</h5>
          <li style="list-style:none;" class="nav-item">
            <span data-feather="map-pin"></span>
            <h6 class="list-inline-item">Jl. Gatot Subroto km6, Ds. Gandasari,</h6>
            <h6 class="list-inline-item">Kec. Jatiuwung, Kota Tangerang</h6>
            <br>
            <span data-feather="navigation"></span>
            <h6 class="list-inline-item">Komplek Kontrakan H. Mustofa</h6>
          </li>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-4">
          <h5 class="text-uppercase">Contact Center</h5>
          <li style="list-style:none;" class="nav-item">
            <span data-feather="phone"></span>
            <h6 class="list-inline-item">+62 878 1610 1641</h6>
            <br>
            <span data-feather="mail"></span>
            <h6 class="list-inline-item">0878 1610 1641</h6>
          </li>
        </div>

        <div class="col-lg-4 col-md-12 mb-md-4">
          <h5 class="text-uppercase">buka</h5>
          <li style="list-style:none;" class="nav-item">
            <span data-feather="watch"></span>
            <h6 class="list-inline-item">Mulai Pukul 05.00 Pagi</h6>
            <br>
            <span data-feather="chevrons-right"></span>
            <h6 class="list-inline-item">Sampai Pukul 10.00 Malam</h6>
          </li>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);"> -->
    <div class="text-center text-white fw-bold p-2 bg-success">
      Copyright © 2022<br>
      <a class="text-white fw-bold text-decoration-none" href="#">Created By Rechmand M</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- 
  <footer id="main-footer" class="text-white text-center bg-dark py-5" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-md-start me-auto">
          <h5>PROFILE</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, adipisci!</p>
          <small>&copy; PROFILE 2022</small>
        </div>

        <div class="col-md-4 mt-4 mt-md-0 text-md-start">
          <h5>Hubungi Kami</h5>
          <div>
            <i class="bi-envelope fs-5 me-3"></i>Rechmand@profile.com
          </div>
          <div>
            <i class="bi-phone fs-5 me-3"></i>(021) 123456
          </div>
          <div>
            <i class="bi-globe fs-5 me-3"></i>www.profile.com
          </div>
          <div class="pt-3">
            <a href="#" class="text-white text-decoration-none me-2">
              <i class="bi-facebook fs-5"></i>
            </a>
            <a href="#" class="text-white text-decoration-none me-2">
              <i class="bi-twitch fs-5"></i>
            </a>
            <a href="#" class="text-white text-decoration-none me-2">
              <i class="bi-instagram fs-5"></i>
            </a>
            <a href="#" class="text-white text-decoration-none me-2">
              <i class="bi-whatsapp fs-5"></i>
            </a>
            <a href="#" class="text-white text-decoration-none me-2">
              <i class="bi-github fs-5"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- END FOOTER -->

  <script>
    var i = 0,
      text;
    text = "tokomart"

    function ketik() {
      // timeFunction()
      // setTimeout(900);
      if (i < text.length) {
        document.getElementById("hasilku").innerHTML += text.charAt(i);
        i++;
        setTimeout(ketik, 80);
      }
    }
    setTimeout(function() {
      ketik();
    }, 1100);
  </script>

  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/klik.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script>
    AOS.init({
      once: true,
      duration: 300,
    });
  </script>
  <script>
    feather.replace()
  </script>
</body>

</html>

<script src="./js/jquery/jquery.min.js"></script>