<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\SPUModel;
use App\Models\UserModel;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\rabModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use Dompdf\Dompdf;
use Config\Services;
use Dompdf\Options;

class SPU extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new SPUModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            if(session()->get('role') == 'warga'){
                $data = [
                  'userid' => $this->request->getPost('id'),
                  'tgl' => $this->request->getPost('tgl'),
                  'nama' => $this->request->getPost('nama'),
                  'nik' => $this->request->getPost('nik'),
                  'no_kk' => $this->request->getPost('no_kk'),
                  'jk' => $this->request->getPost('jk'),
                  'ttl' => $this->request->getPost('ttl'),
                  'alamat' => $this->request->getPost('alamat'),
                  'nama_usaha' => $this->request->getPost('nama_usaha'),
                  'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                  'alamat_usaha' => $this->request->getPost('alamat_usaha'),
                  'status' => 'new',
                  'suratspu' => null,
                ];
              
                  } else {
                      $isAdmin = $this->request->getVar('nama');
                      $dataUser = $user->find($isAdmin);
                      $data =[
                          'userid' => $isAdmin,
                          'tgl' => $this->request->getPost('tgl'),
                          'nama' => $dataUser['nama'],
                          'nik' => $dataUser['nik'],
                          'no_kk' => $dataUser['no_kk'],
                          'jk' => $dataUser['jk'],
                          'ttl' => $dataUser['ttl'],
                          'alamat' => $dataUser['alamat'],
                          'nama_usaha' => $this->request->getPost('nama_usaha'),
                          'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                          'alamat_usaha' => $this->request->getPost('alamat_usaha'),
                          'status' => 'new',
                          'suratspu' => null,
                      ];
                  }
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
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
           
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $model->where('status', 'new')->first(),
        ]);
    }

    public function addstatic()
    {
        $model = new SPUModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'no_kk' => $this->request->getPost('no_kk'),
                'jk' => $this->request->getPost('jk'),
                'ttl' => $this->request->getPost('ttl'),
                'alamat' => $this->request->getPost('alamat'),
                'nama_usaha' => $this->request->getPost('nama_usaha'),
                'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                'alamat_usaha' => $this->request->getPost('alamat_usaha'),
                'status' => $this->request->getPost('status'),
                'suratspu' => null,
            ];
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
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $model->where('status', 'new')->first(),
        ]);
    }

    public function addadm(){
        $model = new SPUModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $isAdmin = $this->request->getVar('nama');
            $dataUser = $user->find($isAdmin ? $isAdmin : session()->get('id'));
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $dataUser['nama'],
                'nik' => $dataUser['nik'],
                'no_kk' => $dataUser['no_kk'],
                'jk' => $dataUser['jk'],
                'ttl' => $dataUser['ttl'],
                'alamat' => $dataUser['alamat'],
                'nama_usaha' => $this->request->getPost('nama_usaha'),
                'jenis_usaha' => $this->request->getPost('jenis_usaha'),
                'alamat_usaha' => $this->request->getPost('alamat_usaha'),
                'status' => $this->request->getPost('status'),
                'suratspu' => null,
            ];
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
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
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
        $user = new UserModel();
        
          if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {

              $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'no_kk' => $this->request->getPost('no_kk'),
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
  
       public function ajukan()
       {
           $user = new UserModel();
           $dataUser = $user->find(session()->get('id'));
           return $this->response->setJSON($dataUser);
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

    public function cetak($id)
    {
        $model = new SPUModel();
        $data = [
            'content' => $model->find($id),
        ];
        return view('page/pdf/SPU', $data);
    }
     }
    