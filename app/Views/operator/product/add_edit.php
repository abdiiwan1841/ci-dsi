<?= $this->extend('page_operator'); ?>

<?= $this->section('content_operator'); ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Form <strong>Tambah Barang</strong>
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-inline" style="font-size: 10,5pt;">
                    <?= csrf_field() ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Kategori</label>
                                        <select name="selectSm" id="SelectLm" class="form-control w-100">
                                            <option value="0">Pilih Opsi</option>
                                            <option value="1">Opsi #1</option>
                                            <option value="2">Opsi #2</option>
                                            <option value="3">Opsi #3</option>
                                            <option value="4">Opsi #4</option>
                                            <option value="5">Opsi #5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-control-label pr-3">Kode</label>
                                        <input type="text" class="form-control w-100" id="" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for=" selectSm" class="form-control-label pr-3">Tipe</label>
                                        <select name="selectSm" id="SelectLm" class="form-control w-100">
                                            <option value="0">Pilih Opsi</option>
                                            <option value="1">Opsi #1</option>
                                            <option value="2">Opsi #2</option>
                                            <option value="3">Opsi #3</option>
                                            <option value="4">Opsi #4</option>
                                            <option value="5">Opsi #5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Satuan</label>
                                        <select name="selectSm" id="SelectLm" class="form-control w-100">
                                            <option value="0">Pilih Opsi</option>
                                            <option value="1">Opsi #1</option>
                                            <option value="2">Opsi #2</option>
                                            <option value="3">Opsi #3</option>
                                            <option value="4">Opsi #4</option>
                                            <option value="5">Opsi #5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Lokasi</label>
                                        <select name="selectSm" id="SelectLm" class="form-control w-100">
                                            <option value="0">Pilih Opsi</option>
                                            <option value="1">Opsi #1</option>
                                            <option value="2">Opsi #2</option>
                                            <option value="3">Opsi #3</option>
                                            <option value="4">Opsi #4</option>
                                            <option value="5">Opsi #5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Vendor</label>
                                        <select name="selectSm" id="SelectLm" class="form-control w-100">
                                            <option value="0">Pilih Opsi</option>
                                            <option value="1">Opsi #1</option>
                                            <option value="2">Opsi #2</option>
                                            <option value="3">Opsi #3</option>
                                            <option value="4">Opsi #4</option>
                                            <option value="5">Opsi #5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="pr-2 form-control-label">Nama Barang</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="" class="pr-2 form-control-label">Harga</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="" class="pr-2  form-control-label">Keterangan</label>
                                        <input type="text" class="form-control w-100" style="height: 200px;">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="add btn btn-success btn-md">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>