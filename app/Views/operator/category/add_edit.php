<?= $this->extend('page_operator'); ?>

<?= $this->section('content_operator'); ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Form <strong><?= $formHeader ?></strong>
                </div>
                <div class="card-body card-block">
                    <form action="<?= $action ?>" method="post" enctype="multipart/form-data" class="form-inline" style="font-size: 10,5pt;" id="form-master">
                    <?= csrf_field() ?>
                    <input type="hidden" name="ID_KATEGORI" id="ID_KATEGORI" value="<?= (isset($category['ID_KATEGORI'])) ? $category['ID_KATEGORI'] : '' ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="NAMA_KATEGORI" class="form-control-label pr-3">Nama Kategori</label>
                                        <input type="text" class="form-control w-100" name="NAMA_KATEGORI" id="NAMA_KATEGORI" value="<?= (isset($category['NAMA_KATEGORI'])) ? $category['NAMA_KATEGORI'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="PREFIX_KATEGORI" class="form-control-label pr-3">Prefix</label>
                                        <input type="text" class="form-control w-100" name="PREFIX_KATEGORI" id="PREFIX_KATEGORI" value="<?= (isset($category['PREFIX_KATEGORI'])) ? $category['PREFIX_KATEGORI'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" form="form-master" class="btn btn-success btn-md">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>