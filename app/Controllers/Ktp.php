<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\KTPModel;
use App\Models\UserModel;

class KTP extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new KTPModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'scankk' => $this->request->getPost('scankk'),
                'status' => $this->request->getPost('status'),
                'keterangan' => $this->request->getPost('keterangan'),
            
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Pengantar KTP Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/kependudukan/dashboardKtp');
    }

// Data Pengajuan KTP (read)
    public function dataKTP()
    {
        $model = new KTPModel();
        return $this->response->setJSON($model->findAll());
    }

    public function dataKTPriwayat()
    {
        $model = new KTPModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
    }

    //Hapus Data Surat KTP (delete)
    public function hapusKTP($id)
    {
        $model = new KTPModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }


     //Edit Surat KTP
     public function editKTP($id)
     {
        $model = new KTPModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
                $data = [
                    'tgl' => $this->request->getPost('tgl'),
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'scankk' => $this->request->getPost('scankk'),
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

    public function download()
    {
        return view('page/partials/Riwayat/gajiriwayat');
    }
    
}