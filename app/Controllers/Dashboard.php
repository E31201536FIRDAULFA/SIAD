<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Users;
use App\Models\UserModel;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\rabModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;
use App\Models\AnggotaModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $rab = new rabModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        $model = new UserModel();
        //$anggotamodel = new AnggotaModel();
        
        return view('page/dashboard',[
            'content' => $model->orderBy('created_at', 'DESC')->findAll(),
            'user' => $model->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
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
       $modelKTP = new KTPModel();
       $modelSKCK = new skckModel();
       $modelSKTM = new SKTMModel();
       $modelSPU = new SPUModel();
       if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
           $data = [
               
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'jk' => $this->request->getPost('jk'),
            'alamat' => $this->request->getPost('alamat'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'kawin' => $this->request->getPost('kawin'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'ttl' => $this->request->getPost('ttl'),
            'agama' => $this->request->getVar('agama'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'no_kk' => $this->request->getVar('no_kk'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'ttlayah' => $this->request->getVar('ttlayah'),
            'alamatayah' => $this->request->getVar('alamatayah'),
            'updated_at' => date('Y-m-d H:i:s'),
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
    }
    return view('page/dashboardUsers',[
        'content' => $model->findAll(),
        'user' => $model->where('role', 'warga')->findAll(),
        'isGajiNew' => $modelGaji->where('status', 'new')->first(),
        'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
        'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
        'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
        'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
        'isSPUNew' => $modelSPU->where('status', 'new')->first(),
    ]);
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
         
             
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role'),
                    'jk' => $this->request->getPost('jk'),
                    'alamat' => $this->request->getPost('alamat'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'kawin' => $this->request->getPost('kawin'),
                    'ttl' => $this->request->getPost('ttl'),
                    'agama' => $this->request->getVar('agama'),
                    'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
                    'no_kk' => $this->request->getVar('no_kk'),
                    'nama_ayah' => $this->request->getVar('nama_ayah'),
                    'ttlayah' => $this->request->getVar('ttlayah'),
                    'alamatayah' => $this->request->getVar('alamatayah'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
             
            $model->update($id, $data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Update Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]);
        } 
            return $this->response->setJSON([
                'data' => $model->where('id', $id)->first(),
            ]);
        }
    

    public function usersDelete($id)
    {
        $model = new UserModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

    public function profile($id)
    {
        $modelUser = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $rab = new rabModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();

        if ($this->request->getMethod(true) !== 'POST') {
            return view('page/profil', [
                'user' => $modelUser->find($id),
                'isGajiNew' => $modelGaji->where('status', 'new')->first(),
                'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
                'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
                'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
                'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
                'isSPUNew' => $modelSPU->where('status', 'new')->first(),
            ]);
        }

      
        $modelUser->update($id, [
                'nik' => $this->request->getVar('nik'),
                'nama' => $this->request->getVar('nama'),
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'jk' => $this->request->getVar('jk'),
                'alamat' => $this->request->getVar('alamat'),
                'pekerjaan' => $this->request->getVar('pekerjaan'),
                'kawin' => $this->request->getVar('kawin'),
                'ttl' => $this->request->getVar('ttl'),
                'agama' => $this->request->getVar('agama'),
                'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
                'no_kk' => $this->request->getVar('no_kk'),
                'nama_ayah' => $this->request->getVar('nama_ayah'),
                'ttlayah' => $this->request->getVar('ttlayah'),
                'alamatayah' => $this->request->getVar('alamatayah'),
                
            ]);

        return redirect()->to('dashboard/profile/'.$id)->with('success', 'Sukses update profile');
    }
}


