<?php
//  $tanggal = date('l, d-m-Y  h:i:s a');
function getHari($date)
{

    $datetime = DateTime::createFromFormat('Y-m-d', $date);
    $day = $datetime->format('l');

    switch ($day) {
        case 'Sunday':
            $hari = 'Minggu';
            break;
        case 'Monday':
            $hari = 'Senin';
            break;
        case 'Tuesday':
            $hari = 'Selasa';
            break;
        case 'Wednesday':
            $hari = 'Rabu';
            break;
        case 'Thursday':
            $hari = 'Kamis';
            break;
        case 'Friday':
            // $hari = 'Jum\'at';
            $hari = 'Jumat';
            break;
        case 'Saturday':
            $hari = 'Sabtu';
            break;
        default:
            $hari = 'Tidak ada';
            break;
    }
    return $hari;
}
$tanggalku = date('Y-m-d');
// $date = null ;
// echo getHari($date);
$hariku = getHari($tanggalku);

$tanggal = date(' d-m-Y');
$jam = date('H:i');

?>

<section id="admin" class="pt-5 text-center">
    <div class="container pt-5">
        <div class="">
            <div class="pt-5">
                <h3 class="fw-bold text-warning">Naget, Bakso, Tempe & Lainnya</h3>
                <hr>
                <div class="card py-2 mb-3">
                    <?php
                    $row = mysqli_query($conn, "SELECT * From tanggal where kategori='nagetbakso'");
                    $row_array = mysqli_fetch_array($row);
                    ?>
                    <p class="h6">Last Update <?= $row_array['tgl']; ?></p>
                </div>
                <!-- <h5>Jam <?= $jam ?></h5> -->
            </div>
        </div>
    </div>
</section>

<section id="Produk" class="">
    <div class="container" data-aos="fade">
        <div>
            <form method="POST" class="needs-validation" novalidate style="font-size: larger;">
                <div class="row">
                    <?php
                    $row = mysqli_query($conn, "SELECT * From nagetbakso order by stok DESC, tipe");
                    $img = 1;
                    foreach ($row as $row_array) {
                    ?>
                        <!-- <div class="col-12 col-md-4 mb-3"> -->
                        <div class="col-md-4 mb-3">
                            <div class="row">
                                <div class="col-3 card">
                                    <img src="./img/produk/nagetbakso/<?= $row_array['id'] ?>.jpg" class="card-img-top" alt="..." width="auto">
                                    <!-- <ul class="list-group list-group-flush fw-bold"> -->
                                    <ul class="list-group list-group-flush fw-bold text-center text-uppercase">
                                        <?php
                                        if ($row_array['stok'] == 0) { ?>
                                            <li class="list-group-item text-danger"><button disabled class="btn btn-danger w-100"></button></li>
                                        <?php } else if ($row_array['stok'] == 1) { ?>
                                            <li class="list-group-item text-warning"><button disabled class="btn btn-warning w-100"></button></li>
                                        <?php } else if ($row_array['stok'] == 2) { ?>
                                            <li class="list-group-item text-success"><button disabled class="btn btn-success w-100"></button></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-9 col-form-label pt-4">
                                    <h6><?= $row_array['nama'] ?></h6>
                                    <div class="list-inline-item">
                                        <input <?php if ($row_array['stok'] == 2) {
                                                    echo "checked";
                                                } ?> class="form-check-input" type="radio" name="ce<?= $row_array['id'] ?>" id="ce2<?= $row_array['id'] ?>">
                                        <label for="ce2<?= $row_array['id'] ?>" class="h6 form-label fw-bold text-uppercase text-success">Ada</label>
                                    </div>
                                    <div class="list-inline-item">
                                        <input <?php if ($row_array['stok'] == 1) {
                                                    echo "checked";
                                                } ?> class="form-check-input" type="radio" name="ce<?= $row_array['id'] ?>" id="ce1<?= $row_array['id'] ?>">
                                        <label for="ce1<?= $row_array['id'] ?>" class="h6 form-label fw-bold text-uppercase text-warning">Sedikit</label>
                                    </div>
                                    <div class="list-inline-item">
                                        <input <?php if ($row_array['stok'] == 0) {
                                                    echo "checked";
                                                } ?> class="form-check-input" type="radio" name="ce<?= $row_array['id'] ?>" id="ce0<?= $row_array['id'] ?>">
                                        <label for="ce0<?= $row_array['id'] ?>" class="h6 form-label fw-bold text-uppercase text-danger">habis</label>
                                    </div>
                                    <input hidden type="text" name="ambil<?= $row_array['id'] ?>" id="ambil<?= $row_array['id'] ?>" value="<?= $row_array['stok'] ?>" class="form-control">
                                </div>
                            </div>
                            <hr>
                        </div>
                    <?php $img++;
                    } ?>
                </div>
                <button hidden id="simpan" class="w-100 btn btn-danger btn-md text-uppercase fw-bold savebro" name="submit" type="submit">Simpan</button>
            </form>
</section>
<!-- buttonbawah -->
<button onclick="ayo()" id="primaryButton" class="p-2 w-100 btn btn-success btn-md text-uppercase fw-bold fixed-bottom">Simpan</button>
<script>
    function ayo() {
        document.getElementById('simpan').click();
    }
</script>

<?php


if (isset($_POST['submit'])) {
    $row = mysqli_query($conn, "SELECT * from nagetbakso");
    foreach ($row as $row_array) {
        $idku = $row_array['id'];
        // $stok = $_POST['stok'];
        $ambil = $_POST["ambil" . "$row_array[id]"];
        // $ambil = $_POST["ambil$row_array[id]"];
        mysqli_query($conn, "UPDATE nagetbakso set stok='$ambil' where id='$idku'");
    }
    $kategori = "nagetbakso";
    $tanggal = $hariku . $tanggal . " " . $jam;
    mysqli_query($conn, "UPDATE tanggal set tgl='$tanggal' where kategori='$kategori'");
    usleep(500000);
    usleep(500000);
    $msg = 'Berhasil Di Update Guys..';
    // echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = 'admin.php?mi=nagetbakso'</script>";
    // echo "<script>window.location = '?mi=data_absen'</script>";
    // echo "<script>window.location.reload()</script>";
    // echo "<script>history.back(1);</script>";
}
?>

<script src="./js/jquery/jquery.min.js"></script>
<!-- <script src="./jquery/jquery.min.js"></script> -->
<script>
    <?php
    $row = mysqli_query($conn, "SELECT * From nagetbakso");
    foreach ($row as $row_array) {
    ?>
        $('#ce0<?= $row_array['id'] ?>').on('change', function() {
            var selectedPackage = $('#ce0<?= $row_array['id'] ?>').is(':checked');
            if ($('#ce0<?= $row_array['id'] ?>').is(':checked')) {
                $("#ambil<?= $row_array['id'] ?>").val('0');
            }
        })

        $('#ce1<?= $row_array['id'] ?>').on('change', function() {
            var selectedPackage = $('#ce1<?= $row_array['id'] ?>').is(':checked');
            if ($('#ce1<?= $row_array['id'] ?>').is(':checked')) {
                $("#ambil<?= $row_array['id'] ?>").val('1');
                // $(".bt-dua").removeClass("d-none");
                // $(".overtime").removeClass("d-none");
                // $("#nip").val("");
            }
        })

        $('#ce2<?= $row_array['id'] ?>').on('change', function() {
            var selectedPackage = $('#ce2<?= $row_array['id'] ?>').is(':checked');
            if ($('#ce2<?= $row_array['id'] ?>').is(':checked')) {
                $("#ambil<?= $row_array['id'] ?>").val('2');
                // $(".bt-dua").removeClass("d-none");
                // $(".overtime").removeClass("d-none");
                // $("#nip").val("");
            }
        })
    <?php } ?>
</script>