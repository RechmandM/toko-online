<?php
session_start();
session_destroy();
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
// mysqli_close($conn);
echo "<script>alert ('Anda Berhasil Logout...');</script>";
echo "<script>location='./login';</script>";
// echo "<script>location.reload()</script>";
