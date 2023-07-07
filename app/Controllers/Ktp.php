<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\rabModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;
use App\Models\UserModel;
use Dompdf\Dompdf;
use Config\Services;
use Dompdf\Options;


class KTP extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new KTPModel();
        $user = new UserModel();
        $rab = new rabModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            if(session()->get('role') == 'warga'){
                $data = [
                    'userid' => $this->request->getPost('id'),
                    'tgl' => $this->request->getPost('tgl'),
                    'nama' => $this->request->getPost('nama'),
                    'nik' => $this->request->getPost('nik'),
                    'no_kk' => $this->request->getPost('no_kk'),
                    'keperluan' => $this->request->getPost('keperluan'),
                    'keterangan' => 'new',
                    'surat' => null,
                ];
                } else {
                    $isAdmin = $this->request->getVar('nama');
                    $dataUser = $user->find($isAdmin);
                    $data =[
                        'userid' => $isAdmin['id'],
                        'tgl' => $this->request->getPost('tgl'),
                        'nama' => $dataUser['nama'],
                        'nik' => $dataUser['nik'],
                        'no_kk' => $dataUser['no_kk'],
                        'keperluan' => $this->request->getPost('keperluan'),
                        'keterangan' => 'new',
                        'surat' => null,
                    ];
                }
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Pengantar KTP Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        $model->where('keterangan', 'new')->set(['keterangan' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/kependudukan/dashboardKtp',[
             'content' => $model->orderBy('created_at', 'DESC')->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $model->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

    public function addstatic()
    {
        $model = new KTPModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'no_kk' => $this->request->getPost('no_kk'),
                'keperluan' => $this->request->getPost('keperluan'),
                'keterangan' => $this->request->getPost('keterangan'),
                'surat' => null,
            ];
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Pengajuan Surat Pengantar Pembuatan KTP Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]); 
        }
        $model->where('keterangan', 'new')->set(['keterangan' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/kependudukan/dashboardKtp',[
             'content' => $model->orderBy('created_at', 'DESC')->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $model->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),

        ]);
    }

    public function addadm(){
        $model = new KTPModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $isAdmin = $this->request->getVar('nama');
            $dataUser = $user->find($isAdmin ? $isAdmin : session()->get('id'));
            $data = [

                        'tgl' => $this->request->getPost('tgl'),
                        'nama' => $dataUser['nama'],
                        'nik' => $dataUser['nik'],
                        'no_kk' => $dataUser['no_kk'],
                        'keperluan' => $this->request->getPost('keperluan'),
                        'keterangan' => $this->request->getPost('keterangan'),
                        'surat' => null,
            ];
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Pengajuan Surat Pengantar Pembuatan KTP Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]); 
        }
        $model->where('keterangan', 'new')->set(['keterangan' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/kependudukan/dashboardKtp',[
             'content' => $model->orderBy('created_at', 'DESC')->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $model->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),

        ]);
    
    }


// Data Pengajuan KTP (read)
    public function dataKTP()
    {
        $model = new KTPModel();
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);   
    }

    public function dataKTPriwayat()
    {
        $model = new KTPModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
    }

    //Hapus Data Surat KTP (delete)
    public function hapusKTP($id)
    {
        $model = new KTPModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }


   //Edit Surat KTP
   public function editKTP($id)
   {
    $model = new KTPModel();
    $user = new UserModel();

    $modelSPU = new SPUModel();
      if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
        $data = [
            'userid' => $this->request->getPost('id'),
            'tgl' => $this->request->getPost('tgl'),
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'no_kk' => $this->request->getPost('no_kk'),
            'keperluan' => $this->request->getPost('keperluan'),
            'keterangan' => $this->request->getPost('keterangan'),
         
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
  $model = new KTPModel();
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
    
    public function cetak($id)
    {
        $model = new KTPModel();
        $data = [
            'content' => $model->find($id),
        ];
        return view('page/pdf/ktp', $data);
    }
}