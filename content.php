<?php
if (isset($_GET['mi'])) {
    $page = $_GET['mi'];
    $tam = "cek";
    // bisa pakai variable atau langsung $_GET['mi']
    switch ($page) {
            // case 'login':
            //     include "login.php";
            //     break;
        case 'sayuran':
            include "produk_db/stok-sayuran.php";
            break;
        case 'wortelbuncis':
            include "produk_db/stok-wortelbuncis.php";
            break;
        case 'cabaibawang':
            include "produk_db/stok-cabaibawang.php";
            break;
        case 'nagetbakso':
            include "produk_db/stok-nagetbakso.php";
            break;
        case 'ayamikan':
            include "produk_db/stok-ayamikan.php";
            break;
        case 'ikanasin':
            include "produk_db/stok-ikanasin.php";
            break;
        case 'statusadmin':
            include "statusadmin.php";
            break;
        case 'logout':
            include "logout.php";
            break;
        case 'data_user_edit':
            include "data_user_edit.php";
            break;

        default:
            include "dashboard.php";
            break;
    }
} else {
    include "dashboard.php";
}
?>

<!-- jika pure php script diatas tnpa tutup boleh
jika ada html diatas / comment diatas bawah tpi pakai tutup
saran tanpa tutup biar aman -->