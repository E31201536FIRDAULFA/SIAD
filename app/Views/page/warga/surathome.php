<?= $this->section('content') ?>
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan KTP</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal4">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <form id="form">
                               <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                  <input id="id"  name="id" hidden>
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
                                  <label class="form-label">Scan KK</label>
                                  <input id="scankk" type="text" class="form-control" name="scankk">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="pending">Pending</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Keterangan</label>
                                  <select class="form-control" id="keterangan" name="keterangan">
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>


                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="saveKtp()">Simpan</button>
                                </div>
                            </form>
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan KK</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal5">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <form id="formKK">
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
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Surat Saya</p>
                <h4 class="mb-0">SKCK</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <a class="btn bg-gradient-dark mb-0" href="<?= base_url('dashboard/riwayat/rskck') ?>">Cek Riwayat</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Surat Saya</p>
                <h4 class="mb-0">SKTM</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <a class="btn bg-gradient-success mb-0" href="<?= base_url('dashboard/riwayat/rsktm') ?>">Cek Riwayat</a>
            </div>
          </div>
    </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Surat Saya</p>
                <h4 class="mb-0">Surat Pengajuan Usaha</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <a class="btn bg-gradient-dark mb-0" href="<?= base_url('dashboard/riwayat/rspu') ?>">Cek Riwayat</a>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Surat Saya</p>
                <h4 class="mb-0">Keterangan Slip Gaji</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <a class="btn bg-gradient-success mb-0" href="<?= base_url('dashboard/riwayat/rgaji') ?>">Cek Riwayat</a>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan KK</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            <a class="btn bg-gradient-dark mb-0" href="<?= base_url('dashboard/riwayat/rkK') ?>">Cek Riwayat</a>
            </div>
          </div>
        </div>
      </div>

      <?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/surat/sktm/getSktm.js') ?>"></script>
<script src="<?= base_url('js/surat/sktm/saveSktm.js') ?>"></script>
<script src="<?= base_url('js/surat/kehilangan/getKehilangan.js') ?>"></script>
<script src="<?= base_url('js/surat/kehilangan/saveKehilangan.js') ?>"></script>
<script src="<?= base_url('js/surat/spu/getSpu.js') ?>"></script>
<script src="<?= base_url('js/surat/spu/saveSpu.js') ?>"></script>
<script src="<?= base_url('js/surat/skck/getSkck.js') ?>"></script>
<script src="<?= base_url('js/surat/skck/saveSkck.js') ?>"></script>
<script src="<?= base_url('js/surat/gaji/getGaji.js') ?>"></script>
<script src="<?= base_url('js/surat/gaji/saveGaji.js') ?>"></script>
<script src="<?= base_url('js/KEPENDUDUKAN/ktp/getKtp.js') ?>"></script>
<script src="<?= base_url('js/KEPENDUDUKAN/ktp/saveKtp.js') ?>"></script>
<script src="<?= base_url('js/KEPENDUDUKAN/kk/getKK.js') ?>"></script>
<script src="<?= base_url('js/KEPENDUDUKAN/kk/saveKK.js') ?>"></script>
<?= $this->endSection() ?>

