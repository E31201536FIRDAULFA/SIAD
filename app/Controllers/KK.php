<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\KKModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;

class KK extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new KKModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'keperluan' => $this->request->getPost('keperluan'),
                'keterangan' => 'new',
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
        $model->where('keterangan', 'new')->set(['keterangan' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/kependudukan/dashboardKk',[
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKKNew' => $model->where('keterangan', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

// Data Pengajuan KK (read)
    public function dataKK()
    {
        $model = new KKModel();
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);   
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
              $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'keperluan' => $this->request->getPost('keperluan'),
                'keterangan' =>$this->request->getPost('keterangan'),
              
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
      $model = new KKModel();
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