<?= $this->section('content') ?>
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Pengantar KTP</h5>
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
                                <label for="exampleFormControlSelect1" class="ms-0">Keperluan</label>
                                  <select class="form-control" id="keperluan" name="keperluan">
                                    <option value="Belum Pernah Mengajukan">Belum Pernah Mengajukan</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Upload Scan KK</label>
                                  <input id="kk" type="file" class="form-control" name="kk">
                                </div>


                                <div class="mt-3">
                                <button type="button" onclick="Ktpsubmit()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
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
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Surat Saya</p>
                <h4 class="mb-0">Surat Kehilangan</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal6">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Surat Kehilangan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                          <div class="modal-body">
                            <form id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglkehilangan" type="date" class="form-control" >
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keperluan</label>
                                  <input id="keperluankehilangan" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keterangan</label>
                                  <input id="ketkehilangan" type="text" class="form-control">
                                </div>

                               

                                <div class="mt-3">
                                <button type="button" onclick="saveKehilangan()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
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
                <h4 class="mb-0">Pengajuan SKCK</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn bg-gradient-dark btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal7">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pengajuan SKCK</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                              <form action="#" id="form">
                                <div class="mt-3">
                                  <button type="button" onclick="saveSkck()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Ajukan SKCK</button>
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan SKTM</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal8">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan SKTM</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                            <form action="#" id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tglsktm" type="date" class="form-control" name="tglsktm">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Nama Ayah</label>
                                  <input id="nama_ayahsktm" type="text" class="form-control" name="nama_ayahsktm">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Ttl Ayah</label>
                                  <input id="ttlayahsktm" type="date" class="form-control" name="ttlayahsktm">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Alamat Ayah</label>
                                  <input id="alamatayahsktm" type="text" class="form-control" name="alamatayahsktm">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Gaji</label>
                                  <input id="gajisktm" type="text" class="form-control" name="gajisktm">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">Keperluan</label>
                                  <input id="keperluansktm" type="text" class="form-control" name="keperluansktm">
                                </div>

                                <div class="mt-3">
                                  <button type="button" onclick="saveSktm()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
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
        

      
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan Surat Usaha</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn bg-gradient-dark btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal10">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Usaha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                            <form action="#" id="form">
                            <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input id="tglspu" type="date" class="form-control">
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Usaha</label>
                                  <input id="nama_usahaspu" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Usaha</label>
                                  <select class="form-control" id="jenis_usahaspu">
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="PT">PT</option>
                                  </select>
                                </div>
                              
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Alamat Usaha</label>
                                  <input id="alamat_usahaspu" type="text" class="form-control">
                                </div>

                                <div class="mt-3">
                                  <button type="button" onclick="saveSpu()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0"> Surat Ket Penghasilan</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal9">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Ket Penghasilan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                            <form action="#" id="form">
                            <input hidden id="id" name="id">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglgaji" type="date" class="form-control">
                                  <input id="id"  name="id" hidden>
                                </div>
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No KIP</label>
                                  <input id="no_kipgaji" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No KIS</label>
                                  <input id="no_kisgaji" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keterangan</label>
                                  <input id="ketgaji" type="text" class="form-control">
                                </div>


                                <div class="mt-3">
                                  <button type="button" onclick="saveGaji()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
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


      <?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/riwayat/sktm/Sktm.js') ?>"></script>
<script src="<?= base_url('js/riwayat/sktm/saveSktm.js') ?>"></script>
<script src="<?= base_url('js/riwayat/kehilangan/Kehilangan.js') ?>"></script>
<script src="<?= base_url('js/riwayat/kehilangan/saveKehilangan.js') ?>"></script>
<script src="<?= base_url('js/riwayat/spu/Spu.js') ?>"></script>
<script src="<?= base_url('js/riwayat/spu/saveSpu.js') ?>"></script>
<script src="<?= base_url('js/riwayat/skck/Skck.js') ?>"></script>
<script src="<?= base_url('js/riwayat/skck/saveSkck.js') ?>"></script>
<script src="<?= base_url('js/riwayat/gaji/Gaji.js') ?>"></script>
<script src="<?= base_url('js/riwayat/gaji/saveGaji.js') ?>"></script>
<script src="<?= base_url('js/riwayat/KTP/Ktp.js') ?>"></script>
<script src="<?= base_url('js/riwayat/KTP/Ktpsubmit.js') ?>"></script>

<?= $this->endSection() ?>

