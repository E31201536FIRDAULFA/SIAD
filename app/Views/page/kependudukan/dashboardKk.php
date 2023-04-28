<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div style="color:#00b300; background:#ccffcc; border:0px dashed #006600;padding:5px;margin:10px;">
                <b>Pengajuan pengantar Kartu Keluarga (KK)</b> bertujuan untuk mempermudah masyarakat untuk proses<b> Pembuatan KK Baru</b>. inputkan data masyarakat yang hendak membuat kartu keluarga baru dengan detail dan benar, lalu kirimkan file surat pengantar yang telah siap kepada masyarakat.
            </div>
            <div class="card-header pb-0">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-info btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pengajuan KK
              </button>
              <div class="circle-container">

            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                              <form>
                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tglKK" type="date" class="form-control">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Nama</label>
                                  <input id="namaKK" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">NIK</label>
                                  <input id="nikKK" type="text" class="form-control">
                                </div>

                        
                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Scan KTP</label>
                                  <input id="scanktpKK" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="statusKK">
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="pending">Pending</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Keterangan</label>
                                  <select class="form-control" id="keteranganKK">
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>
                                <div class="mt-3">
                                  <button type="button" onclick="saveKK()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Scan KTP</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer p-3">
                  <a class="btn bg-gradient-dark mb-0" href="<?= base_url('dashboard/pdf/pdfkk') ?>">Cetak Pdf</a>
                </div>
          </div>
        </div>
      </div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/KEPENDUDUKAN/kk/getKK.js') ?>"></script>
<script src="<?= base_url('js/KEPENDUDUKAN/kk/saveKK.js') ?>"></script>
<?= $this->endSection() ?>