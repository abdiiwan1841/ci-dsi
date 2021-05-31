<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductOut extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Barang Masuk - Operator',
            'transac' => $this->TransaksiModel->getTransaksiKeluar()
        ];
       
        return view('operator/out-product/master', $data);
    }
}
