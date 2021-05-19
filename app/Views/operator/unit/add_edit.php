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
                    <input type="hidden" name="ID_SATUAN" id="ID_SATUAN" value="<?= (isset($unit['ID_SATUAN'])) ? $unit['ID_SATUAN'] : '' ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group mb-3">
                                        <label for="SATUAN" class="form-control-label pr-3">Satuan</label>
                                        <input type="text" class="form-control w-100" name="SATUAN" id="SATUAN" value="<?= (isset($unit['SATUAN'])) ? $unit['SATUAN'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="NOTASI" class="form-control-label pr-3">Notasi</label>
                                        <input type="text" class="form-control w-100" name="NOTASI" id="NOTASI" value="<?= (isset($unit['NOTASI'])) ? $unit['NOTASI'] : '' ?>">
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