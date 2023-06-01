<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
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
                            <form action="#" id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                  <input id="id"  class="form-control" name="id" hidden>
                                </div>

                            
                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Nama</label>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">NIK</label>
                                  <input id="nik" type="text" class="form-control" name="nik">
                                </div>

                               

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Keperluan</label>
                                  <select class="form-control" id="keperluan" name="keperluan">
                                    <option value="Hilang">Hilang</option>
                                    <option value="Belum Pernah Mengajukan">Belum Pernah Mengajukan</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3" id="statuskk" hidden>
                                <label for="exampleFormControlSelect1" class="ms-0">Status</label>
                                  <select class="form-control" id="keterangan" name="keterangan">
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>

                              
                                <div class="mt-3">
                                  <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="saveKK()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="modal fade" id="uploadkk" tabindex="-1" role="dialog" aria-labelledby="upload5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="upload5">Upload Surat Kartu Keluarga</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="formuploadkk">
                                    <div class="input-group input-group-static mb-3" id="fileuploadkk">
                                        <label for="Surat" class="custom-file-label"></label>
                                        <input class="custom-file-input" type="file" id="surat" name="surat">
                                        <input type="id" name="id" hidden>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="upload()">Simpan</button>
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keperluan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat</th>
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
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/pengantar/getkk.js') ?>"></script>
<script src="<?= base_url('js/pengantar/saveKK.js') ?>"></script>
<?= $this->endSection() ?>