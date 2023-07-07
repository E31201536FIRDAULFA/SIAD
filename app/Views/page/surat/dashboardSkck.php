<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div style="color:#00b300; background:#ccffcc; border:0px dashed #006600;padding:5px;margin:10px;">
          <b>Pengajuan Surat Keterangan Catatan Kepolisian</b> merupakan surat yang dibuat untuk mempermudah masyarakat dalam menjelaskan bahwa perorangan tidak memiliki<b> Catatan Kriminal atau Kejahatan</b>. inputkan data masyarakat yang hendak mengajukan surat keterangan catatan kepolisian penghasilan dengan detail dan benar, lalu kirimkan file surat yang telah siap kepada masyarakat.
          </div>
 
           
            <div class="card-header pb-0 justify-content-between align-items-center mb-3">
            <h6>List Pengajuan</h6>
            <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajukan Tanpa Data Akun
            </button>
            <button type="button" class="btn btn-lg btn-success btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#add">
            Ajukan Dengan Data Akun
            </button>
          </div>

           <!--MODAL ADD + EDIT STATIC-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tanpa Akun Warga</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form" enctype="multipart/form-data">
                            <input hidden id="id" name="id">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nik" type="number" class="form-control" name="nik">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kk" type="number" class="form-control" name="no_kk">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal Lahir</label>
                                  <input id="ttl" type="date" class="form-control" name="ttl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" name="jk">
                                  <option>--Pilih Jenis Kelamin--</option>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-laki</option>
                                  </select>
                                </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Agama</label>
                                  <select id="agama" class="form-control"  name="agama">
                                  <option>--Pilih Agama--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                  </select>
                                  </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Kewarganegaraan</label>
                                  <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                  <option>--Pilih Kewarganegaraan--</option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                  </select>
                                </div>

                            
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaan" type="text" class="form-control" name="pekerjaan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">kawin</label>
                                  <select class="form-control" id="kawin" name="kawin">
                                <option value="menikah">Menikah</option>
                                <option value="belum_menikah">Belum Menikah</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamat" type="text" class="form-control" name="alamat">
                                </div>

                                <div class="input-group input-group-static mb-3" >
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="status" name="status">
                                  <option>--Pilih Status Surat--</option>
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
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


                  <!--MODAL ADD OTOMATIS-->
                  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add3" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="add3">Tambah Data Dengan Akun Warga</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form" enctype="multipart/form-data">
                            <input hidden id="idskck" name="idskck">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglskck" type="date" class="form-control" name="tglskck">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <select class="form-control" id="namaskck" name="namaskck">
                                    <option>--Pilih warga--</option>
                                    <?php foreach($user as $data): ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                    <?php endforeach ?>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3" >
                                <label for="exampleFormControlSelect1" class="ms-0">Status Surat</label>
                                  <select class="form-control" id="statusskck" name="statusskck">
                                  <option>--Pilih Status Surat--</option>
                                    <option value="Pengajuan Sedang Diproses">Pengajuan Sedang Diproses</option>
                                    <option value="Pengajuan Selesai">Pengajuan Selesai</option>
                                    <option value="Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar">Pengajuan Ditolak, Lengkapi Persyaratan Dengan Benar</option>
                                  </select>
                                </div>


                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0" onclick="addadm()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="modal fade" id="uploadskck" tabindex="-1" role="dialog" aria-labelledby="upload2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="upload2">Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="formupload">
                                    <div class="input-group input-group-static mb-3" id="fileuploadskck">
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
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor KK</th>
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
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['tgl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nik'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['no_kk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['agama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kewarganegaraan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kawin'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pekerjaan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['alamat'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['status'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['surat'] ?></span></td>
                    <td class="align-middle text-center">
                      <button onclick="buttonCetak(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Cetak
                      </button>
                      <button onclick="buttonUpload(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-light mb-0">
                        Upload Surat
                      </button>
                      <button onclick="buttonUnduh(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Download Surat
                      </button>
                      <button onclick="buttonEdit(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-light mb-0">
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
<script src="<?= base_url('js/surat/skck/saveSkck.js') ?>"></script>

<script>
   function buttonUnduh(id) {
    
    $.ajax({
        url: base_url + 'dashboard/skck/update/' + id,
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


function buttonUpload(id) {
  $.ajax({
    url: base_url + "dashboard/skck/upload/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $("#id").val(respond.data.id);
      $("#uploadskck").modal("show");
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
  $("#uploadskck").on("hidden.bs.modal", function () {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/skck/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $("#id").val(respond.data.id);
      $("#tgl").val(respond.data.tgl);
      $("#nik").val(respond.data.nik);
      $("#no_kk").val(respond.data.no_kk);
      $("#nama").val(respond.data.nama);
      $("#jk_").val(respond.data.jk);
      $("#ttl").val(respond.data.ttl);
      $("#agama").val(respond.data.agama);
      $("#kewarganegaraan").val(respond.data.kewarganegaraan);
      $("#kawin").val(respond.data.kawin);
      $("#pekerjaan").val(respond.data.pekerjaan);
      $("#alamat").val(respond.data.alamat); 
      $("#status").val(respond.data.status);

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
      $("#statusskck").removeAttr("hidden");
    
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
        url: base_url + "dashboard/skck/delete/" + id,
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
  var redirectUrl = base_url + "dashboard/pdf/pdfskck/" + id; 
  window.location.href = redirectUrl;
}
</script>
<?= $this->endSection() ?>