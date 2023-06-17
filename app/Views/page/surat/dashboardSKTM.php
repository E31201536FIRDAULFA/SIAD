<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div style="color:#00b300; background:#ccffcc; border:0px dashed #006600;padding:5px;margin:10px;">
                <b>Pengajuan Surat Keterangan Tidak Mampu</b> merupakan surat yang dibuat untuk mempermudah masyarakat dalam menjelaskan bahwa perorangan merupakan warga<b> Tidak Mampu(Berpenghasilan dibawah 700rb/bln)</b>. inputkan data masyarakat yang hendak mengajukan surat keterangan tidak mampu dengan detail dan benar, lalu kirimkan file surat yang telah siap kepada masyarakat.
          </div>
          <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
            <h6>List Pengajuan</h6>
            <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                  <input hidden id="id" name="id">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                  <label class="form-label">NIK</label>
                                  <input id="nik" type="text" class="form-control" name="nik">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <select class="form-control" id="nama" name="nama">
                                    <option>Pilih warga</option>
                                    <?php foreach($user as $data): ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                    <?php endforeach ?>
                                  </select>
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
                                  <input id="ttl" type="date" class="form-control" name="ttl">
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

                                <div class="input-group input-group-static mb-3" id="statussktm" hidden>
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="diproses">Diproses</option>
                                  </select>
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

                <div class="modal fade" id="uploadsktm" tabindex="-1" role="dialog" aria-labelledby="upload3" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="upload3">Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="formupload">
                                    <div class="input-group input-group-static mb-3" id="fileuploadsktm">
                                        <label for="Surat" class="custom-file-label"></label>
                                        <input class="custom-file-input" type="file" id="suratsktm" name="suratsktm">
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
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
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
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nik'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['stswarga'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama_ayah'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttlayah'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['agama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pekerjaan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['alamatayah'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['gaji'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['keperluan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['status'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['suratsktm'] ?></span></td>
                    <td class="align-middle text-center">
                      <button onclick="buttonCetak(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-success mb-0">
                        Cetak
                      </button>
                      <button onclick="buttonUpload(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Upload Surat
                      </button>
                      <button onclick="buttonEdit(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-warning mb-0">
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
<script src="<?= base_url('js/surat/sktm/saveSktm.js') ?>"></script>
<script>
function buttonUpload(id) {
  $.ajax({
    url: base_url + "dashboard/SKTM/upload/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $("#id").val(respond.data.id);
      $("#uploadsktm").modal("show");
      $(".modal-title").text("Upload");
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
  $("#uploadsktm").on("hidden.bs.modal", function () {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/SKTM/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $("#id").val(respond.data.id);
      $("#tgl").val(respond.data.tgl);
      $("#nik").val(respond.data.nik);
      $("#nama").val(respond.data.nama);
      $("#jk").val(respond.data.jk);
      $("#ttl").val(respond.data.ttl);
      $("#stswarga").val(respond.data.stswarga);
      $("#nama_ayah").val(respond.data.nama_ayah);
      $("#ttlayah").val(respond.data.ttlayah);
      $("#agama").val(respond.data.agama);
      $("#pekerjaan").val(respond.data.pekerjaan);
      $("#alamatayah").val(respond.data.alamatayah);
      $("#gaji").val(respond.data.gaji);
      $("#keperluan").val(respond.data.keperluan);
      $("#status").val(respond.data.status);

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
      $("#statussktm").removeAttr("hidden");
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
        url: base_url + "dashboard/SKTM/delete/" + id,
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

function buttonCetak(id) {
  var redirectUrl = base_url + "dashboard/pdf/pdfSKTM/" + id; 
  window.location.href = redirectUrl;
}
</script>
<?= $this->endSection() ?>