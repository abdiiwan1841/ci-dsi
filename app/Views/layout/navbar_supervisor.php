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
                        <a href="/beranda_spv">
                            <i class="fas fa-home"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="/laporanbarangmasuk_spv">
                            <i class="fas fa-tasks"></i>Laporan Stok Barang</a>
                    </li>
                    <li>
                        <a href="/laporanbarangkeluar_spv">
                            <i class="fas fa-arrow-right"></i>Laporan Barang Masuk</a>
                    </li>
                    <li>
                        <a href="/laporanstockbarang_spv">
                            <i class="fas fa-arrow-left"></i>Laporan Barang Keluar</a>
                    </li>
                </ul>
            </nav>
            <div>
                <a class="logout-nav" href="<?= base_url('/keluar') ?>">Keluar</a>
            </div>
        </div>
    </aside>