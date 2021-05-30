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
                    <input type="hidden" name="ID_BARANG" id="ID_BARANG" value="<?= (isset($category['ID_BARANG'])) ? $category['ID_BARANG'] : '' ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="selectSm" class="form-control-label pr-3">Kategori</label>
                                        <select name="PREFIX_KATEGORI" id="PREFIX_KATEGORI" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($category as $cat) : ?>
                                            <option value="<?= (isset($cat['ID_KATEGORI'])) ? $cat['ID_KATEGORI'] : '' ?>"><?= $cat['PREFIX_KATEGORI']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="ID_BARANG" class="pr-2 form-control-label">Kode</label>
                                        <input type="text" name="ID_BARANG" id="ID_BARANG" class="form-control w-100" value="<?= (isset($product['ID_BARANG'])) ? $product['ID_BARANG'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-control-label pr-3">Satuan</label>
                                        <select name="NOTASI" id="NOTASI" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($unit as $un) : ?>
                                            <option value="<?= $un['ID_SATUAN']; ?>"><?= $un['NOTASI']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-control-label pr-3">Lokasi</label>
                                        <select name="BLOK" id="BLOK" class="form-control w-100">
                                            <option value="">Pilih Opsi</option>
                                        <?php foreach($location as $loc) : ?>
                                            <option value="<?= $loc['ID_LOKASI']; ?>"><?= $loc['BLOK']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="NAMA_BARANG" class="pr-2 form-control-label">Nama Barang</label>
                                        <input type="text" name="NAMA_BARANG" id="NAMA_BARANG" class="form-control w-100" value="<?= (isset($product['NAMA_BARANG'])) ? $product['NAMA_BARANG'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="HARGA_BARANG" class="pr-2 form-control-label">Harga</label>
                                        <input type="text" name="HARGA_BARANG" id="HARGA_BARANG" class="form-control w-100" value="<?= (isset($product['HARGA_BARANG'])) ? $product['HARGA_BARANG'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="KETERANGAN_BARANG" class="pr-2 form-control-label">Keterangan</label>
                                        <input type="text" name="KETERANGAN_BARANG" id="KETERANGAN_BARANG" class="form-control w-100" value="<?= (isset($product['KETERANGAN_BARANG'])) ? $product['KETERANGAN_BARANG'] : '' ?>">
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