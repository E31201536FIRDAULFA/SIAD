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

    //Add User
    public function users()
    {
        $model = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $rab = new rabModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $pdf = $this->request->getFile('scankk');

            if ($pdf->isValid() && ! $pdf->hasMoved()) {
                $randName = $pdf->getRandomName();
                $pdf->move('./uploads',$randName);
             
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'username' => $this->request->cgetPost('username'),
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
                    'scankk' => $randName,
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
            } else {
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
                    'scankk' => '',
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
            }
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]);
    
        
        } else {
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
            $pdf = $this->request->getFile('scankk');
            $randName = $pdf->getRandomName();

            $id = $this->request->getPost('id');
            if ($pdf->isValid() && ! $pdf->hasMoved()) {
                $pdf->move('./uploads',$randName);
             
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
                    'scankk' => $randName,
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
            } else {
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
                    'scankk' => '',
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
            }
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

        $pdf = $this->request->getFile('scankk');

        //dd($pdf);
        if ($pdf->isValid() && ! $pdf->hasMoved()) {
            $randName = $pdf->getRandomName();
            $pdf->move('./uploads',$randName);
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
                'scankk' => $randName,
            ]);
        } else {
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
        }

        return redirect()->to('dashboard/profile/'.$id)->with('success', 'Sukses update profile');
    }
}