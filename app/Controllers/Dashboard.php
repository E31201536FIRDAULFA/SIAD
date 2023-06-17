<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\KKModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKK = new KKModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        return view('page/dashboard',[
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKKNew' => $modelKK->where('keterangan', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

    //Add User
    public function users()
    {
        $model = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKK = new KKModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => $this->request->getPost('role'),
            ];
            $checkpointUsername = $model->where('username', $data['username'])->first();
            $checkpointEmail    = $model->where('email', $data['email'])->first();
            if ($checkpointUsername) {
                return $this->response->setJSON([
                    'status' => false, 
                    'icon' => 'error',
                    'title' => 'Tambah User gagal!',
                    'text' => 'Username telah digunakan',
                ]);
            } else if ($checkpointEmail) {
                return $this->response->setJSON([
                    'status' => false,
                    'icon' => 'error',
                    'title' => 'Tambah User gagal!',
                    'text' => 'Email telah digunakan',
                ]);
            } else {
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah User Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            };
        } else {
            return view('page/dashboardUsers',[
                'isGajiNew' => $modelGaji->where('status', 'new')->first(),
                'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
                'isKKNew' => $modelKK->where('keterangan', 'new')->first(),
                'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
                'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
                'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
                'isSPUNew' => $modelSPU->where('status', 'new')->first(),
            ]);
        }
    }

    public function usersData()
    {
        $model = new UserModel();
        return $this->response->setJSON($model->findAll());
    }

    public function usersUpdate($id)
    {
        $model = new UserModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
            $data = [
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'role' => $this->request->getPost('role'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $model->update($id, $data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Update Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]);
        } else {
            return $this->response->setJSON([
                'data' => $model->where('id', $id)->first(),
            ]);
        }
    }

    public function usersDelete($id)
    {
        $model = new UserModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

}
