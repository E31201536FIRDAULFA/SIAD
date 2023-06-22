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


class gaji extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new gajiModel();
        $modelKK = new KKModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        $modelKehilangan = new KehilanganModel();
        $modelUser = new UserModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $isAdmin = $this->request->getVar('nama');
            $dataUser = $modelUser->find($isAdmin ? $isAdmin : session()->get('id'));
            $data = [
                'userid' => $dataUser['id'],
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $dataUser['nama'],
                'nik' => $dataUser['nik'],
                'ttl' => $dataUser['ttl'],
                'pekerjaan' => $dataUser['pekerjaan'],
                'no_kip' => $this->request->getPost('no_kip'),
                'no_kis' => $this->request->getPost('no_kis'),
                'ket' => $this->request->getPost('ket'),
                'status' => 'new',
                'Surat' => null,
            ];
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Pengajuan Surat Ket Penghasilan Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]); 
        }
        $model->where('status', 'new')->set(['status' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/surat/dashboardGaji',[
            'content' => $model->findAll(),
            'user' => $modelUser->where('role', 'warga')->findAll(),
            'isGajiNew' => $model->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKKNew' => $modelKK->where('keterangan', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

    // Data Surat gaji (read)
    public function datagaji()
    {
        $model = new gajiModel();
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);
    }

    public function datagajiriwayat()
    {
        $model = new gajiModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
    }

    // Terima Surat gaji (acc/tolak)
    public function terimagaji($id)
    {
        $gajiModel = new gajiModel();
        $data = [
            'status' => 1
        ];
        $gajiModel->update($id, $data);
        return redirect()->to(base_url('Admin/dataPeserta'));
    }

    //Hapus Data Surat gaji (delete)
    public function hapusgaji($id)
    {
        $model = new gajiModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }

     //Edit Surat gaji
     public function editgaji($id)
     {
        $model = new gajiModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'no_kip' => $this->request->getPost('no_kip'),
                'no_kis' => $this->request->getPost('no_kis'),
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

      //Upload Surat 
      public function upload($id)
      {
         $model = new gajiModel();
         if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
             $pdf = $this->request->getFile('Surat');
             $randName = $pdf->getRandomName();
 
             if ($pdf->isValid() && ! $pdf->hasMoved()) {
                 $pdf->move('./uploads',$randName);
             $data = [
                 
                 'Surat' => $randName,
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
        $model = new gajiModel();
        $data = [
            'content' => $model->find($id),
        ];
        return view('page/pdf/gaji', $data);
    }
}