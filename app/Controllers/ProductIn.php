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
}
