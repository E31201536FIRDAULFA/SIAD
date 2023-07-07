<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\SPUModel;
use App\Models\KehilanganModel;
use App\Models\gajiModel;

use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use Dompdf\Dompdf;
use Config\Services;
use Dompdf\Options;


class warga extends BaseController
{
    public function surat()
    {
        $user = new UserModel();
       
        return view('page/warga/dashboardwarga',[
          
            'user' => $user->where('role', 'warga')->findAll(),
        ]);
    }

    public function riwayat()
     {
        return view('page/warga/dashboardriwayat');
     }
}

