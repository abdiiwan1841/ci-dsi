<?= $this->extend('page_operator'); ?>

<?= $this->section('content_operator'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-b-5">
                <div class="col-lg-4 col-md-4 m-b-5">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </div>
                        <input type="text" id="dataInput" placeholder="Data" title="Type in a name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 ml-auto">
                    <!-- <button class="btn btn-success btn-md" type="submit" href="/login">Tambah Barang</button> -->
                    <a class="btn btn-success btn-block rounded-lg" type="submit" href="/tambah_brgmasuk_op">Tambah Barang Masuk</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= session()->getFlashdata('status') ?>
                    <!-- DATA TABLE-->
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-data1 text-center align-center" style="font-size: 10pt;">
                            <thead>
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Nama Barang</th>
                                    <th>Vendor</th>
                                    <th>Lokasi</th>
                                    <th>Stok Masuk</th>
                                    <th>Stok Minimal</th>
                                    <th>Satuan</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($transac as $tra) : ?>
                                <tr>
                                    <td><?= $tra['ID_TRANSAKSI'] ?></td>
                                    <td><?= $tra['DATE_IN'] ?></td>
                                    <td><?= $tra['NAMA_BARANG'] ?></td>
                                    <td><?= $tra['NAMA_VENDOR'] ?></td>
                                    <td><?= $tra['BLOK'] ?></td>
                                    <td><?= $tra['JUMLAH_BARANG'] ?></td>
                                    <td>1</td>
                                    <td><?= $tra['NOTASI']; ?></td>
                                    <td><?= $tra['TOTAL_HARGA']; ?></td>
                                    <td>
                                        <a href="<?= base_url('/edit_brgmasuk_op/'.$tra['ID_TRANSAKSI'].'/'.$tra['ID_VENDOR'])?>" class="btn btn-secondary btn-sm rounded-circle" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="<?= base_url('/hapus_brgmasuk_op/'.$tra['ID_TRANSAKSI']) ?>" class="delete btn btn-danger btn-sm rounded-circle" title="Hapus">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>