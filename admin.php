<?php
session_start();
error_reporting(0);
include './config/koneksi.php';

//cek cookie
date_default_timezone_set('Asia/Jakarta');
$namaku = $_SESSION['nama'];
if (isset($_SESSION['nama']) && $_SESSION['login'] == true) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Tokomart</title>
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



    <a class="waku" href="https://wa.me/62" target="_blank"><span class="">
            <i class="fa fa-circle fa-stack-2x text-success"></i>
            <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
        </span></a>
    <a hidden class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=628757' rel='nofollow noopener' target='_blank' title='Whatsapp'>

        <body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="200">
            <!-- START NAVIGASI BAR -->
            <!-- <nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-2 py-md-0"> -->
            <nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-white fixed-top py-0 py-md-0 shadow">
                <div class="container">
                    <a href="#" class="navbar-brand fw-bold text-capitalize" style="color: rgba(96, 56, 238, 0.808) ;-webkit-text-stroke: 0.5px rgba(96, 56, 238, 0.808)">
                        <span class="d-none">My</span>
                        <img src="img/logoku.png" alt="logo" class="main-logo d-none d-md-inline w-100">
                        <img src="img/logoku.png" alt="logo" class="small-logo d-inline d-md-none" style="height: 70px;">
                    </a>
                    <button id="kliku" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse hide" id="navbarNav">
                        <ul class="navbar-nav ms-auto fw-bold navbar-nav-scroll">
                            <li class="nav-item" onclick="navku()">
                                <a href="./" class="nav-link p-3 text-danger text-capitalize">Home</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=sayuran" class="nav-link p-3 <?php
                                                                            $dat = $_GET['mi'];
                                                                            if ($dat == "sayuran") {
                                                                                echo "active";
                                                                            } ?> text-success text-capitalize">Sayuran Daun Hijau</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=wortelbuncis" class="nav-link p-3 <?php
                                                                                $dat = $_GET['mi'];
                                                                                if ($dat == "wortelbuncis") {
                                                                                    echo "active";
                                                                                } ?> text-primary text-capitalize">Wortel Buncis</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=cabaibawang" class="nav-link p-3 <?php
                                                                                $dat = $_GET['mi'];
                                                                                if ($dat == "cabaibawang") {
                                                                                    echo "active";
                                                                                } ?> text-danger text-capitalize">Cabai, Bawang & Bumbu</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=nagetbakso" class="nav-link p-3 <?php
                                                                                $dat = $_GET['mi'];
                                                                                if ($dat == "nagetbakso") {
                                                                                    echo "active";
                                                                                } ?> text-warning text-capitalize">Naget Bakso Tempe</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=ayamikan" class="nav-link p-3 <?php
                                                                            $dat = $_GET['mi'];
                                                                            if ($dat == "ayamikan") {
                                                                                echo "active";
                                                                            } ?> text-info text-capitalize">Ayam & Ikan</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=ikanasin" class="nav-link p-3 <?php
                                                                            $dat = $_GET['mi'];
                                                                            if ($dat == "ikanasin") {
                                                                                echo "active";
                                                                            } ?> text-dark text-capitalize">Ikan Asin</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=statusadmin" class="nav-link p-3 <?php
                                                                                $dat = $_GET['mi'];
                                                                                if ($dat == "statusadmin") {
                                                                                    echo "active";
                                                                                } ?> text-secondary text-capitalize">Status Admin</a>
                            </li>
                            <li class="nav-item" onclick="navku()">
                                <a href="?mi=logout" class="nav-link p-3 <?php
                                                                            $dat = $_GET['mi'];
                                                                            if ($dat == "Logout") {
                                                                                echo "active";
                                                                            } ?> text-danger">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main>
                <?php include "./content.php"; ?>

            </main>

            <footer  class="bg-light text-lg-start">
                <!-- Grid container -->
                <div hidden class="container p-4">
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

                        <div class="col-lg-4 col-md-12 mb-4 mb-md-4">
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
                <div class="text-center text-white fw-bold bg-danger mb-3 pb-4">
                    Copyright © 2022<br>
                    <a class="text-white fw-bold text-decoration-none" href="#">TokoMart</a>
                </div>
                <!-- Copyright -->
            </footer>
        </body>

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
        <script>
            AOS.init({
                once: true,
                duration: 500,
            });
        </script>
        <script>
            feather.replace()
        </script>


    </html>

<?php } else {
    // echo "<link href='style.css' rel='stylesheet' type='text/css'> 
    // <center> Untuk mengakses, Anda perlu login..\n"; // ga dipakai gpp hanya di modif
    // // echo "<a href=login.php><b>LOGIN</b></a></center>";
    // include "login.php";
    // echo "<script>location='./login.php'</script>";
    include "login.php";
}
?>

<script src="assets/js/jquery/jquery.min.js"></script>
<!-- <script src="./jquery/jquery.min.js"></script> -->
<script>
    $('#bagi').on('change', function() {
        var selectedPackage = $('#bagi').val();
        if (selectedPackage == '2') {
            $(".bt-satu").removeClass("d-none");
            $(".bt-dua").addClass("d-none");
            // $(".overtime").addClass("d-none");
            // $("#asal").val("");
        }
    })
    $('#bagi').on('change', function() {
        var selectedPackage = $('#bagi').val();
        if (selectedPackage == '1') {
            $(".bt-satu").addClass("d-none");
            $(".bt-dua").removeClass("d-none");
            // $(".overtime").removeClass("d-none");
            // $("#nip").val("");
        }
    })
    $('#grub').on('change', function() {
        var selectedPackage = $('#grub').val();
        if (selectedPackage != '0') {
            $("#cekbagian").removeClass("d-none");
            // $("#nip").val("");
        }
    })
</script>