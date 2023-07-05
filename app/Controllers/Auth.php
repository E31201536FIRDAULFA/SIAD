<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    private function setUserSession($data)
    {
        session()->set([
            'LoginTrue' => TRUE,
            'id'        => $data['id'],
            'nik'        => $data['nik'],
            'nama'      => $data['nama'],
            'username'  => $data['username'],
            'email'     => $data['email'],
            'role'      => $data['role'],
            'created_at'=> $data['created_at'],
        ]);
        return true;
    }
    public function login()
    {
        $model = new UserModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $checkpointData = $model->where('email', $username)
                                    ->orWhere('username', $username)
                                    ->first();
            if ($checkpointData) {
                if (password_verify($password, $checkpointData['password'])) {
                    $this->setUserSession($checkpointData);
                    return $this->response->setJSON([
                        'status' => true,
                        'icon' => 'success',
                        'title' => 'Login Berhasil!',
                        'text' => 'Anda akan diarahkan dalam 3 detik.',
                    ]);
                } else {
                    return $this->response->setJSON([
                        'status' => false,
                        'icon' => 'error',
                        'title' => 'Oops....',
                        'text' => 'Password salah!',
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'status' => false,
                    'icon' => 'error',
                    'title' => 'Oops....',
                    'text' => 'Invalid Username/Email!',
                ]);
            }
        }
        return view('page/auth/SignIn');
    }

    public function loginadm()
    {
        $model = new UserModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $checkpointData = $model->where('email', $username)
                                    ->orWhere('username', $username)
                                    ->first();
            if ($checkpointData) {
                if (password_verify($password, $checkpointData['password'])) {
                    $this->setUserSession($checkpointData);
                    return $this->response->setJSON([
                        'status' => true,
                        'icon' => 'success',
                        'title' => 'Login Berhasil!',
                        'text' => 'Anda akan diarahkan dalam 3 detik.',
                    ]);
                } else {
                    return $this->response->setJSON([
                        'status' => false,
                        'icon' => 'error',
                        'title' => 'Oops....',
                        'text' => 'Password salah!',
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'status' => false,
                    'icon' => 'error',
                    'title' => 'Oops....',
                    'text' => 'Invalid Username/Email!',
                ]);
            }
        }
        return view('page/auth/Signadm');
    }

    // public function register()
    // {
    //     $model = new UserModel();
    //     if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
    //         $data = [
    //             'nik'  => $this->request->getVar('nik'),
    //             'nama'      => $this->request->getVar('nama'),
    //             'username'  => $this->request->getVar('username'),
    //             'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //             'email'     => $this->request->getVar('email'),
    //             'role'      => 'masterdata',
    //         ];
    //         $checkpointUsername = $model->where('username', $data['username'])->first();
    //         $checkpointEmail    = $model->where('email', $data['email'])->first();
    //         if ($checkpointUsername) {
    //             return $this->response->setJSON([
    //                 'status' => false,
    //                 'icon' => 'error',
    //                 'title' => 'Register gagal!',
    //                 'text' => 'Username telah digunakan',
    //             ]);
    //         } else if ($checkpointEmail) {
    //             return $this->response->setJSON([
    //                 'status' => false,
    //                 'icon' => 'error',
    //                 'title' => 'Register gagal!',
    //                 'text' => 'Email telah digunakan',
    //             ]);
    //         } else {
    //             $model->save($data);
    //             return $this->response->setJSON([
    //                 'status' => true,
    //                 'icon' => 'success',
    //                 'title' => 'Register berhasil!',
    //                 'text' => 'Anda akan diarahkan dalam 3 detik.',
    //             ]); 
    //         };
    //     }
    //     return view('page/auth/SignUp');
    // }

    public function Logout()
    {
        session()->destroy();
        return $this->response->setJSON([
            'status' => true,
            'icon' => 'success',
            'title' => 'Logout Berhasil!',
            'text' => 'Anda akan diarahkan dalam 3 detik.'
        ]);
    }

    public function LupaPassword()
    {
        return view('page/auth/LupaPassword');
    }

    public function ResetPassword($token)
    {
        
    }

    public function chat()
    {
        return view('page/partials/chatbot');
    }
}
