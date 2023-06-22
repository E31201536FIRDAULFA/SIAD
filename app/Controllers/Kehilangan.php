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
use App\Models\UserModel;
use Dompdf\Dompdf;
use Config\Services;
use Dompdf\Options;


class Kehilangan extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new KehilanganModel();
        $user = new UserModel();
        $modelGaji = new gajiModel();
        $modelKK = new KKModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $isAdmin = $this->request->getVar('nama');
            $dataUser = $user->find($isAdmin ? $isAdmin : session()->get('id'));
            $data = [
                'userid' => $dataUser['id'],
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $dataUser['nama'],
                'nik' => $dataUser['nik'],
                'jk' => $dataUser['jk'],
                'pekerjaan' => $dataUser['pekerjaan'],
                'alamat' => $dataUser['alamat'],
                'keperluan' => $this->request->getPost('keperluan'),
                'ket' => $this->request->getPost('ket'),
                'status' => 'new',
                'suratkehilangan' => null,
            ];
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Kehilangan Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]);
        }

        $model->where('status', 'new')->set(['status' => 'diproses'])->update();
        return view('page/surat/dashboardKehilangan',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $model->where('status', 'new')->first(),
            'isKKNew' => $modelKK->where('keterangan', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
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
          $kehilanganModel = new KehilanganModel();
          $data = [
              'status' => 'diterima'
          ];
          $kehilanganModel->update($id, $data);
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

    public function cetak($id)
    {
        $model = new KehilanganModel();
        $data = [
            'content' => $model->find($id),
        ];
        return view('page/pdf/Kehilangan', $data);
    }
    }