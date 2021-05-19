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
                <div class="col-lg-4 col-md-4 ml-auto">
                    <!-- <button class="btn btn-success btn-md" type="submit" href="/login">Tambah Barang</button> -->
                    <a class="btn btn-success btn-block rounded-lg" type="submit" href="/tambah_lokasimaster_op">Tambah Lokasi</a>
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
                                    <th>No.</th>
                                    <th>Nama Lokasi</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($location as $key => $loc) : ?>
                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $loc['BLOK'] ?></td>
                                    <td><?= $loc['KETERANGAN_LOKASI'] ?></td>
                                    <td>
                                        <a href="<?= base_url('/edit_lokasimaster_op/'.$loc['ID_LOKASI']) ?>" class="btn btn-secondary btn-sm rounded-circle" title="Edit">
                                             <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="<?= base_url('/hapus_lokasimaster_op/'.$loc['ID_LOKASI']) ?>" class="delete btn btn-danger btn-sm rounded-circle" title="Hapus">
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