<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class warga extends BaseController
{
    public function surat()
    {
        return view('page/warga/dashboardwarga');
    }

    public function riwayat()
     {
        return view('page/warga/dashboardriwayat');
     }
}

