<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#eae7e7;">
    <div class="position-sticky pt-5">
        <div class="container fw-bold" style="color:blue;">
            <h4><?= $desc; ?></h4>
        </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_lembur") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_lembur">
                        <span data-feather="bar-chart-2"></span>
                        Data Lembur
                    </a>
            </ul>
            
    </div>
</nav>