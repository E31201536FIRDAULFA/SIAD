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
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'jk' => $this->request->getPost('jk'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'keperluan' => $this->request->getPost('keperluan'),
                'ket' => $this->request->getPost('ket'),
                'status' => null,
                'suratkehilangan' => null,
                
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
        $model = new kehilanganModel();
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);
  
      }

      public function datakehilanganriwayat()
    {
        $model = new KehilanganModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
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
  

  
      public function editkehilangan($id)
     {
        $model = new KehilanganModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'jk' => $this->request->getPost('jk'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'keperluan' => $this->request->getPost('keperluan'),
                'ket' => $this->request->getPost('ket'),
                'status' => $this->request->getPost('status'),
                
              
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



 //Upload
 public function upload($id)
 {
    $model = new KehilanganModel();
    if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
        $pdf = $this->request->getFile('suratkehilangan');
        $randName = $pdf->getRandomName();

        if ($pdf->isValid() && ! $pdf->hasMoved()) {
            $pdf->move('./uploads',$randName);
        $data = [
            
            'suratkehilangan' => $randName,
        ];
    } else {
        echo "eror";
    }
      
        $model->update($id, $data);
        return $this->response->setJSON([
            'status' => true,
            'icon' => 'success',
            'title' => 'Upload Surat Berhasil!',
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