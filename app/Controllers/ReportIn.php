<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportIn extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Masuk - Supervisor',
        ];

        return view('supervisor/in-product/main', $data);
    }
}
