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
    line-height: 10px;
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
          <img src="<?= base_url('foto/logo.jpg') ?>" width="100px" height="100px" alt="Remote Image">
        </div>
        <div class="my-column print-button-container" id="print">
          <button type="button" class="btn btn-primary" onclick="printDocument()">Print</button>
        </div>
      </div>
      </div>
  </header>
  <div id="jenis" style="text-align: center;">
        <h2><strong> PEMERINTAH KABUPATEN JEMBER</strong></h2>
        <h2><strong>KECAMATAN JELBUK</strong></h2>
        <h2><strong>DESA PANDUMAN</strong></h2>
        <h6>WP9X+98J, Krajan Panduman, Panduman, Kec. Jelbuk, Kabupaten Jember, Jawa Timur 68192</h6>
      </div>      

  

<br><br>
<div id="pembuka">&emsp; &emsp; &emsp; Kami PJ Kepala Desa Panduman Kecamatan Jelbuk Jember, menerangkan dengan sebenarnya bahwa :</div>
  <div id="pembuka">
  <table  width="100%" cellspacing="1" border="1">
        <tr>
            <th>Tgl</th>
            <th>Penyelenggara</th>
            <th>Jenis</th>
            <th>Anggaran</th>
            <th>Sumber Dana</th>
            <th>Tgl Pembahasan</th>
           
        </tr>

        <tr>
            <td align="center"><?= $content['tgl']; ?></td>
            <td align="center"><?= $content['penyelenggara']; ?></td>
            <td align="center"><?= $content['jenis']; ?></td>
            <td align="center"><?= $content['anggaran']; ?></td>
            <td align="center"><?= $content['sumberdana']; ?></td>
            <td align="center"><?= $content['tgl_pembahasan']; ?></td>
            

        </tr>
</table>
  </div>

  <br><br>
  <div id="pembuka">
  <table  width="100%" cellspacing="1" border="1">
        <tr>
            <th>Tgl</th>
            <th>Uraian</th>
            <th>Tgl Pembahasan</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Anggaran Yang Dibutuhkan</th>
            <th>Keterangan</th>
        </tr>

        <tr>
            <td align="center"><?= $content['tgl']; ?></td>
            <td align="center"><?= $content['uraian']; ?></td>
            <td align="center"><?= $content['tgl_pembahasan']; ?></td>
            <td align="center"><?= $content['jml']; ?></td>
            <td align="center"><?= $content['satuan']; ?></td>
            <td align="center"><?= $content['harga']; ?></td>
            <td align="center"><?= $content['anggarankeluar']; ?></td>
            <td align="center"><?= $content['ket']; ?></td>

        </tr>
</table>
  </div>
 
<script>
  function printDocument() {
    var printElement = document.getElementById("print");
    printElement.style.display = "none";
    window.print();
    printElement.style.display = "";
  }
</script>