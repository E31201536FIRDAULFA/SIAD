<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          
          <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
            <h6>List Anggota Keluarga</h6>
            <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah Anggota Keluarga
            </button>
          </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="#" id="form">
                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">NIK</label>
                                    <input type="text" class="form-control" id="id" name="id" hidden>
                                    <input id="nik" type="number" class="form-control" name="nik" />
                                </div>

                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">Nama</label>
                                    <input id="nama" type="text" class="form-control" name="nama" />
                                </div>

                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">Tanggal Lahir</label>
                                    <input id="ttl" type="date" class="form-control" name="ttl" />
                                </div>

                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="laki-laki">Laki-laki</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">Pekerjaan</label>
                                    <input
                                    id="pekerjaan"
                                    type="text"
                                    class="form-control"
                                    name="pekerjaan"
                                    />
                                </div>

                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">Alamat</label>
                                    <input id="alamat" type="text" class="form-control" name="alamat" />
                                </div>
                                
                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Kewarganegaraan</label>
                                  <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Agama</label>
                                  <select id="agama" class="form-control" name="agama">
                                    <option value=""></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                    <label class="ms-0">Status Perkawinan</label>
                                    <select name="kawin" id="kawin" class="form-control">
                                        <option>Pilih Status Perkawinan</option>
                                        <option value="menikah">Menikah</option>
                                        <option value="belum_menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-primary btn-lg w-100 mt-4 mb-0" onclick="saveAnggota()">Simpan</button>
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
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Lahir</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kewarganegaraan</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Perkawinan</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nik'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pekerjaan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['alamat'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['agama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kewarganegaraan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kawin'] ?></span></td>
                    <td class="align-middle text-center">
                  
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
<script>
function saveAnggota() {
    const id = $("[name='id']").val();
    if (id) {
        $.ajax({
            url: `${base_url}dashboard/anggota-keluarga/update/${id}`,
            type: 'POST',
            data: $('#form').serialize(),
            dataType: 'JSON',
            success: function (respond) {
                if (respond.status == true) {
                    Swal.fire({
                        icon: respond.icon,
                        title: respond.title,
                        text: respond.text,
                        timer: 3000,
                        showCancelButton: false,
                        showConfirmButton: false,
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
            error: function (respond) {
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi error!',
                    text: 'Silahkan coba lagi.'
                });
            }
        }) 
    } else {
        $.ajax({
            url: `${base_url}dashboard/anggota-keluarga`,
            type: 'POST',
            data: $('#form').serialize(),
            dataType: 'JSON',
            success: function (respond) {
                if (respond.status == true) {
                    Swal.fire({
                        icon: respond.icon,
                        title: respond.title,
                        text: respond.text,
                        timer: 3000,
                        showCancelButton: false,
                        showConfirmButton: false,
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
            error: function (respond) {
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi error!',
                    text: 'Silahkan coba lagi.'
                });
            }
        }) 
    }
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/anggota-keluarga/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);
      $("[name='id']").val(respond.id);
        $("[name='nik']").val(respond.nik);
        $("[name='nama']").val(respond.nama);
        $("[name='ttl']").val(respond.ttl);
        $("[name='jk']").val(respond.jk);
        $("[name='pekerjaan']").val(respond.pekerjaan);
        $("[name='alamat']").val(respond.alamat);
        $("[name='kawin']").val(respond.kawin);
        $('[name="agama"]').val(respond.data.agama);
      $('[name="kewarganegaraan"]').val(respond.data.kewarganegaraan);

      $('#exampleModal').modal('show');
      $('.modal-title').text('Edit');
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
      $.ajax({
        url: base_url + "dashboard/anggota-keluarga/delete/" + id,
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


</script>
<?= $this->endSection() ?>