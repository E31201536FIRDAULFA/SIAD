<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('page/dashboard');
    }

    public function table()
    {
        $model = new UserModel();
        $data = [
            'content' => $model->findAll(),
        ];
        return view('page/dashboardTable', $data);
    }
}
