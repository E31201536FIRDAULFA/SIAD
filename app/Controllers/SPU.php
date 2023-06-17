<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\SPUModel;
use App\Models\UserModel;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\KKModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;

class SPU extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new SPUModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKK = new KKModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'jk' => $this->request->getPost('jk'),
                'ttl' => $this->request->getPost('ttl'),
                'alamat' => $this->request->getPost('alamat'),
                'nama_usaha' => $this->request->getPost('nama_usaha'),
                'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                'alamat_usaha' => $this->request->getPost('alamat_usaha'),
                'status' => 'new',
                'suratspu' => null,
                
            ];
            $data['userid']=session()->get('id');
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Pengajuan Usaha Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        $model->where('status', 'new')->set(['status' => 'diproses'])->update();
        return view('page/surat/dashboardSPU',[
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKKNew' => $modelKK->where('keterangan', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $model->where('status', 'new')->first(),
        ]);
    }

        // Data Surat SPU (read)
    public function dataSPU()
    {
        $model = new SPUModel();
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);  
    }

    public function dataspuriwayat()
    {
        $model = new SPUModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
    }

    // Terima Surat SPU (acc/tolak)
    public function terimaSPU($id)
    {
        $userModel = new UserModel();
        $spuModel = new SPUModel();
        $data = [
            'status' => 1
        ];
        $spuModel->update($id, $data);
        return redirect()->to(base_url('Admin/dataPeserta'));
    }

    //Hapus Data Surat spu (delete)
    public function hapusspu($id)
    {
        $model = new SPUModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

 

       //Edit Surat sPU
       public function editSPU($id)
       {
          $model = new SPUModel();
          if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
              $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'jk' => $this->request->getPost('jk'),
                'ttl' => $this->request->getPost('ttl'),
                'alamat' => $this->request->getPost('alamat'),
                'nama_usaha' => $this->request->getPost('nama_usaha'),
                'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                'alamat_usaha' => $this->request->getPost('alamat_usaha'),
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
      $model = new SPUModel();
      if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
          $pdf = $this->request->getFile('suratspu');
          $randName = $pdf->getRandomName();
  
          if ($pdf->isValid() && ! $pdf->hasMoved()) {
              $pdf->move('./uploads',$randName);
          $data = [
              
              'suratspu' => $randName,
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

     public function riwayat()
     {
        $model = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'jk' => $this->request->getPost('jk'),
                'ttl' => $this->request->getPost('ttl'),
                'alamat' => $this->request->getPost('alamat'),
                'nama_usaha' => $this->request->getPost('nama_usaha'),
                'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                'alamat_usaha' => $this->request->getPost('alamat_usaha'),
                'status' => $this->request->getPost('status'),
                'suratspu' => $this->request->getPost('suratspu'),
                
            ];
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat SPU Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        return view('page/partials/Riwayat/spuriwayat');
    }

    public function download()
    {
        return view('page/partials/Riwayat/gajiriwayat');
    }
     }
    