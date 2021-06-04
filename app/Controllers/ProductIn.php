<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductIn extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Barang Masuk - Operator',
            'transac' => $this->TransaksiModel->getTransaksiMasuk()
        ];
       
        return view('operator/in-product/master', $data);
    }

    public function add($id = NULL) // $id_kategori=null (Opsi selected combobox)
    {
        if($id == NULL){
            $data = [
                'title' => 'Tambah Barang Masuk - Operator',
                'action' => base_url('product/process_add'),
                'formHeader' => 'Tambah Barang Masuk'
            ];
        }else{
            // var_dump($this->KategoriModel->find($id_kategori));
            // exit;

            $data = [
                'title' => 'Edit Barang Masuk - Operator',
                'action' => base_url('product/process_edit'),
                'formHeader' => 'Edit Barang Masuk'
            ];
        }

        return view('operator/in-product/add_edit', $data);
    }
}
