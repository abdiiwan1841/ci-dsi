<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Master Barang - Operator',
            'product' => $this->ProdukModel->getProduk()
        ];

        return view('operator/product/master', $data);
    }

    public function add($id = NULL)
    {
        if($id == NULL){
            $data = [
                'title' => 'Tambah Barang - Operator',
                'action' => base_url('product/process_add'),
                'category' => $this->KategoriModel->findAll(),
                'unit' => $this->SatuanModel->findAll(),
                'location' => $this->LokasiModel->findAll(),
                'formHeader' => 'Tambah Barang'
            ];
        }else{
            $data = [
                'title' => 'Edit Barang - Operator',
                'product' => $this->ProdukModel->find($id),
                'action' => base_url('product/process_edit'),
                'formHeader' => 'Edit Barang'
            ];
        }

        return view('operator/product/add_edit', $data);
    }

    public function delete($id = NULL)
    {
        $model = new Product_model();

        if($id == NULL){
            return redirect()->to('/kategori_op');
        }else{
            $delete = $model->delete($id);

            return redirect()->to('/kategori_op');
        }
    }

    public function process_add()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'NAMA_BARANG' => 'required', 
            'HARGA_BARANG' => 'required',
            'KETERANGAN_BARANG' => 'required'
        ]);
        $dataValid = $validation->withRequest($this->request)->run();
        
        if($dataValid){
            if (!empty($_POST)){
                $add = $this->ProdukModel->insert([
                    'ID_BARANG'     => $this->request->getVar('ID_BARANG'),
                    'ID_SATUAN'     => $this->request->getVar('ID_SATUAN'),
                    'ID_LOKASI'     => $this->request->getVar('ID_LOKASI'),
                    'ID_KATEGORI'   => $this->request->getVar('ID_KATEGORI'),
                    'NAMA_BARANG'   => $this->request->getVar('NAMA_BARANG'),
                    'KETERANGAN_BARANG' => $this->request->getVar('KETERANGAN_BARANG'),
                    'HARGA_BARANG'  => $this->request->getVar('HARGA_BARANG'),
                ]);
                dd($add);  

                // if($add){
                //     return 'tambahKategori';
                // }
            }
        }
    }
    
}
