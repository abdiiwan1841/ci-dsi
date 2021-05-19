<?= $this->extend('page_supervisor'); ?>

<?= $this->section('content_supervisor'); ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Form <strong>Harian</strong>
                        </div>
                        <div class="card-body">
                            <form action="" class="form-inline">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-control-label pr-3">Pilih Tanggal</label>
                                                <input type="date" class="form-control w-100" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-md">
                                Cetak
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Form <strong>Bulanan</strong>
                        </div>
                        <div class="card-body">
                            <form action="" class="form-inline">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-control-label pr-3">Pilih Tanggal</label>
                                                <input type="date" class="form-control w-100" id="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-control-label pr-3">Sampai Tanggal</label>
                                                <input type="date" class="form-control w-100" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-md">
                                Cetak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>