<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\KehilanganModel;
use App\Models\UserModel;

class Kehilangan extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new KehilanganModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'jenis_surat' => $this->request->getPost('jenis_surat'),
                'nsurat' => $this->request->getPost('nsurat'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'jk' => $this->request->getPost('jk'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'keperluan' => $this->request->getPost('keperluan'),
                'ket' => $this->request->getPost('ket'),
                'tgl_berlaku' => $this->request->getPost('tgl_berlaku'),
                'status' => $this->request->getPost('status'),
                'suratkehilangan' => $this->request->getPost('suratkehilangan'), 
                
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Kehilangan Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
        }
        return view('page/surat/dashboardKehilangan');
    }

      // Data Surat Kehilangan (read)
      public function dataKehilangan()
      {
          $model = new KehilanganModel();
          return $this->response->setJSON($model->findAll());
  
      }
  
      // Terima Surat Kehilangan (acc/tolak)
      public function terimaKehilangan($id)
      {
          $userModel = new UserModel();
          $kehilanganmodel = new KehilanganModel();
          $data = [
              'status' => 'diterima'
          ];
          $userModel->update($id, $data);
          return redirect()->to(base_url('Admin/dataPeserta'));
      }
  
      //Hapus Data Surat Kehilangan (delete)
      public function hapusKehilangan($id)
      {
          $model = new KehilanganModel();
          $model->where('id', $id)->delete($id);
          return $this->response->setJSON([
              'isConfirm' => true,
          ]);
      }
  
      //Tambah Surat Kehilangan
      public function tambahKehilangan()
      {
          $model = new KehilanganModel();
          if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
              $data = [
                  'tgl' => $this->request->getPost('tgl'),
                  'n_surat' => $this->request->getPost('n_surat'),
                  'nama' => $this->request->getPost('nama'),
                  'nik' => $this->request->getPost('nik'),
                  'jk' => $this->request->getPost('jk'),
                  'pekerjaan' => $this->request->getPost('pekerjaan'),
                  'alamat' => $this->request->getPost('alamat'),
                  'keperluan' => $this->request->getPost('keperluan'),
                  'ket' => $this->request->getPost('ket'),
                  'tgl_berlaku' => $this->request->getPost('tgl_berlaku'),
                  'status' => $this->request->getPost('status'),
                  'suratkehilangan' => $this->request->getPost('suratkehilangan'), 
                 
              ];
                  $model->save($data);
                  return $this->response->setJSON([
                      'status' => true,
                      'icon' => 'success',
                      'title' => 'Tambah Pengajuan Surat Kehilangan Berhasil!',
                      'text' => 'Pop up ini akan hilang dalam 3 detik.',
                  ]); 
              return view('page/kehilangan');
          }
      }
  
  
       //Edit Surat Kehilangan
       public function editKehilangan($userid)
       {
          $model = new KehilanganModel();
          if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
              $id = $this->request->getPost('id');
              $data = [
                  'tgl' => $this->request->getPost('tgl'),
                  'jenis_surat' => $this->request->getPost('jenis_surat'),
                  'nsurat' => $this->request->getPost('nsurat'),
                  'nama' => $this->request->getPost('nama'),
                  'nik' => $this->request->getPost('nik'),
                  'jk' => $this->request->getPost('jk'),
                  'pekerjaan' => $this->request->getPost('pekerjaan'),
                  'alamat' => $this->request->getPost('alamat'),
                  'keperluan' => $this->request->getPost('keperluan'),
                  'ket' => $this->request->getPost('ket'),
                  'tgl_berlaku' => $this->request->getPost('tgl_berlaku'),
                  'status' => $this->request->getPost('status'),
                  'suratkehilangan' => $this->request->getPost('suratkehilangan'), 
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