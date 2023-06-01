<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use App\Models\KTPModel;
use App\Models\KKModel;
use App\Models\KehilanganModel;
use App\Models\skckModel;
use App\Models\SPUModel;
use App\Models\SKTMModel;
use App\Models\gajiModel;
use App\Models\APBDModel;

class PdfController extends Controller
{
    public function index()
    {
        $ktpModel = new KTPModel;
        $dataktp = $ktpModel->get()->getResultArray();
        $data = [
            'dataktp' => $dataktp,
        ];
        return view('page/pdf/ktp', $data);
    }

    public function generatektp()
    {
        $ktpModel = new KTPModel;
        $dataktp = $ktpModel->get()->getResultArray();
        $data = [
            'dataktp' => $dataktp,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/ktp.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generateKehilangan()
    {
        $KehilanganModel = new KehilanganModel;
        $dataKehilangan = $KehilanganModel->get()->getResultArray();
        $data = [
            'dataKehilangan' => $dataKehilangan,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/.Kehilanganhp', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generatekk()
    {
        $kkModel = new KKModel;
        $datakk = $kkModel->get()->getResultArray();
        $data = [
            'datakk' => $datakk,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/kk.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generateSPU()
    {
        $SPUModel = new SPUModel;
        $dataSPU = $SPUModel->get()->getResultArray();
        $data = [
            'dataSPU' => $dataSPU,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/SPU.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generateSKTM()
    {
        $SKTMModel = new SKTMModel;
        $dataSKTM = $SKTMModel->get()->getResultArray();
        $data = [
            'dataSKTM' => $datakk,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/SKTM.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generateskck()
    {
        $skckModel = new skckModel;
        $dataskck = $skckModel->get()->getResultArray();
        $data = [
            'dataskck' => $dataskck,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/skck.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generategaji()
    {
        $gajiModel = new gajiModel;
        $datagaji = $gajiModel->get()->getResultArray();
        $data = [
            'datagaji' => $datagaji,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/gaji.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }

    public function generateAPBD()
    {
        helper('number');
        $APBDModel = new APBDModel;
        $startDate = $this->request->getVar('start_date'); // Replace with your start date
        $endDate = $this->request->getVar('end_date');   // Replace with your end date
        
        $results = $APBDModel->where('tgl >=', $startDate)
                             ->where('tgl <=', $endDate)
                             ->findAll();
        $data = [
            'dataAPBD' => $results,
        ];
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('page/pdf/APBD.php', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        

    }
    
}