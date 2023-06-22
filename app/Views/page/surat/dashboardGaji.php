<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div style="color:#00b300; background:#ccffcc; border:0px dashed #006600;padding:5px;margin:10px;">
                <b>Pengajuan Surat Keterangan Gaji/Penghasilan</b> merupakan surat yang dibuat untuk mempermudah masyarakat dalam menjelaskan bahwa perorangan tidak memiliki<b> SLIP GAJI</b>. inputkan data masyarakat yang hendak mengajukan surat keterangan penghasilan dengan detail dan benar, lalu kirimkan file surat yang telah siap kepada masyarakat.
          </div>
          <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
            <h6>List Pengajuan</h6>
            <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah Pengajuan Surat Ket Gaji
            </button>
          </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Gaji</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form">
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                  <input id="id"  name="id" hidden>
                                </div>
                
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <select class="form-control" id="nama" name="nama">
                                    <option>Pilih warga</option>
                                    <?php foreach($user as $data): ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                    <?php endforeach ?>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No KIP</label>
                                  <input id="no_kip" type="text" class="form-control" name="no_kip">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No KIS</label>
                                  <input id="no_kis" type="text" class="form-control" name="no_kis">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keterangan</label>
                                  <input id="ket" type="text" class="form-control" name="ket">
                                </div>

                                <div class="input-group input-group-static mb-3" id="statusgaji" hidden>
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>

                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="saveGaji()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  
                  </div>
                </div>

                <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="upload12" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="upload12">Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="formupload">
                                    <div class="input-group input-group-static mb-3" id="fileuploadgaji">
                                        <label for="Surat" class="custom-file-label"></label>
                                        <input class="custom-file-input" type="file" id="Surat" name="Surat">
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
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No KIP</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No KIS</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat Gaji/Penghasilan</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['tgl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nik'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pekerjaan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['no_kip'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['no_kis'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ket'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['status'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['Surat'] ?></span></td>
                    <td class="align-middle text-center">
                      <button onclick="buttonCetak(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-success mb-0">
                        Cetak
                      </button>
                      <button onclick="buttonUpload(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Upload Surat
                      </button>
                      <button onclick="buttonUnduh(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Download Surat
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
<script src="<?= base_url('js/surat/gaji/savegaji.js') ?>"></script>

<script>

function buttonUnduh(id) {
    
    $.ajax({
        url: base_url + 'dashboard/gaji/update/' + id,
        type: 'GET',
        dataType: 'JSON',
        success: function (respond) {
            console.log(respond.data);

            // Set the values of other input fields as needed

            var fileName = respond.data.Surat; // Desired name for the downloaded file
            var fileUrl = base_url + 'uploads/' + fileName; // URL of the file to be downloaded

            var downloadLink = document.createElement('a');
            downloadLink.setAttribute('href', fileUrl);
            downloadLink.setAttribute('download', fileName);
            downloadLink.style.display = 'none';
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);

            // Additional code for showing the modal, etc.
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            swal.fire({
                icon: 'error',
                title: errorThrown,
                text: 'Error getting data from AJAX.'
            });
        }
    });
}

function buttonUpload(id) {
  $.ajax({
  url: base_url + 'dashboard/gaji/upload/' + id,
  type: 'GET',
  dataType: 'JSON',
  success: function (respond) {
      console.log(respond.data);



  $('#id').val(respond.data.id);
  $('#upload').modal('show');
  $('.modal-title').text('Upload');
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
  $("#upload").on("hidden.bs.modal", function () {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/gaji/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $('#id').val(respond.data.id);
      $('#tgl').val(respond.data.tgl);
      $('#nama').val(respond.data.nama);
      $('#nik').val(respond.data.nik);
      $('#ttl').val(respond.data.ttl);
      $('#pekerjaan').val(respond.data.pekerjaan);
      $('#no_kip').val(respond.data.no_kip);
      $('#no_kis').val(respond.data.no_kis);
      $('#ket').val(respond.data.ket);
      $('#status').val(respond.data.status);

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
      $("#statusgaji").removeAttr("hidden");
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
        url: base_url + "dashboard/gaji/delete/" + id,
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
  var redirectUrl = base_url + "dashboard/pdf/pdfgaji/" + id; 
  window.location.href = redirectUrl;
}
</script>
<?= $this->endSection() ?>