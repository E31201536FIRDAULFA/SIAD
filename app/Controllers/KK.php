<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\KKModel;
use App\Models\UserModel;

class KK extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new KKModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'scanktp' => $this->request->getPost('scanktp'),
                'status' => $this->request->getPost('status'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat KARTU KELUARGA Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/kependudukan/dashboardKk');
    }

// Data Pengajuan KK (read)
    public function dataKK()
    {
        $model = new KKModel();
        return $this->response->setJSON($model->findAll());
    }


    //Hapus Data Surat kk (delete)
    public function hapuskk($id)
    {
        $model = new KKModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

    //Tambah Pengajuan KK
    public function tambahKK()
    {
        $model = new KKModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'scanktp' => $this->request->getPost('scanktp'),
                'status' => $this->request->getPost('status'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat KARTU KELUARGA Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            return view('page/kk');
        }
    }

     //Edit Surat KK
     public function editKK($userid)
     {
        $model = new KKModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
                $data = [
                    'tgl' => $this->request->getPost('tgl'),
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'scanktp' => $this->request->getPost('scanktp'),
                    'status' => $this->request->getPost('status'),
                    'keterangan' => $this->request->getPost('keterangan'),
                
            ];
            $data['userid']=session()->get('id');
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
    
}