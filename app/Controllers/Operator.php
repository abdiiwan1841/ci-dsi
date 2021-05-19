<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Operator extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda - Operator',
        ];

        return view('operator/dashboard', $data);
    }
}
