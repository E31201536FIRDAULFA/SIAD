<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-info btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Anggaran
              </button>
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
                            <form action="#" id="form">
                              <input type="text" name="id" id="id" hidden>
                            <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Penyelenggara</label>
                                  <input id="penyelenggara" type="text" class="form-control" name="penyelenggara">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Anggaran</label>
                                  <select class="form-control" id="jenis" name="jenis">
                                    <option value="Pendapatan Asli Desa">Pendapatan Asli Desa</option>
                                    <option value="Dana Desa">Dana Desa</option>
                                    <option value="Alokasi  Dana Desa">Alokasi  Dana Desa</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Sumber Dana</label>
                                  <input id="sumberdana" type="text" class="form-control" name="sumberdana">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Anggaran</label>
                                  <input id="anggaran" type="number" class="form-control" name="anggaran">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tgl Pembahasan</label>
                                  <input id="tgl_pembahasan" type="date" class="form-control" name="tgl_pembahasan">
                                </div>

                                <div class="mt-3">
                                  <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="saveApbd()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="modal fade" id="eksporpdf" tabindex="-1" role="dialog" aria-labelledby="upload14" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="upload14">Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('dashboard/pdf/pdfAPBD') ?>">
                                    <div class="input-group input-group-static mb-3" id="fileuploadgaji">
                                        <label for="Surat" class="custom-file-label">Tanggal Mulai</label>
                                        <input class="custom-file-input" type="date" id="start_date" name="start_date">
                                    </div>

                                    <div class="input-group input-group-static mb-3" id="fileuploadgaji">
                                        <label for="Surat" class="custom-file-label">Tanggal Selesai</label>
                                        <input class="custom-file-input" type="date" id="end_date" name="end_date">
                                    </div>

                                  <button type="submit" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Ekspor PDF</button>
                         
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penyelenggara</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Anggaran</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Anggaran</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sumber Dana</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pembahasan</th>
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
      <button type="button" class="btn btn-info btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#eksporpdf">
                Ekspor
              </button>
      </div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/getapbd.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/saveApbd.js') ?>"></script>
<?= $this->endSection() ?>