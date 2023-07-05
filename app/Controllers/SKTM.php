<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\KehilanganModel;
use App\Models\gajiModel;
use App\Models\KTPModel;
use App\Models\skckModel;
use App\Models\SKTMModel;
use App\Models\SPUModel;
use App\Models\UserModel;
use App\Models\rabModel;
use Dompdf\Dompdf;
use Config\Services;
use Dompdf\Options;

class SKTM extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new SKTMModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            if(session()->get('role') == 'warga'){
                $data = [
                    'userid' => $this->request->getPost('id'),
                    'tgl' => $this->request->getPost('tgl'),
                    'nik' => $this->request->getPost('nik'),
                    'no_kk' => $this->request->getPost('no_kk'),
                    'nama' => $this->request->getPost('nama'),
                    'jk' => $this->request->getPost('jk'),
                    'ttl' => $this->request->getPost('ttl'),
                    'stswarga' => $this->request->getPost('stswarga'),
                    'alamat' => $this->request->getPost('alamat'),
                    'nama_ayah' => $this->request->getPost('nama_ayah'),
                    'ttlayah' => $this->request->getPost('ttlayah'),
                    'agama' => $this->request->getPost('agama'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamatayah' => $this->request->getPost('alamatayah'),
                    'gaji' => $this->request->getPost('gaji'),
                    'keperluan' => $this->request->getPost('keperluan'),
                    'status' => 'new',
                    'suratsktm' => null,
                
                ];
                } else {
                    $isAdmin = $this->request->getVar('nama');
                    $dataUser = $user->find($isAdmin);
                    $data =[
                        'userid' => $isAdmin,
                        'tgl' => $this->request->getPost('tgl'),
                        'nik' => $dataUser['nik'],
                        'no_kk' => $dataUser['no_kk'],
                        'nama' => $dataUser['nama'],
                        'jk' => $dataUser['jk'],
                        'ttl' => $dataUser['ttl'],
                        'stswarga' => $dataUser['kawin'],
                        'alamat' => $dataUser['alamat'],
                        'nama_ayah' => $dataUser['nama_ayah'],
                        'ttlayah' => $dataUser['ttlayah'],
                        'agama' => $dataUser['agama'],
                        'pekerjaan' => $dataUser['pekerjaan'],
                        'alamatayah' => $dataUser['alamatayah'],
                        'gaji' => $this->request->getPost('gaji'),
                        'keperluan' => $this->request->getPost('keperluan'),
                        'status' => 'new',
                        'suratsktm' => null,
                    ];
                }
                $model->save($data);
                return $this->response->setJSON([
                    'status' => true,
                    'icon' => 'success',
                    'title' => 'Tambah Pengajuan Surat Keterangan Tidak Mampu Berhasil!',
                    'text' => 'Pop up ini akan hilang dalam 3 detik.',
                ]); 
            }
        $model->where('status', 'new')->set(['status' => 'diproses'])->update();
        return view('page/surat/dashboardSKTM',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
           
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $model->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }

    public function addstatic()
    {
        $model = new SKTMModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $data = [
                'tgl' => $this->request->getPost('tgl'),
                    'nik' => $this->request->getPost('nik'),
                    'no_kk' => $this->request->getPost('no_kk'),
                    'nama' => $this->request->getPost('nama'),
                    'jk' => $this->request->getPost('jk'),
                    'ttl' => $this->request->getPost('ttl'),
                    'stswarga' => $this->request->getPost('stswarga'),
                    'alamat' => $this->request->getPost('alamat'),
                    'nama_ayah' => $this->request->getPost('nama_ayah'),
                    'ttlayah' => $this->request->getPost('ttlayah'),
                    'agama' => $this->request->getPost('agama'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamatayah' => $this->request->getPost('alamatayah'),
                    'gaji' => $this->request->getPost('gaji'),
                    'keperluan' => $this->request->getPost('keperluan'),
                    'status' => $this->request->getPost('status'),
                    'suratsktm' => null,
            ];
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Pengajuan Surat Keterangan Tidak Mampu Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]); 
        }
        $model->where('status', 'new')->set(['status' => 'diproses'])->update();
        return view('page/surat/dashboardSKTM',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $model->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    }
    
    public function addadm(){
        $model = new SKTMModel();
        $user = new UserModel();
        $modelKehilangan = new KehilanganModel();
        $modelGaji = new gajiModel();
        $modelKTP = new KTPModel();
        $modelSKCK = new skckModel();
        $modelSPU = new SPUModel();
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $isAdmin = $this->request->getVar('nama');
            $dataUser = $user->find($isAdmin ? $isAdmin : session()->get('id'));
            $data = [
                        'tgl' => $this->request->getPost('tgl'),
                        'nik' => $dataUser['nik'],
                        'no_kk' => $dataUser['no_kk'],
                        'nama' => $dataUser['nama'],
                        'jk' => $dataUser['jk'],
                        'ttl' => $dataUser['ttl'],
                        'stswarga' => $dataUser['kawin'],
                        'alamat' => $dataUser['alamat'],
                        'nama_ayah' => $dataUser['nama_ayah'],
                        'ttlayah' => $dataUser['ttlayah'],
                        'agama' => $dataUser['agama'],
                        'pekerjaan' => $dataUser['pekerjaan'],
                        'alamatayah' => $dataUser['alamatayah'],
                        'gaji' => $this->request->getPost('gaji'),
                        'keperluan' => $this->request->getPost('keperluan'),
                        'status' => $this->request->getPost('status'),
                        'suratsktm' => null,
            ];
            $model->save($data);
            return $this->response->setJSON([
                'status' => true,
                'icon' => 'success',
                'title' => 'Tambah Pengajuan Surat KeteranganTidak Mampu Berhasil!',
                'text' => 'Pop up ini akan hilang dalam 3 detik.',
            ]); 
        }
        $model->where('status', 'new')->set(['status' => 'diproses'])->update();
        return view('page/surat/dashboardSKTM',[
            'content' => $model->findAll(),
            'user' => $user->where('role', 'warga')->findAll(),
            'isGajiNew' => $modelGaji->where('status', 'new')->first(),
            'isKehilanganNew' => $modelKehilangan->where('status', 'new')->first(),
            'isKTPNew' => $modelKTP->where('keterangan', 'new')->first(),
            'isSKCKNew' => $modelSKCK->where('status', 'new')->first(),
            'isSKTMNew' => $model->where('status', 'new')->first(),
            'isSPUNew' => $modelSPU->where('status', 'new')->first(),
        ]);
    
    }


    // Data Surat SKTM (read)
    public function dataSKTM()
    {
        $model = new SKTMModel();
        $data = $model->orderBy('created_at', 'desc')->findAll();
        return $this->response->setJSON($data);   
    }

    public function datasktmriwayat()
    {
        $model = new SKTMModel();
        $id = session()->get('id');
        return $this->response->setJSON($model->where('userid', $id)->findAll());
    }

    // Terima Surat SKTM (acc/tolak)
    public function terimaSKTM($id)
    {
        $sktmModel = new SKTMModel();
        $data = [
            'status' => 1
        ];
        $sktmModel->update($id, $data);
        return redirect()->to(base_url('Admin/dataPeserta'));
    }

    //Hapus Data Surat SKTM (delete)
    public function hapusSKTM($id)
    {
        $model = new SKTMModel();
        $model->where('id', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }


     //Edit Surat sktm
     public function editSKTM($id)
     {
        $model = new SKTMModel();
        $user = new UserModel();

        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {

            $data = [
                     'userid' => $this->request->getPost('id'),
                    'tgl' => $this->request->getPost('tgl'),
                    'nik' => $this->request->getPost('nik'),
                    'no_kk' => $this->request->getPost('no_kk'),
                    'nama' => $this->request->getPost('nama'),
                    'jk' => $this->request->getPost('jk'),
                    'ttl' => $this->request->getPost('ttl'),
                    'stswarga' => $this->request->getPost('stswarga'),
                    'alamat' => $this->request->getPost('alamat'),
                    'nama_ayah' => $this->request->getPost('nama_ayah'),
                    'ttlayah' => $this->request->getPost('ttlayah'),
                    'agama' => $this->request->getPost('agama'),
                    'pekerjaan' => $this->request->getPost('pekerjaan'),
                    'alamatayah' => $this->request->getPost('alamatayah'),
                    'gaji' => $this->request->getPost('gaji'),
                    'keperluan' => $this->request->getPost('keperluan'),
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
    $model = new SKTMModel();
    if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
        $pdf = $this->request->getFile('suratsktm');
        $randName = $pdf->getRandomName();

        if ($pdf->isValid() && ! $pdf->hasMoved()) {
            $pdf->move('./uploads',$randName);
        $data = [
            
            'suratsktm' => $randName,
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
        $model = new SKTMModel();
        $data = [
            'content' => $model->find($id),
        ];
        return view('page/pdf/SKTM', $data);
    }
}
    