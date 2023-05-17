<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div style="color:#00b300; background:#ccffcc; border:0px dashed #006600;padding:5px;margin:10px;">
                <b>Pengajuan Surat Keterangan Catatan Kepolisian</b> merupakan surat yang dibuat untuk mempermudah masyarakat dalam menjelaskan bahwa perorangan tidak memiliki<b> Catatan Kriminal atau Kejahatan</b>. inputkan data masyarakat yang hendak mengajukan surat keterangan catatan kepolisian penghasilan dengan detail dan benar, lalu kirimkan file surat yang telah siap kepada masyarakat.
          </div>
            <div class="card-header pb-0">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-lg btn-info btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pengajuan SKCK
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
                            <input hidden id="id" name="id">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                  <input id="id"  name="id" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No Surat</label>
                                  <input id="nsurat" type="text" class="form-control" name="nsurat">
                                </div>

                
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nik" type="text" class="form-control" name="nik">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">TTL</label>
                                  <input id="ttl" type="date" class="form-control" name="ttl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" name="jk">
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Agama</label>
                                  <input id="agama" type="text" class="form-control" name="agama">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Kewarganegaraan</label>
                                  <input id="kewarganegaraan" type="text" class="form-control" name="kewarganegaraan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Warga</label>
                                  <select class="form-control" id="perkawinan" name="perkawinan">
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaan" type="text" class="form-control" name="pekerjaan">
                                </div>

                               
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamat" type="text" class="form-control" name="alamat">
                                </div>


                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Surat Upload</label>
                                  <input id="surat" type="text" class="form-control" name="surat">
                                </div>

                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="saveSkck()">Simpan</button>
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Surat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kewarganegaraan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Perkawinan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat skck</th>
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
                  <a class="btn bg-gradient-dark mb-0" href="<?= base_url('dashboard/pdf/pdfskck') ?>">Cetak Pdf</a>
      </div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/surat/skck/getSkck.js') ?>"></script>
<script src="<?= base_url('js/surat/skck/saveSkck.js') ?>"></script>
<?= $this->endSection() ?>