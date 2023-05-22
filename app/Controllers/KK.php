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
                'keperluan' => $this->request->getPost('keperluan'),
                'keterangan' => null,
                'surat' => null,
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

    public function datakkriwayat()
    {
        $model = new KKModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
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

    
     //Edit Surat KK
     public function editKK($id)
     {
        $model = new KKModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $pdf = $this->request->getFile('surat');
            $randName = $pdf->getRandomName();

            if ($pdf->isValid() && ! $pdf->hasMoved()) {
                $pdf->move('./uploads',$randName);
                $data = [
                    'tgl' => $this->request->getPost('tgl'),
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'keperluan' => $this->request->getPost('keperluan'),
                    'keterangan' => $this->request->getPost('keterangan'),
                    'surat' => $randName,
                
            ];
        } else {
            echo "eror";
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
    
    public function download()
    {
        return view('page/partials/Riwayat/gajiriwayat');
    }
}