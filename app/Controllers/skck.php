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
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'ttl' => $this->request->getPost('ttl'),
                    'jk' => $this->request->getPost('jk'),
                    'agama' => $this->request->getPost('agama'),
                    'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                    'perkawinan' => $this->request->getPost('perkawinan'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamat' => $this->request->getPost('alamat'),
                    'status' => null,
                    'surat' => null,
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
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);   
    }

    public function dataskckriwayat()
    {
        $model = new skckModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
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
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                'perkawinan' => $this->request->getPost('perkawinan'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'status' =>  $this->request->getPost('status'),
              
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
    $model = new skckModel();
    if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
        $pdf = $this->request->getFile('surat');
        $randName = $pdf->getRandomName();

        if ($pdf->isValid() && ! $pdf->hasMoved()) {
            $pdf->move('./uploads',$randName);
        $data = [
            
            'surat' => $randName,
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