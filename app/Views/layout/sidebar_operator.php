    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <h1 style="color: white; padding-left: 20px;">SIMPER <span class="no-bold">DSI</span></h1>
                    <!-- <img src="images/icon/logo-white.png" alt="Cool Admin" /> -->
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?= base_url('beranda_op') ?>">
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
            </div>
        </aside>