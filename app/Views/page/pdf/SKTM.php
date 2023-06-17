<style>
  h1, h3, h5, h6 {
    text-align: center;
  }

  .container {
    width: 750px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    position: absolute;
  }

  
  .row {
    margin-top: 20px;
  }

  .my-row {
    display: flex;
    justify-content: flex-end;
  }

  .my-column {
    flex-grow: 1;
  }

  .my-column-end {
    margin-left: auto;
  }

  .rowkanan {
    justify-content: flex-end;
  }


  .kablogo {
    font-size: 2vw;
  }

  .alamatlogo {
    font-size: 1.5vw;
  }

  .kodeposlogo {
    font-size: 1.7vw;
  }

  .alamat-tujuan {
    margin-left: 50%;
  }

  .garis1 {
    border-top: 3px solid black;
    height: 2px;
    border-bottom: 1px solid black;
  }

  #logo {
    margin: auto;
    margin-left: 0%;
    margin-right: auto;
  }

  #tempat-tgl {
    margin-left: 120px;
  }

  #camat {
    text-align: center;
  }

  #nama-camat {
    margin-top: 100px;
    text-align: center;
  }

  #jenis {
    margin: auto;
  }

  #print-button {
    text-align: center;
    margin-top: 20px;
  }

  .print-button-container {
    text-align: right;
    margin-top: 20px;
  }
</style>

<div class="container">
  <header>
    <div class="row">
      <div class="my-row">
        <div class="my-column">
          <img src="<?= base_url('foto/logo.jpg') ?>" width="50px" height="50px" alt="Remote Image">
        </div>
        <div class="my-column print-button-container" id="print">
          <button type="button" class="btn btn-primary" onclick="printDocument()">Print</button>
        </div>
      </div>
      <div id="text-header" class="col-md-9" style="text-align: center;">
        <h6>PEMERINTAH KABUPATEN JEMBER</h6>
        <h2><strong>KECAMATAN JELBUK</strong></h2>
        <h2><strong>DESA PANDUMAN</strong></h2>
        <h6>WP9X+98J, Krajan Panduman, Panduman, Kec. Jelbuk, Kabupaten Jember, Jawa Timur 68192</h6>
      </div>      
    </div>
  </header>

  <hr class="garis1">
  
  <div id="jenis">
    <h3><u>SURAT KETERANGAN TIDAK MAMPU</u></h3>
  </div>

  <div id="pembuka">&emsp; &emsp; &emsp; Kami PJ Kepala Desa Panduman Kecamatan Jelbuk Jember, menerangkan dengan sebenarnya bahwa :</div>
  <div id="tempat-tgl">
    <table>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?= $content['nik'] ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>08.00 WIB</td>
      </tr>
      <tr>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>Aula PP PAUD dan Dikmas Jawa Tengah Jl. Diponegoro No 250 Ungaran</td>
      </tr>
      <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Nama Ayah</td>
        <td>:</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Keperluan</td>
        <td>:</td>
        <td>-</td>
      </tr>
    </table>
  </div>
  
  <div id="penutup">Orang tersebut di atas sampai dengan surat keterangan ini kami buat benar-benar penduduk desa Panduman Kecamatan Jelbuk Kabupaten Jember. Dan menurut sepengetahuan kami yang bersangkutan di atas dengan keadaan sosial ekonominya benar-benar tidak mampu.</div>

  <div id="ttd" class="rowkanan">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4" style="float: right;">
      <p id="camat"><strong>AN. KEPALA DESA PANDUMAN</strong></p>
      <p id="camat"><strong>Sekretaris Desa</strong></p>
      <div id="nama-camat"><strong><u>AHMAD SUPRIYADI</u></strong><br /></div>
    </div>    
  </div>
</div>

<script>
  function printDocument() {
    var printElement = document.getElementById("print");
    printElement.style.display = "none";
    window.print();
    printElement.style.display = "";
  }
</script>