<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product_model;

class Product extends BaseController
{
    public function index()
    {
        $model = new Product_model();
        // $data['product'] = $model->getProduk();
        // echo view('view_siswa',$data);
        
        $data = [
            'title' => 'Master Barang - Operator',
            'product' => $model->getProduk()
        ];

        // echo dd($data);
        return view('operator/product/master', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Barang - Operator'
        ];

        return view('operator/product/add_edit', $data);
    }
    
}
