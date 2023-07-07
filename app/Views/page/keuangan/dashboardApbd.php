<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0 justify-content-between align-items-center mb-3">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Anggaran
              </button>
              <button type="button" class="btn btn-lg btn-warning btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#eksporpdf">
                Ekspor PDF
              </button>
            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Perencanaan APBD</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form">
                              <input type="text" name="id" id="id" hidden>
                             
                              <h5>---Perencanaan Anggaran---</h5>
                              <hr>
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Bidang</label>
                                  <select class="form-control" id="bidang" name="bidang">
                                    <option value="Pelayanan Masyarakat">Pelayanan Masyarakat</option>
                                    <option value="Pembangunan Daerah">Pembangunan Daerah</option>
                                    <option value="Pemberdayaan Lingkungan">Pemberdayaan Lingkungan</option>
                                    <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                                    <option value="Pendidikan Daerah">Pendidikan Daerah</option>
                                    <option value="Administrasi Pemerintahan">Administrasi Pemerintahan</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Infrastruktur Daerah">Infrastruktur Daerah</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Kegiatan</label>
                                  <select class="form-control" id="kepentingan" name="kepentingan">
                                    <option value="Bersama">Bersama</option>
                                    <option value="Terbuka">Terbuka</option>
                                    <option value="Tertutup">Tertutup</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Penyelenggara</label>
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
                                  <label class="ms-0">Sumber Dana</label>
                                  <input id="sumberdana" type="text" class="form-control" name="sumberdana">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Anggaran</label>
                                  <input id="anggaran" type="number" class="form-control" name="anggaran">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tgl Pembahasan</label>
                                  <input id="tgl_pembahasan" type="date" class="form-control" name="tgl_pembahasan">
                                </div>

                                <hr>
                                <h5>---Dianggarkan Untuk---</h5>
                                
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Uraian</label>
                                  <input id="uraian" type="text" class="form-control" name="uraian">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Jumlah</label>
                                  <input id="jml" type="number" class="form-control" name="jml">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Satuan</label>
                                  <input id="satuan" type="number" class="form-control" name="satuan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Harga</label>
                                  <input id="harga" type="number" class="form-control" name="harga">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Anggaran Yang Dibutuhkan</label>
                                  <input id="anggarankeluar" type="number" class="form-control" name="anggarankeluar">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keterangan</label>
                                  <input id="ket" type="text" class="form-control" name="ket">
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
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bidang</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kepentingan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penyelenggara</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Anggaran</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Anggaran</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sumber Dana</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pembahasan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Uraian</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Satuan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Anggaran Yang Dibutuhkan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opsi</th>

                        </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['tgl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['bidang'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kepentingan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['penyelenggara'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jenis'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['anggaran'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['sumberdana'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['tgl_pembahasan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['uraian'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jml'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['satuan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['harga'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['anggarankeluar'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ket'] ?></span></td>
                  
                    <td class="align-middle text-center">
                    
                      <button onclick="buttonCetak(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-light mb-0">
                        Cetak Permintaan Surat
                  </button>
                     
                      <button onclick="buttonEdit(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Edit
                      </button>
                      <button onclick="buttonDelete(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-danger mb-0">
                        Delete
                      </button>
                    </td>
                  </tr>
                  <?php endforeach ?>
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
<script src="<?= base_url('js/KEUANGAN/getapbd.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/saveApbd.js') ?>"></script>
<script>
  function buttonCetak(id) {
  var redirectUrl = base_url + "dashboard/pdf/pdfspp/" + id; 
  window.location.href = redirectUrl;
}

function buttonDelete(id) {
  Swal.fire({
    title: "Anda yakin?",
    text: "Aksi ini tidak dapat dipulihkan!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Hapus!",
  }).then(function (respond) {
    if (respond.value) {
      var base_url = "http://localhost:8080/";
      $.ajax({
        url: base_url + "dashboard/apbd/delete/" + id,
        type: "GET",
        dataType: "JSON",
        success: function (respond) {
          swal
            .fire({
              position: "top-end",
              icon: "success",
              title: "Surat berhasil dihapus!",
              showConfirmButton: false,
              timer: 2000,
            })
            .then(function () {
              location.reload();
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
          swal.fire(
            thrownError,
            "Ada yang salah! coba lagi beberapa saat.",
            "error"
          );
        },
      });
    }
  });
  var modal = document.getElementById("exampleModal");
  modal.addEventListener("hidden.bs.modal", function (event) {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/apbd/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $('[name="id"]').val(respond.data.id);
      $('[name="tgl"]').val(respond.data.tgl);
      $('[name="bidang"]').val(respond.data.bidang);
      $('[name="kepentingan"]').val(respond.data.kepentingan);
      $('[name="penyelenggara"]').val(respond.data.penyelenggara);
      $('[name="jenis"]').val(respond.data.jenis);
      $('[name="anggaran"]').val(respond.data.anggaran);
      $('[name="sumberdana"]').val(respond.data.sumberdana);
      $('[name="tgl_pembahasan"]').val(respond.data.tgl_pembahasan);
      $('[name="uraian"]').val(respond.data.uraian);
      $('[name="jml"]').val(respond.data.jml);
      $('[name="satuan"]').val(respond.data.satuan);
      $('[name="harga"]').val(respond.data.harga);
      $('[name="anggarankeluar"]').val(respond.data.anggarankeluar);
      $('[name="ket"]').val(respond.data.ket);

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
    
     
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(jqXHR);
      swal.fire({
        icon: "error",
        title: errorThrown,
        text: "Error get data from ajax.",
      });
    },
  });
  $("#exampleModal").on("hidden.bs.modal", function () {
    location.reload();
  });
}


</script>
<?= $this->endSection() ?>