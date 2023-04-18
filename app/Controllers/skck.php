<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\skckModel;
use App\Models\UserModel;

class skck extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new skckModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                'perkawinan' => $this->request->getPost('perkawinan'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'status' => $this->request->getPost('status'),
                'surat' => $this->request->getPost('surat'),
                
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat SKCK Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/surat/dashboardSkck');
    }

        // Data Surat skck (read)
    public function dataskck()
    {
        $model = new skckModel();
        return $this->response->setJSON($model->findAll());
    }

    // Terima Surat skck (acc/tolak)
    public function terimaskck($id)
    {
        $userModel = new UserModel();
        $skckmodel = new skckModel();
        $data = [
            'status' => 1
        ];
        $sktmModel->update($id, $data);
        return redirect()->to(base_url('Admin/dataPeserta'));
    }

    //Hapus Data Surat skck (delete)
    public function hapusskck($id)
    {
        $model = new skckModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

     //Edit Surat skck
     public function editskck($id)
     {
        $model = new skckModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                'perkawinan' => $this->request->getPost('perkawinan'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'status' => $this->request->getPost('status'),
                'surat' => $this->request->getPost('surat'),
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