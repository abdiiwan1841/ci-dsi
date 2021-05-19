<!-- PAGE CONTAINER-->
<div class="page-container2">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop2">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap2">
                    <div class="logo d-block d-lg-none">
                        <a href="#">
                            <h1 style="color: white; padding-left: 20px;">SIMPER <span class="no-bold">DSI</span></h1>
                            <!-- <img src="images/icon/logo-white.png" alt="CoolAdmin" /> -->
                        </a>
                    </div>
                    <div class="header-button2">
                        <div class="header-button-item mr-0 js-sidebar-btn">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="setting-menu js-right-sidebar d-none d-lg-block">
                            <div>
                                 <a class="logout-nav" href="<?= base_url('/keluar') ?>">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Tampilan mobile -->
    <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none costum-nav">
        <div class="logo">
            <a href="#">
                <h1 style="color: white; padding-left: 20px;">SIMPER <span class="no-bold">DSI</span></h1>
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar2 costum-nav">
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <a href="<?= base_url('dashboard') ?>">
                        <i class="fas fa-home"></i>Beranda</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-th"></i>Barang
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="<?= base_url('brgmaster_op') ?>">
                                    <i class="fas fa-tasks"></i>Master Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('brgmasuk_op') ?>">
                                    <i class="fas fa-arrow-right"></i>Barang Masuk</a>
                            </li>
                            <li>
                                <a href="<?= base_url('brgkeluar_op') ?>">
                                    <i class="fas fa-arrow-left"></i>Barang Keluar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('kategori_op') ?>">
                            <i class="fas fa-gavel"></i>Master Kategori</a>
                    </li>
                    <li>
                        <a href="<?= base_url('lokasi_op') ?>">
                            <i class="fas fa-map-marker"></i>Master Lokasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('satuan_op') ?>">
                            <i class="fas fa-circle"></i>Master Satuan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('vendor_op') ?>">
                            <i class="fas fa-square"></i>Master Vendor</a>
                    </li>
                </ul>
            </nav>
            <div>
                <a class="logout-nav" href="<?= base_url('/keluar') ?>">Keluar</a>
            </div>
        </div>
    </aside>