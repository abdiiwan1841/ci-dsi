<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportStock extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Stock - Supervisor',
        ];

        return view('supervisor/stock-product/main', $data);
    }
}
