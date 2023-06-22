<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
         
          <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
            <h6>List Pengajuan</h6>
            <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah Pengajuan Surat KTP
            </button>
          </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah KTP</h5>
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
                                  <input id="id"  class="form-control" name="id" hidden>
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
                                  <label class="ms-0">NIK</label>
                                  <select id="nik" type="text" class="form-control" name="nik">
                                  <option>Pilih NIK</option>
                                    <?php foreach($user as $data): ?>
                                    <option value="<?= $data['nik'] ?>"><?= $data['nik'] ?></option>
                                    <?php endforeach ?>
                                    </select>
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
                              
                                <div class="input-group input-group-static mb-3" id="statusktp" hidden>
                                <label for="exampleFormControlSelect1" class="ms-0">Status</label>
                                  <select class="form-control" id="keterangan" name="keterangan">
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>

                                             

                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="saveKTP()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="modal fade" id="uploadktp" tabindex="-1" role="dialog" aria-labelledby="upload6" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="upload6">Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="formuploadktp">
                                    <div class="input-group input-group-static mb-3" id="fileuploadktp">
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

                <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="pdfContainer"></div>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keperluan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Upload Scan KK</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat</th>
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
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nik'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['keperluan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['keterangan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['surat'] ?></span></td>
                  
                    <td class="align-middle text-center">
                    <button onclick="buttonPreviewkk(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-success mb-0">
                        Preview KK
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
<script src="<?= base_url('js/surat/KTP/saveKTP.js') ?>"></script>
<script>

function buttonPreviewkk(id) {
    $.ajax({
        url: base_url + 'dashboard/KTP/update/' + id,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response.data);

            // Set the values of other input fields as needed

            var fileName = response.data.kk; // Desired name for the downloaded file
            var fileUrl = base_url + 'uploads/' + fileName; // URL of the file to be previewed

            var previewModal = $('#previewModal');
            var pdfContainer = document.getElementById('pdfContainer');
            pdfContainer.innerHTML = '';

            var pdfViewer = document.createElement('embed');
            pdfViewer.setAttribute('src', fileUrl);
            pdfViewer.setAttribute('width', '100%');
            pdfViewer.setAttribute('height', '600px');
            pdfContainer.appendChild(pdfViewer);

            previewModal.modal('show');

            // Additional code for handling other actions in the modal
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

function buttonUnduh(id) {
    
    $.ajax({
        url: base_url + 'dashboard/KTP/update/' + id,
        type: 'GET',
        dataType: 'JSON',
        success: function (respond) {
            console.log(respond.data);

            // Set the values of other input fields as needed

            var fileName = respond.data.surat; // Desired name for the downloaded file
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

function upload() {
    const id = $("#id").val();
    $.ajax({
        url: base_url + 'dashboard/KTP/upload/' + id,
        type: 'POST',
        data: new FormData($('#formuploadktp')[0]), // Use FormData to include file
        processData: false, // Prevent jQuery from automatically processing the data
        contentType: false, // Prevent jQuery from automatically setting the content type
        dataType: "JSON",
        success: function (respond) {
            if (respond.status == true) {
                Swal.fire({
                    icon: respond.icon,
                    title: respond.title,
                    text: respond.text,
                    timer: 3000,
                    showCancelButton: false,
                    showConfirmButton: false
                }).then(function () {
                    location.reload();
                });
            } else if (respond.status == false) {
                Swal.fire({
                    icon: respond.icon,
                    title: respond.title,
                    text: respond.text,
                });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Terjadi error!',
                text: 'Silahkan coba lagi.'
            });
        }
    });
}

function buttonUpload(id) {
  $.ajax({
    url: base_url + "dashboard/KTP/upload/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $("#id").val(respond.data.id);
      $("#uploadktp").modal("show");
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
  $("#uploadktp").on("hidden.bs.modal", function () {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/KTP/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $('#id').val(respond.data.id);
      $('#tgl').val(respond.data.tgl);
      $('#nama').val(respond.data.nama);
      $('#nik').val(respond.data.nik);
      $('#keperluan').val(respond.data.keperluan);
      // $('#kk').val(respond.data.kk);
      $('#keterangan').val(respond.data.keterangan);
      // $('[name="surat"]').val(respond.data.surat);

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
      $("#statusktp").removeAttr("hidden");
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
        url: base_url + "dashboard/KTP/delete/" + id,
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
  var redirectUrl = base_url + "dashboard/pdf/pdfktp/" + id; 
  window.location.href = redirectUrl;
}
</script>
<?= $this->endSection() ?>