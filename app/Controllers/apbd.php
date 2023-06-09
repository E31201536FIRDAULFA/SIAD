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

class apbd extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new APBDModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $rab = new rabModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'bidang' => $this->request->getPost('bidang'),
                'kepentingan' => $this->request->getPost('kepentingan'),
                'penyelenggara' => $this->request->getPost('penyelenggara'),
                'jenis' => $this->request->getPost('jenis'),
                'anggaran' => $this->request->getPost('anggaran'),
                'sumberdana' => $this->request->getPost('sumberdana'),
                'tgl_pembahasan' => $this->request->getPost('tgl_pembahasan'),
                'uraian' => $this->request->getPost('uraian'),
                'jml' => $this->request->getPost('jml'),
                'satuan' => $this->request->getPost('satuan'),
                'harga' => $this->request->getPost('harga'),
                'anggarankeluar' => $this->request->getPost('anggarankeluar'),
                'ket' => $this->request->getPost('ket'),
            ];
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Anggaran Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/keuangan/dashboardApbd',[
            'content' => $model->orderBy('created_at', 'DESC')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
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
                    'bidang' => $this->request->getPost('bidang'),
                    'kepentingan' => $this->request->getPost('kepentingan'),
                    'penyelenggara' => $this->request->getPost('penyelenggara'),
                    'jenis' => $this->request->getPost('jenis'),
                    'anggaran' => $this->request->getPost('anggaran'),
                    'sumberdana' => $this->request->getPost('sumberdana'),
                    'tgl_pembahasan' => $this->request->getPost('tgl_pembahasan'),
                    'uraian' => $this->request->getPost('uraian'),
                    'jml' => $this->request->getPost('jml'),
                    'satuan' => $this->request->getPost('satuan'),
                    'harga' => $this->request->getPost('harga'),
                    'anggarankeluar' => $this->request->getPost('anggarankeluar'),
                    'ket' => $this->request->getPost('ket'),
                
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