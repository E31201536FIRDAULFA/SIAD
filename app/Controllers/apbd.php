<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\APBDModel;
use App\Models\UserModel;

class apbd extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new APBDModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'penyelenggara' => $this->request->getPost('penyelenggara'),
                'jenis' => $this->request->getPost('jenis'),
                'anggaran' => $this->request->getPost('anggaran'),
                'sumberdana' => $this->request->getPost('sumberdana'),
                'tgl_pembahasan' => $this->request->getPost('tgl_pembahasan'),
            ];
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Anggaran Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/keuangan/dashboardApbd');
    }

// Data Pengajuan apbd (read)
    public function dataapbd()
    {
        $model = new APBDModel();
        return $this->response->setJSON($model->findAll());
    }


    //Hapus Data Surat apbd (delete)
    public function hapusapbd($id)
    {
        $model = new APBDModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

     //Edit Surat apbd
     public function editapbd($id)
     {
        $model = new APBDModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
                $data = [
                    'tgl' => $this->request->getPost('tgl'),
                    'penyelenggara' => $this->request->getPost('penyelenggara'),
                    'jenis' => $this->request->getPost('jenis'),
                    'anggaran' => $this->request->getPost('anggaran'),
                    'sumberdana' => $this->request->getPost('sumberdana'),
                    'tgl_pembahasan' => $this->request->getPost('tgl_pembahasan'),
                
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
    
}