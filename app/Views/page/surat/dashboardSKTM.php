<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div style="color:#00b300; background:#ccffcc; border:0px dashed #006600;padding:5px;margin:10px;">
                <b>Pengajuan Surat Keterangan Tidak Mampu</b> merupakan surat yang dibuat untuk mempermudah masyarakat dalam menjelaskan bahwa perorangan merupakan warga<b> Tidak Mampu(Berpenghasilan dibawah 700rb/bln)</b>. inputkan data masyarakat yang hendak mengajukan surat keterangan tidak mampu dengan detail dan benar, lalu kirimkan file surat yang telah siap kepada masyarakat.
          </div>
            <div class="card-header pb-0">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-lg btn-info btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pengajuan Surat SKTM
              </button>
            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah SKTM</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">No Surat</label>
                                  <input type="text" class="form-control" id="id" name="id" hidden>
                                  <input id="nsurat" type="text" class="form-control" name="nsurat">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">NIK</label>
                                  <input id="nik" type="text" class="form-control" name="nik">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Nama</label>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" name="jk">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">TTL</label>
                                  <input id="ttl" type="text" class="form-control" name="ttl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Warga</label>
                                  <select class="form-control" id="stswarga" name="stswarga">
                                    <option value="menikah">menikah</option>
                                    <option value="belum menikah">belum menikah</option>
                                  </select>
                                </div>
                                
                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Nama Ayah</label>
                                  <input id="nama_ayah" type="text" class="form-control" name="nama_ayah">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Ttl Ayah</label>
                                  <input id="ttlayah" type="date" class="form-control" name="ttlayah">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Agama</label>
                                  <input id="agama" type="text" class="form-control" name="agama">
                                </div>
                                

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Pekerjaan</label>
                                  <input id="pekerjaan" type="text" class="form-control" name="pekerjaan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Alamat Ayah</label>
                                  <input id="alamatayah" type="text" class="form-control" name="alamatayah">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Gaji</label>
                                  <input id="gaji" type="text" class="form-control" name="gaji">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Keperluan</label>
                                  <input id="keperluan" type="text" class="form-control" name="keperluan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="diproses">Diproses</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Surat SKTM</label>
                                  <input id="suratsktm" type="text" class="form-control" name="suratsktm">
                                </div>

                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="saveSktm()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="table">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Warga</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Ayah</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL Ayah</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Ayah</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keperluan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat SKTM</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-footer p-3">
                  <a class="btn bg-gradient-dark mb-0" href="<?= base_url('dashboard/pdf/pdfSKTM') ?>">Cetak Pdf</a>
      </div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/surat/sktm/getSktm.js') ?>"></script>
<script src="<?= base_url('js/surat/sktm/saveSktm.js') ?>"></script>
<?= $this->endSection() ?>