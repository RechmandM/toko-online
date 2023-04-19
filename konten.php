<?php
if (isset($_GET['produk'])) {
    $page = $_GET['produk'];
    $tam = "cek";
    // bisa pakai variable atau langsung $_GET['mi']
    switch ($page) {
            // case 'login':
            //     include "login.php";
            //     break;
        case 'sayuran':
            include "produk_db/produk-sayuran.php";
            break;
        case 'wortelbuncis':
            include "produk_db/produk-wortelbuncis.php";
            break;
        case 'cabaibawang':
            include "produk_db/produk-cabaibawang.php";
            break;
        case 'nagetbakso':
            include "produk_db/produk-nagetbakso.php";
            break;
        case 'ayamikan':
            include "produk_db/produk-ayamikan.php";
            break;
        case 'ikanasin':
            include "produk_db/produk-ikanasin.php";
            break;
        case 'data_user_edit':
            include "data_user_edit.php";
            break;

        default:
            include "produk_db/produk-sayuran.php";
            break;
    }
} else {
    include "produk_db/produk-sayuran.php";
}
?>

<!-- jika pure php script diatas tnpa tutup boleh
jika ada html diatas / comment diatas bawah tpi pakai tutup
saran tanpa tutup biar aman -->