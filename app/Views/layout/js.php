 <!-- Jquery JS-->
 <script src="<?= base_url() ?>/vendor/jquery-3.2.1.min.js"></script>
 <!-- Bootstrap JS-->
 <script src="<?= base_url() ?>/vendor/bootstrap-4.1/popper.min.js"></script>
 <script src="<?= base_url() ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
 <!-- Vendor JS       -->
 <script src="<?= base_url() ?>/vendor/slick/slick.min.js">
 </script>
 <script src="<?= base_url() ?>/vendor/wow/wow.min.js"></script>
 <script src="<?= base_url() ?>/vendor/animsition/animsition.min.js"></script>
 <script src="<?= base_url() ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
 </script>
 <script src="<?= base_url() ?>/vendor/counter-up/jquery.waypoints.min.js"></script>
 <script src="<?= base_url() ?>/vendor/counter-up/jquery.counterup.min.js">
 </script>
 <script src="<?= base_url() ?>/vendor/circle-progress/circle-progress.min.js"></script>
 <script src="<?= base_url() ?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
 <script src="<?= base_url() ?>/vendor/chartjs/Chart.bundle.min.js"></script>
 <script src="<?= base_url() ?>/vendor/select2/select2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/af-2.3.5/b-1.7.0/datatables.min.js"></script>

 <!-- Main JS-->
 <script src="<?= base_url() ?>/js/main.js"></script>

<!-- Operation JS -->
 <script>
    //Melakukan fungsi hapus pada button dengan class delete
    $('.delete').click(function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda tidak bisa mengembalikan data yang sudah dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Kembali'
        }).then((result) => {
            if (result.isConfirmed == true) {
                var href = $(this).attr('href');
                setTimeout(function() { window.location.href = href; }, 500 );
                // window.location.href = $(this).attr('href');
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data berhasil dihapus',
                    showConfirmButton: false
                })
            } 
        });
    })

    // Fungsi alert setiap transaksi data pada masing masing form
    $("#form-master").submit(function(e) {  // Mengambil id form transaksi
    e.preventDefault();                     // Mencegah fungsi bawaan form
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),             // Mengambil data yang di inputkan
            success: function(data)
            {
                if(data == 'tambahKategori'){   // Berfungsi memberi notifikasi edit kategori berhasil
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Kategori berhasil ditambah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/kategori_op'; 
                    })
                    
                }if(data == 'editKategori'){        // Berfungsi memberi notifikasi edit kategori berhasil
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Kategori berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/kategori_op'; 
                    })
                }if(data == 'alertaKategori'){      // Berfungsi memberi peringatan
                    Swal.fire({
                        icon: 'error',
                        title: 'Perhatian!',
                        text: 'Semua data harus di isi!',
                    })

// =============================================================================================================

                }if(data == 'tambahLokasi'){        // Bagian master lokasi
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Lokasi berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/lokasi_op'; 
                    })
                }if(data == 'editLokasi'){        
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Lokasi berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/lokasi_op'; 
                    })
                }if(data == 'alertaLokasi'){      
                    Swal.fire({
                        icon: 'error',
                        title: 'Perhatian!',
                        text: 'Semua data harus di isi!',
                    })

// =============================================================================================================

                }if(data == 'tambahSatuan'){        // Bagian master lokasi
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Satuan berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/satuan_op'; 
                    })
                }if(data == 'editSatuan'){        
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Satuan berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/satuan_op'; 
                    })
                }if(data == 'alertaSatuan'){      
                    Swal.fire({
                        icon: 'error',
                        title: 'Perhatian!',
                        text: 'Semua data harus di isi!',
                    })

// =============================================================================================================

                }if(data == 'tambahBarang'){        // Bagian master lokasi
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Barang berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/brgmaster_op'; 
                    })
                }if(data == 'editBarang'){        
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Barang berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/brgmaster_op'; 
                    })
                }if(data == 'alertaBarang'){      
                    Swal.fire({
                        icon: 'error',
                        title: 'Perhatian!',
                        text: 'Semua data harus di isi!',
                    })

// =============================================================================================================

                }if(data == 'tambahVendor'){        // Bagian master vendor
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Vendor berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/vendor_op'; 
                    })
                }if(data == 'editVendor'){        
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Vendor berhasil diubah!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        window.location.href = '/vendor_op'; 
                    })
                }if(data == 'alertaVendor'){      
                    Swal.fire({
                        icon: 'error',
                        title: 'Perhatian!',
                        text: 'Semua data harus di isi!',
                    })

// =============================================================================================================

                }
            }
        });
    });

    // Fungsi filter dan pencarian datatabel yang dikostum
    $(document).ready(function(){    
        var table = $('#dataTable').DataTable({
            "pagingType": "simple", // Merubah format pagination 
            "sDom":"ltipr",         // Menyembunyikan searchbar bawaan dari datatable
            "ordering": false,      // Ordering (Sorting on Each Column)will Be Disabled
            "info": false,          // Menonaktifkan "1 to n of n entries" text pada bagian bawah kiri tabeldata
            "lengthChange": false,  // Menonaktifkan informasi record datatable perhalaman
            "pageLength": 7,
            
            "oLanguage": {                          
                "sEmptyTable": "Data dalam tabel kosong",                               // Merubah informasi bila datatabel tidak ada isinya
                "sZeroRecords": "Data yang dicari tidak ada",                           // Merubah informasi bila data yang dicari tidak ada
                "sUrl": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json",   // Merubah bahasa default menjadi bahasa indonesia
            }
        });
            
        $('#dataInput').on('keyup',function(){      
            table.search($(this).val()).draw();
        });
    });

 </script>