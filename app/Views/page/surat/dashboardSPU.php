<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-lg btn-info btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pengajuan Surat SPU
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
                            <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">No Surat</label>
                                  <input type="text" class="form-control" id="id" name="id" hidden>
                                  <input id="nsurat" type="text" class="form-control" name="nsurat">
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Nama</label>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">NIK</label>
                                  <input id="nik" type="text" class="form-control" name="nik">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" name="jk">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">TTL</label>
                                  <input id="ttl" type="date" class="form-control" name="ttl">
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">alamat</label>
                                  <input id="alamat" type="text" class="form-control" name="alamat">
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Usaha</label>
                                  <input id="nama_usaha" type="text" class="form-control" name="nama_usaha">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Usaha</label>
                                  <select class="form-control" id="jenis_usaha" name="jenis_usaha">
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="PT">PT</option>
                                  </select>
                                </div>

                              
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Alamat Usaha</label>
                                  <input id="alamat_usaha" type="text" class="form-control" name="alamat_usaha">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="diproses">Diproses</option>
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                  </select>
                                </div>
                              
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Surat</label>
                                  <input id="suratspu" type="text" class="form-control" name="suratspu">
                                </div>

                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="saveSpu()">Simpan</button>
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usaha</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Usaha</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Usaha</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat SPU</th>
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
<script src="<?= base_url('js/surat/spu/getSpu.js') ?>"></script>
<script src="<?= base_url('js/surat/spu/saveSpu.js') ?>"></script>
<?= $this->endSection() ?>