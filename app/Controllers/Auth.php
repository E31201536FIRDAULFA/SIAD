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
            'nama'      => $data['nama'],
            'username'  => $data['username'],
            'email'     => $data['email'],
            'picture'   => $data['picture'],
            'role'      => $data['role'],
            'created_at'=> $data['created_at'],
        ]);
        return true;
    }
    public function login()
    {
        if ($this->request->getPost()) {
            $model = new UserModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $checkpointData = $model->where('email', $email)
                                    ->orWhere('username', $email)
                                    ->first();
            if ($checkpointData) {
                if (password_verify($password, $checkpointData['password'])) {
                    $this->setUserSession($checkpointData);
                    return redirect()->to('dashboard');
                } else {
                    session()->setFlashdata('error', 'Password salah!');
                    return redirect()->to('login');
                }
            } else {
                session()->setFlashdata('error', 'Email tidak ada di database!');
                return redirect()->to('login');
            }
        }
        return view('page/auth/SignIn');
    }

    public function register()
    {
        if ($this->request->getPost()) {
            if (!$this->validate([
                'email' => [
                    'rules' => 'required|min_length[4]|max_length[50]|is_unique[users.email]',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'min_length' => 'Email minimal 4 Karakter',
                        'max_length' => 'Email maksimal 50 Karakter',
                        'is_unique' => 'Email sudah digunakan'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[4]|max_length[50]',
                    'errors' => [
                        'required' => 'Password harus diisi',
                        'min_length' => 'Password minimal 4 Karakter',
                        'max_length' => 'Password maksimal 50 Karakter',
                    ]
                ],
                'password_conf' => [
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => 'Konfirmasi password tidak sesuai dengan password di atas',
                    ]
                ],
            ])) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }
            $model = new UserModel();
            $data = [
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'nama' => $this->request->getVar('nama'),
            ];
            $model->save($data);
            session()->setFlashdata('success', 'Anda telah berhasil register.');
            return redirect()->to('login');
        }
        return view('page/auth/SignUp');
    }

    public function Logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    public function LupaPassword()
    {
        return view('page/auth/LupaPassword');
    }

    public function ResetPassword($token)
    {

    }
}
