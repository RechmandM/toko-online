<section id="admin" class="text-center">
    <div class="container">
        <div class="pt-5">
            <div class="">
                <h3 class="fw-bold text-warning">Naget, Bakso, Tempe & Lainnya</h3>
                <hr>
                <div class="card py-2 mb-3">
                    <?php
                    $row = mysqli_query($conn, "SELECT * From tanggal where kategori='nagetbakso'");
                    $row_array = mysqli_fetch_array($row);
                    ?>
                    <!-- <p class="h6">Diperbaharui <?= $row_array['tgl']; ?></p> -->
                    <p class="h6">Diperbaharui <?= str_replace("Jumat", "Jum'at", $row_array['tgl']); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Produk" class="text-center">
    <div class="container">
        <div>
            <div class="row">
                <?php
                // $row = mysqli_query($conn, "SELECT * From nagetbakso order by stok DESC, tipe");
                $row = mysqli_query($conn, "SELECT * From nagetbakso where stok between '1' and '2' order by tipe, stok DESC");
                $img = 1;
                foreach ($row as $row_array) {
                ?>
                    <div class="col-6 col-md-3 mb-3" data-aos="fade">
                        <div class="card">
                            <img src="./img/produk/nagetbakso/<?= $row_array['id'] ?>.jpg" class="card-img-top" alt="..." width="auto">
                            <div class="" style="font-size: 15px;">
                            <?= $row_array['nama'] ?>
                            </div>
                            <ul class="list-group list-group-flush fw-bold">
                                <?php
                                if ($row_array['stok'] == 0) { ?>
                                    <li class="list-group-item text-danger">HABIS</li>
                                <?php } else if ($row_array['stok'] == 1) { ?>
                                    <li class="list-group-item text-warning">SEDIKIT</li>
                                <?php } else if ($row_array['stok'] == 2) { ?>
                                    <li class="list-group-item text-success">ADA</li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php $img++;
                }
                $row = mysqli_query($conn, "SELECT * From nagetbakso where stok='0' order by tipe");
                $img = 1;
                foreach ($row as $row_array) {
                ?>
                    <div class="col-6 col-md-3 mb-3" data-aos="fade">
                        <div class="card">
                            <img src="./img/produk/nagetbakso/<?= $row_array['id'] ?>.jpg" class="card-img-top" alt="..." width="auto">
                            <div class="" style="font-size: 15px;">
                            <?= $row_array['nama'] ?>
                            </div>
                            <ul class="list-group list-group-flush fw-bold">
                                <?php
                                if ($row_array['stok'] == 0) { ?>
                                    <li class="list-group-item text-danger">HABIS</li>
                                <?php } else if ($row_array['stok'] == 1) { ?>
                                    <li class="list-group-item text-warning">SEDIKIT</li>
                                <?php } else if ($row_array['stok'] == 2) { ?>
                                    <li class="list-group-item text-success">ADA</li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php $img++;
                } ?>                
            </div>
        </div>
</section>