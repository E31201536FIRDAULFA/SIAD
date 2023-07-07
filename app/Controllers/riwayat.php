<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\riwayatModel;
use App\Models\KehilanganModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;
use App\Models\UserModel;
use App\Models\rabModel;
use App\Models\KTPModel;
use App\Models\gajiModel;
use App\Models\skckModel;

class riwayat extends BaseController
{
public function riwayatsktm()
{
   
    return view('page/partials/Riwayat/sktmriwayat');
}

public function riwayatspu()
    {
        return view('page/partials/Riwayat/spuriwayat');
    }

public function riwayatgaji()
    {
        return view('page/partials/Riwayat/gajiriwayat');
    }
    
public function riwayatktp()
    {
        return view('page/partials/Riwayat/ktpriwayat');
    }
   
public function riwayatkk()
    {
        return view('page/partials/Riwayat/kkriwayat');
    }

    public function riwayatkehilangan()
    {
        return view('page/partials/Riwayat/kehilanganriwayat');
    }

    public function riwayatskck()
    {
        return view('page/partials/Riwayat/skckriwayat');
    }
}