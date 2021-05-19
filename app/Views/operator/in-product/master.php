<?= $this->extend('page_operator'); ?>

<?= $this->section('content_operator'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-b-10">
                <div class="col-lg-4 col-md-4 m-b-10">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Data" title="Type in a name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 ml-auto">
                    <!-- <button class="btn btn-success btn-md" type="submit" href="/login">Tambah Barang</button> -->
                    <a class="btn btn-success btn-block rounded-lg" type="submit" href="/tambah_brgmasukmaster_op">Tambah Barang Masuk</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-15">
                        <table id="myTable" class="table table-bordered table-data1 text-center align-center" style="font-size: 10pt;">
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
                                <tr>
                                    <td>TM0001</td>
                                    <td>20/12/2021</td>
                                    <td>Paku</td>
                                    <td>PT. Sejahtera</td>
                                    <td>G-123</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>Kg</td>
                                    <td>Rp. 200.000,00</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm rounded-circle" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm rounded-circle" title="Hapus">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <script>
                            function myFunction() {
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable");
                                tr = table.getElementsByTagName("tr");
                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[0];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                            $(document).ready(function() {
                                $('#myTable').DataTable({
                                    "scrollX": true,
                                    "scrollY": 200,
                                });
                                $('.dataTables_length').addClass('bs-select');
                            });
                        </script>

                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>