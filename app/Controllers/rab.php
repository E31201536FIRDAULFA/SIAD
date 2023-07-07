<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\APBDModel;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\rabModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;

class rab extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new APBDModel();
        $modelKehilangan = new KehilanganModel();
        $rab = new rabModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'bidang' => $this->request->getPost('bidang'),
                'pelaksana' => $this->request->getPost('pelaksana'),
                'anggaran' => $this->request->getPost('anggaran'),
               
            ];
                $rab->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Anggaran Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
            $rab = new rabModel();
        return view('page/keuangan/dashboardrab',[
            'content' => $rab->orderBy('created_at', 'DESC')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

// Data Pengajuan apbd (read)
    public function datarab()
    {
        $model = new rabModel();
        return $this->response->setJSON($model->findAll());
    }


    //Hapus Data Surat apbd (delete)
    public function hapusrab($id)
    {
        $model = new rabModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

     //Edit Surat rab
     public function editrab($id)
     {
        $model = new rabModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $id = $this->request->getPost('id');
                $data = [
                    
                    'tgl' => $this->request->getPost('tgl'),
                    'bidang' => $this->request->getPost('bidang'),
                    'pelaksana' => $this->request->getPost('pelaksana'),
                    'anggaran' => $this->request->getPost('anggaran'),
                
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