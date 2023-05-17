<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\SKTMModel;
use App\Models\UserModel;

class SKTM extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'jk' => $this->request->getPost('jk'),
                'ttl' => $this->request->getPost('ttl'),
                'stswarga' => $this->request->getPost('stswarga'),
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'ttlayah' => $this->request->getPost('ttlayah'),
                'agama' => $this->request->getPost('agama'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamatayah' => $this->request->getPost('alamatayah'),
                'gaji' => $this->request->getPost('gaji'),
                'keperluan' => $this->request->getPost('keperluan'),
                'status' => $this->request->getPost('status'),
                'suratsktm' => $this->request->getPost('suratsktm'),
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Keterangan Tidak Mampu Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/surat/dashboardSKTM');
    }
    
// Data Surat SKTM (read)
    public function dataSKTM()
    {
        $model = new SKTMModel();
        return $this->response->setJSON($model->findAll());

    }

    public function datasktmriwayat()
    {
        $model = new SKTMModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
    }

    // Terima Surat SKTM (acc/tolak)
    public function terimaSKTM($id)
    {
        $userModel = new UserModel();
        $sktmmodel = new SKTMModel();
        $data = [
            'status' => 1
        ];
        $sktmModel->update($id, $data);
        return redirect()->to(base_url('Admin/dataPeserta'));
    }

    //Hapus Data Surat SKTM (delete)
    public function hapusSKTM($id)
    {
        $model = new SKTMModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

   
    //Tambah Surat SKTM
    public function tambahSKTM()
    {
        $model = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'jk' => $this->request->getPost('jk'),
                'ttl' => $this->request->getPost('ttl'),
                'stswarga' => $this->request->getPost('stswarga'),
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'ttlayah' => $this->request->getPost('ttlayah'),
                'agama' => $this->request->getPost('agama'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamatayah' => $this->request->getPost('alamatayah'),
                'gaji' => $this->request->getPost('gaji'),
                'keperluan' => $this->request->getPost('keperluan'),
                'status' => $this->request->getPost('status'),
                'status' => 1
            ];
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Kehilangan Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            return view('page/sktm');
        }
    }
          

     //Edit Surat SKTM
     public function editSKTM($id)
     {
        $model = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
                $data = [
                    'tgl' => $this->request->getPost('tgl'),
                    'nsurat' => $this->request->getPost('nsurat'),
                    'nik' => $this->request->getPost('nik'),
                    'nama' => $this->request->getPost('nama'),
                    'jk' => $this->request->getPost('jk'),
                    'ttl' => $this->request->getPost('ttl'),
                    'stswarga' => $this->request->getPost('stswarga'),
                    'nama_ayah' => $this->request->getPost('nama_ayah'),
                    'ttlayah' => $this->request->getPost('ttlayah'),
                    'agama' => $this->request->getPost('agama'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamatayah' => $this->request->getPost('alamatayah'),
                    'gaji' => $this->request->getPost('gaji'),
                    'keperluan' => $this->request->getPost('keperluan'),
                    'status' => $this->request->getPost('status'),
                    'status' => 1
                
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

     public function download()
    {
        return view('page/partials/Riwayat/gajiriwayat');
    }
     }
    