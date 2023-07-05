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



class skck extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new skckModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            if(session()->get('role') == 'warga'){
                $data = [
                    'userid' => $this->request->getPost('id'),
                    'tgl' => $this->request->getPost('tgl'),
                    'nama' => $this->request->getPost('nama'),
                    'no_kk' => $this->request->getPost('no_kk'),
                    'nik' => $this->request->getPost('nik'),
                    'ttl' => $this->request->getPost('ttl'),
                    'jk' => $this->request->getPost('jk'),
                    'agama' => $this->request->getPost('agama'),
                    'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                    'kawin' => $this->request->getPost('kawin'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamat' => $this->request->getPost('alamat'),
                    'status' => 'new',
                    'surat' => null,
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
                        'ttl' => $dataUser['ttl'],
                        'jk' => $dataUser['jk'],
                        'agama' => $dataUser['agama'],
                        'kewarganegaraan' => $dataUser['kewarganegaraan'],
                        'kawin' => $dataUser['kawin'],
                        'pekerjaan' => $dataUser['pekerjaan'],
                        'alamat' => $dataUser['alamat'],
                        'status' =>  'new',
                        'surat' => null,
                    ];
                }
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat SKCK Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
               
            }
        $model->where('status', 'new')->set(['status' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/surat/dashboardSkck',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $model->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

    public function addstatic()
    {
        $model = new skckModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKTM = new SKTMModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                'nama' => $this->request->getPost('nama'),
                'no_kk' => $this->request->getPost('no_kk'),
                'nik' => $this->request->getPost('nik'),
                'ttl' => $this->request->getPost('ttl'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                'kawin' => $this->request->getPost('kawin'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'alamat' => $this->request->getPost('alamat'),
                'status' => $this->request->getPost('status'),
                'surat' => null,
            ];
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Pengajuan Surat Keterangan Catatan Kepolisian Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]); 
        }
        $model->where('status', 'new')->set(['status' => 'Pengajuan Sedang Diproses'])->update();
        return view('page/surat/dashboardSkck',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $model->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

    public function addadm(){
        $model = new skckModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
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
                'ttl' => $dataUser['ttl'],
                'jk' => $dataUser['jk'],
                'agama' => $dataUser['agama'],
                'kewarganegaraan' => $dataUser['kewarganegaraan'],
                'kawin' => $dataUser['kawin'],
                'pekerjaan' => $dataUser['pekerjaan'],
                'alamat' => $dataUser['alamat'],
                'status' =>  $this->request->getPost('status'),
                'surat' => null,
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
        return view('page/surat/dashboardSkck',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $model->where('status', 'new')->first(),
            'isSKTMNew' => $modelSKTM->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    
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
        $skckModel = new skckModel();
        $data = [
            'status' => 1
        ];
        $skckModel->update($id, $data);
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
        $user = new UserModel();

        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
   
            $data = [
                    'userid' => $this->request->getPost('id'),
                    'tgl' => $this->request->getPost('tgl'),
                    'nama' => $this->request->getPost('nama'),
                    'no_kk' => $this->request->getPost('no_kk'),
                    'nik' => $this->request->getPost('nik'),
                    'ttl' => $this->request->getPost('ttl'),
                    'jk' => $this->request->getPost('jk'),
                    'agama' => $this->request->getPost('agama'),
                    'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                    'kawin' => $this->request->getPost('kawin'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamat' => $this->request->getPost('alamat'),
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
    
     public function cetak($id)
     {
         $model = new skckModel();
         $data = [
             'content' => $model->find($id),
         ];
         return view('page/pdf/skck', $data);
     }

     }