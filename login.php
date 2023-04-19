<?php
// error_reporting(0); // menghilangkan errorketika live
// session_start();
include_once './config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { //post menjalankan server
    // $nik = $conn->quote($_POST['nik']);
    // $password = $conn->quote($_POST['passw']);
    // $u = $conn->quote($_POST['nik']);
    $nik = $_POST['nik'];
    $password = $_POST['passw'];
    $result = mysqli_query($conn, "SELECT * from user where nama = '$nik' and password = '$password'");
    $user_data = mysqli_fetch_array($result);
    $no_rows = mysqli_num_rows($result); // menghitung jumlah query
    $conn = null; // tutupkoneksi biar aman 

    // $result = mysqli_query($conn, "SELECT * from user where id = '$nik'");
    // $result2 = mysqli_query($conn, "SELECT * from user where pw = '$password'");
    // $user_data = mysqli_fetch_array($result);
    // $no_rows = mysqli_num_rows($result); // menghitung jumlah query
    // $no_rows2 = mysqli_num_rows($result2); // menghitung jumlah query
    $conn = null; // tutupkoneksi biar aman 
    // var_dump($username);
    // var_dump($password);
    // die();
    // true/benar == 1 DAN false/salah == 0

    // caa kedua
    //// cek cookies
    // if (isset($_COOKIE['login'])){
    //     if ($_COOKIE['login']== true){
    //         $_SESSION['login'] = true;
    //     }
    // }


    if (strpbrk($nik, "'")) {
        $msg = 'AYO mau iseng ya wkwkwwkwk';
        echo "  <script type='text/javascript'>
                    alert('$msg');
                </script>"; // reload ke login
    } else {
        // echo "Sukses";

        if ($no_rows == 1) {
            // $_SESSION['Password'] = $user_data['password']; // Tanpa password BIAR AMAN...
            $_SESSION['login'] = true;
            // $_SESSION['us'] = $user_data['us'];
            $_SESSION['nama'] = $user_data['nama']; // Tidak harus pakai gpp
            // $_SESSION['lv'] = $user_data['lv']; // Tidak harus pakai gpp
            // $_SESSION['grub'] = $user_data['grub']; // Tidak harus pakai gpp
            // header('location:index.php');
            // echo "<script>location.reload()</script>";

            // cek ingatkan aku
            // if (isset($_POST['ingatkan'])) {
            //     // setcookie('access', 'true', time() + (5* 8));
            //     setcookie('access', 'true', time() + (86400 * 30));
            //     $_COOKIE['access'];
            // }
            if (isset($_POST['ingatkan'])) {
                // setcookie('access', 'true', time() + (5* 8));
                setcookie('id', $user_data['nama'], time() + 60);
                setcookie('key', hash('sha256', $user_data['nama'], time() + 60));
            }

            echo "<script>location='./admin.php'</script>";
        } else {
            // $msg = 'NIK/Password Salah...';
            // echo "<script type='text/javascript'>alert('$msg');</script>"; // reload ke login
            // echo "error";
            $info = "Username / Password Salah";
        }
    }
}
// $info = "Username / Password Salah";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="img/logobaru.png" type="image/png">
    <title>Panel By Rechmand M</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/sign-in/signin.css" rel="stylesheet">
</head>
<!-- <body class="text-center" style="background-image: url('https://images.bisnis-cdn.com/posts/2020/06/14/1252464/mkpi-pim-1.jpg');"> -->

<!-- <body class="" style="background-image: url('./assets/img/kota.jpg'); background-repeat: repeat; background-size:auto;"> -->

<body class="" style="background-image: url('./img/image1.jpg'); background-size:auto;">
    <main class="form-signin py-5">
        <div class="container py-5">
            <!-- <div class="col-md-6 py-2">
                <div class="float-end py-5 bg-transparent">
                    <img style="margin-top: -70px; margin-bottom: -40px;" class="d-block mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300">
                    <img class="mb-4" src="./assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                </div>
            </div> -->
            <div class="px-2">
                <form action="" method="POST" class="col-12 col-md-5">
                    <div class="card p-4 border-2 shadow shadow-lg">
                        <!-- <h1 style="background-color: rgba(0, 0, 0, 0.2);" class="h4 mb-3 fw-bold text-capitalize text-center text-primary shadow p-3">PT. Gajah Tunggal tbk</h1> -->
                        <img src="./img/logoku.png" alt="img" class="w-100 mx-auto">
                        <h1 class="h5 mb-3 fw-bold text-capitalize text-center">Silahkan Masuk</h1>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control bg-transparent" id="nik" name="nik" placeholder="Username">
                            <label id="lab" for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control bg-transparent" id="password" name="passw" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <h5 <?php if ($info != null) {
                                    echo "no";
                                } ?>hidden class="text-center fw-bold text-danger mt-3"><?= $info ?></h5>
                        </div>

                        <div class="checkbox mb-3 text-start">
                            <label readonly>
                                <input checked type="checkbox" name="ingatkan" value="remember-me"> Ingatkan Aku
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">LOGIN</button>
                        <!-- <p class="mb-3 fw-bold text-center">PT Gajah Tunggal &copy; 2022</p> -->
                        <p class="mb-3 fw-bold text-center text-muted">Jika Lupa Password Hubungi Master</p>
                        <!-- <button class="w-100 btn btn-md btn-success">HOME</button> -->
                        <a class="w-100 btn btn-md btn-success" href="./">HOME</a>
                    </div>
                </form>
            </div>
        </div>
    </main>



</body>

</html>