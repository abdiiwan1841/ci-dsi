<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductOut extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Master Barang Keluar - Operator'
        ];

        return view('operator/out-product/master', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Barang Keluar - Operator'
        ];


        return view('operator/out-product/add_edit', $data);
    }
}
