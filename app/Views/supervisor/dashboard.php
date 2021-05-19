<?= $this->extend('page_supervisor'); ?>

<?= $this->section('content_supervisor'); ?>
<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <h3><span class="no-bold">Selamat Datang, </span>Supervisor!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->

<!-- STATISTIC-->
<section class="statistic">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="statistic__item">
                        <h4 class="number no-bold"><a href="" class="item_stat_">6,666</a></h4>
                        <span class="desc">Laporan Stok Barang</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="statistic__item align-center">
                        <h4 class="number no-bold"><a href="" class="item_stat_">6,666</a></h4>
                        <span class="desc">Laporan Barang Masuk</span>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="statistic__item">
                        <h4 class="number no-bold"><a href="" class="item_stat_">6,666</a></h4>
                        <span class="desc">Laporan Barang Keluar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>