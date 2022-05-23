        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-info">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#"><i class="fas fa-user fa-fw"></i>Hallo Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Utama</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr class="bg-secondary">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <hr class="bg-secondary">
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="alternatif.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-solid fa-file"></i></div>Alternatif
                                    </a>
                                    <a class="nav-link" href="kriteria.php">
                                        <div class="sb-nav-link-icon"><i class="fa-solid fa-file-signature"></i></div>Kriteria
                                    </a>
                                    <a class="nav-link" href="nilai.php">
                                        <div class="sb-nav-link-icon"><i class="fa-solid fa-list-ol"></i></div>Bobot
                                    </a>

                                </nav>
                            </div>
                            <a class="nav-link" href="perhitungan.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-calculator"></i></div>
                                Perhitungan
                            </a>
                            <hr class="bg-secondary">
                            <a class="nav-link" href="hasil.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-square-poll-vertical"></i></div>
                                Hasil
                            </a>
                            <hr class="bg-secondary">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                Log Out
                            </a>
                            <hr class="bg-secondary">
                        </div>

                </nav>
            </div>