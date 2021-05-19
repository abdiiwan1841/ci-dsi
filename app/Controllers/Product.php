<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Master Barang - Operator'
        ];

        return view('operator/product/master', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Barang - Operator'
        ];

        return view('operator/product/add_edit', $data);
    }

    public function proses_add()
    {
        if(!empty($_POST)){
            dd($_POST);
        }
    }
}
