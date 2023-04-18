<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\gajiModel;
use App\Models\UserModel;

class gaji extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new gajiModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'no_kip' => $this->request->getPost('no_kip'),
                'no_kis' => $this->request->getPost('no_kis'),
                'ket' => $this->request->getPost('ket'),
                'status' => $this->request->getPost('status'),
                'Surat' => $this->request->getPost('Surat'),
                
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Ket Penghasilan Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/surat/dashboardGaji');
    }

        // Data Surat gaji (read)
    public function datagaji()
    {
        $model = new gajiModel();
        return $this->response->setJSON($model->findAll());
    }

    // Terima Surat gaji (acc/tolak)
    public function terimagaji($id)
    {
        $userModel = new UserModel();
        $gajimodel = new gajiModel();
        $data = [
            'status' => 1
        ];
        $sktmModel->update($id, $data);
        return redirect()->to(base_url('Admin/dataPeserta'));
    }

    //Hapus Data Surat gaji (delete)
    public function hapusgaji($id)
    {
        $model = new gajiModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

     //Edit Surat gaji
     public function editgaji($id)
     {
        $model = new gajiModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'no_kip' => $this->request->getPost('no_kip'),
                'no_kis' => $this->request->getPost('no_kis'),
                'ket' => $this->request->getPost('ket'),
                'status' => $this->request->getPost('status'),
                'Surat' => $this->request->getPost('Surat'),
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