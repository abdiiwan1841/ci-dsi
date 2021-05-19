<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportOut extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Keluar - Supervisor',
        ];

        return view('supervisor/out-product/main', $data);
    }
}
