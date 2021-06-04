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
                    <input type="hidden" name="ID_TRANSAKSI" id="ID_TRANSAKSI" value="<?= (isset($transac['ID_TRANSAKSI'])) ? $transac['ID_TRANSAKSI'] : '' ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-control-label pr-3">Kode Transaksi</label>
                                        <input type="text" name="ID_TRANSAKSI" id="ID_TRANSAKSI" class="form-control w-100" value="<?= (isset($transac['ID_TRANSAKSI'])) ? $transac['ID_TRANSAKSI'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Kode Barang</label>
                                        <select name="ID_BARANG" id="ID_BARANG" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($product as $pro) : ?>
                                            <option value="<?= $pro['ID_BARANG']; ?>"><?= $pro['ID_BARANG']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-control-label pr-3">Tanggal Masuk</label>
                                        <input type="text" name="DATE_IN" id="DATE_IN" class="form-control w-100" value="<?= (isset($transac['DATE_IN'])) ? $transac['DATE_IN'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-control-label pr-3">Nama</label>
                                        <input type="text" name="NAMA_BARANG" id="NAMA_BARANG" class="form-control w-100" value="<?= (isset($product['NAMA_BARANG'])) ? $product['NAMA_BARANG'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Vendor</label>
                                        <select name="ID_VENDOR" id="ID_VENDOR" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($vendor as $ven) : ?>
                                            <option value="<?= $ven['ID_VENDOR']; ?>"><?= $ven['NAMA_VENDOR']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Satuan</label>
                                        <select name="ID_SATUAN" id="ID_SATUAN" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($unit as $un) : ?>
                                            <option value="<?= $un['ID_SATUAN']; ?>"><?= $un['NOTASI']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Lokasi</label>
                                        <select name="ID_LOKASI" id="ID_LOKASI" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($location as $loc) : ?>
                                            <option value="<?= $loc['ID_LOKASI']; ?>"><?= $loc['BLOK']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="" class="pr-2 form-control-label">Harga</label>
                                        <input type="text" class="form-control w-100" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="" class="pr-2 form-control-label">Stok Masuk</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="" class="pr-2 form-control-label">Stok Minimal</label>
                                        <input type="text" class="form-control w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-md">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>