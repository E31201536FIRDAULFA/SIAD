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

    //Add User
    public function users()
    {
        $model = new UserModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
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
            return view('page/dashboardUsers');
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
