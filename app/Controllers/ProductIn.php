<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductIn extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Master Barang Masuk - Operator'
        ];

        return view('operator/in-product/master', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Barang Masuk - Operator'
        ];


        return view('operator/in-product/add_op', $data);
    }
}
