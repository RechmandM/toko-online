<section id="admin" class="pt-5 text-center">
    <div class="container pt-5">
        <div class="">
            <div class="">
                <h3 class="fw-bold text-success">Status Admin</h3>

                <hr>
            </div>
        </div>
    </div>
</section>

<section id="Produk" class="">
    <div class="container">
        <div class="mb-5">
            <form method="POST" class="needs-validation" novalidate style="font-size: larger;">
                <div class="row">
                    <?php
                    $row = mysqli_query($conn, "SELECT * From user");
                    $img = 1;
                    foreach ($row as $row_array) {
                    ?>
                        <!-- <div class="col-12 col-md-4 mb-3"> -->
                        <div class="col-md-4 mb-3">
                            <div class="row">
                                <div class="col-6 card">
                                    <img src="./img/produk/admin/<?= $img . '.jpg'; ?>" class="card-img-top" alt="..." width="auto">
                                    <h5 class="text-center"><?= $row_array['nama'] ?></h5>
                                    <ul class="list-group list-group-flush fw-bold text-center">
                                        <?php
                                        if ($row_array['status'] == 0) { ?>
                                            <li class="list-group-item text-danger">Offline</li>
                                        <?php } else { ?>
                                            <li class="list-group-item text-success">Online</li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-6 pt-5">
                                    <div>
                                        <input <?php if ($row_array['status'] == 0) {
                                                    echo "checked";
                                                } ?> class="form-check-input" type="radio" name="ce<?= $row_array['id'] ?>" id="ce0<?= $row_array['id'] ?>">
                                        <label for="ce0<?= $row_array['id'] ?>" class="form-label fw-bold text-capitalize text-danger">Offline</label>
                                    </div>
                                    <div>
                                        <input <?php if ($row_array['status'] == 1) {
                                                    echo "checked";
                                                } ?> class="form-check-input" type="radio" name="ce<?= $row_array['id'] ?>" id="ce1<?= $row_array['id'] ?>">
                                        <label for="ce1<?= $row_array['id'] ?>" class="form-label fw-bold text-capitalize text-success">Online</label>
                                    </div>
                                    <input hidden type="text" name="ambil<?= $row_array['id'] ?>" id="ambil<?= $row_array['id'] ?>" value="<?= $row_array['status'] ?>" class="form-control">
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
    $row = mysqli_query($conn, "SELECT * from user");
    foreach ($row as $row_array) {
        $idku = $row_array['id'];
        // $stok = $_POST['stok'];
        $ambil = $_POST["ambil" . "$row_array[id]"];
        // $ambil = $_POST["ambil$row_array[id]"];
        mysqli_query($conn, "UPDATE user set status='$ambil' where id='$idku'");
    }
    usleep(500000);
    $msg = 'Berhasil Di Update Guys..';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = 'admin.php?mi=statusadmin'</script>";
    // echo "<script>window.location = '?mi=data_absen'</script>";
    // echo "<script>window.location.reload(</script>";
    // echo "<script>history.back(1);</script>";
}
?>

<script src="./js/jquery/jquery.min.js"></script>
<!-- <script src="./jquery/jquery.min.js"></script> -->
<script>
    <?php
    $row = mysqli_query($conn, "SELECT * From sayuran");
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

        // $('#ce2<?= $row_array['id'] ?>').on('change', function() {
        //     var selectedPackage = $('#ce2<?= $row_array['id'] ?>').is(':checked');
        //     if ($('#ce2<?= $row_array['id'] ?>').is(':checked')) {
        //         $("#ambil<?= $row_array['id'] ?>").val('2');
        //         // $(".bt-dua").removeClass("d-none");
        //         // $(".overtime").removeClass("d-none");
        //         // $("#nip").val("");
        //     }
        // })
    <?php } ?>
</script>