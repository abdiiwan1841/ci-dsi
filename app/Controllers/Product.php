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

    public function add($id = NULL) // $id_kategori=null (Opsi selected combobox)
    {
        if($id == NULL){
            $data = [
                'title' => 'Tambah Barang - Operator',
                'category' => $this->KategoriModel->findAll(),
                'unit' => $this->SatuanModel->findAll(),
                'location' => $this->LokasiModel->findAll(),
                'action' => base_url('product/process_add'),
                'formHeader' => 'Tambah Barang'
            ];
        }else{
            // var_dump($this->KategoriModel->find($id_kategori));
            // exit;

            $data = [
                'title' => 'Edit Barang - Operator',
                'product' => $this->ProdukModel->find($id),
                'category' => $this->KategoriModel->findAll(),
                'unit' => $this->SatuanModel->findAll(),
                'location' => $this->LokasiModel->findAll(),
                'action' => base_url('product/process_edit'),
                'formHeader' => 'Edit Barang'
            ];
        }

        return view('operator/product/add_edit', $data);
    }

    public function delete($id = NULL)
    {
        if($id == NULL){
            return redirect()->to('/brgmaster_op');
        }else{
            $delete = $this->ProdukModel->delete($id);

            return redirect()->to('/brgmaster_op');
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
                    'ID_SATUAN'     => $this->request->getVar('NOTASI'),
                    'ID_LOKASI'     => $this->request->getVar('BLOK'),
                    'ID_KATEGORI'   => $this->request->getVar('PREFIX_KATEGORI'),
                    'NAMA_BARANG'   => $this->request->getVar('NAMA_BARANG'),
                    'KETERANGAN_BARANG' => $this->request->getVar('KETERANGAN_BARANG'),
                    'HARGA_BARANG'  => $this->request->getVar('HARGA_BARANG'),
                ]);
                
                return 'tambahBarang';
                
            }else{
                return 'alertaBarang';
            }
        }
    }

    public function process_edit()
    {
        if (!empty($_POST)){
            // echo \var_dump($_POST);
            // exit;

            $add = $this->ProdukModel->save([
                'ID_BARANG'     => $this->request->getVar('ID_BARANG'),
                'ID_SATUAN'     => $this->request->getVar('NOTASI'),
                'ID_LOKASI'     => $this->request->getVar('BLOK'),
                'ID_KATEGORI'   => $this->request->getVar('PREFIX_KATEGORI'),
                'NAMA_BARANG'   => $this->request->getVar('NAMA_BARANG'),
                'KETERANGAN_BARANG' => $this->request->getVar('KETERANGAN_BARANG'),
                'HARGA_BARANG'  => $this->request->getVar('HARGA_BARANG'),
            ]);

            return 'editBarang';

        }else{
            return 'alertaBarang';
        }
    }
    
}
