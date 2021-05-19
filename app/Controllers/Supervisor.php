<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Supervisor extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda - Supervisor',
        ];

        return view('supervisor/dashboard', $data);
    }
}
