<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          
          <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
            <h6>List Pengajuan</h6>
            <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah User
            </button>
          </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="#" id="form" >
                              
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="id" name="id" hidden>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nik" type="text" class="form-control" name="nik">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Username</label>
                                  <input id="username" type="text" class="form-control" name="username">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Email</label>
                                  <input id="email" type="text" class="form-control" name="email">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Role</label>
                                  <select class="form-control" id="role" name="role">
                         
                                    <option value="warga">Warga</option>
                                    <option value="pelayanan">Pelayanan</option>
                                    <option value="pemerintahan">Pemerintahan</option>
                                    <option value="keuangan">Keuangan</option>
                                  </select>
                                </div>
                                
                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" name="jk">
                                    <option value="perempuan">perempuan</option>
                                    <option value="laki-laki">laki-laki</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamat" type="text" class="form-control" name="alamat">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaan" type="text" class="form-control" name="pekerjaan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Perkawinan</label>
                                  <select class="form-control" id="kawin" name="kawin">
                                    <option value="menikah">menikah</option>
                                    <option value="belum menikah">belum menikah</option>
                                  </select>
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
                                    <option>-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                  </select>
                                </div>

                                <div id="ttl" class="input-group input-group-static mb-3">
                                  <label class="ms-0">TTL</label>
                                  <input id="ttl" type="date" class="form-control" name="ttl">
                                </div>

                                <div id="nokk" class="input-group input-group-static mb-3">
                                  <label class="form-label">Nomor KK</label>
                                  <input id="no_kk" type="number" class="form-control" name="no_kk">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama Ayah</label>
                                  <input id="nama_ayah" type="text" class="form-control" name="nama_ayah">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Ttl Ayah</label>
                                  <input id="ttlayah" type="date" class="form-control" name="ttlayah">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat Ayah</label>
                                  <input id="alamatayah" type="text" class="form-control" name="alamatayah">
                                </div>



                                <div id="pass" class="input-group input-group-static mb-3">
                                  <label class="form-label">Password</label>
                                  <input id="password" type="password" class="form-control" name="password">
                                </div>
                                <div id="pass2" class="input-group input-group-static mb-3">
                                  <label class="form-label">Password Confirmation</label>
                                  <input id="password_confirm" type="password" class="form-control" name="password_confirm">
                                </div>
                                <div class="mt-3">
                                  <button type="button" class="btn bg-gradient-primary btn-lg w-100 mt-4 mb-0" onclick="saveUsers()">Simpan</button>
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
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor KK</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Perkawinan</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Ayah</th> 
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Lahir Ayah</th> 
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Ayah</th>  
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nik'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['no_kk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['username'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['email'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['role'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jk'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['alamat'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pekerjaan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['kawin'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['agama'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['nama_ayah'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['ttlayah'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['alamatayah'] ?></span></td>
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
<script src="<?= base_url('js/saveUsers.js') ?>"></script>
<script src="<?= base_url('js/SignIn.js') ?>"></script>
<script src="<?= base_url('js/SignUp.js') ?>"></script>

<script>
  

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/users/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);
      $('[name="id"]').val(respond.data.id);

      $('[name="nama"]').val(respond.data.nama);
      $('[name="nik"]').val(respond.data.nik);
      $('[name="no_kk"]').val(respond.data.no_kk);
      $('[name="username"]').val(respond.data.username);
      $('[name="email"]').val(respond.data.email);
      $('[name="role"]').val(respond.data.role);
      $('[name="jk"]').val(respond.data.jk);
      $('[name="alamat"]').val(respond.data.alamat);
      $('[name="pekerjaan"]').val(respond.data.pekerjaan);
      $('[name="kawin"]').val(respond.data.kawin);
      $('[name="ttl"]').val(respond.data.ttl);
      $('[name="agama"]').val(respond.data.agama);
      $('[name="kewarganegaraan"]').val(respond.data.kewarganegaraan);
      $('[name="nama_ayah"]').val(respond.data.nama_ayah);
      $('[name="ttlayah"]').val(respond.data.ttlayah);
      $('[name="alamatayah"]').val(respond.data.alamatayah);
   

      $('#exampleModal').modal('show');
      $('.modal-title').text('Edit');
      $('#pass').hide();
      $('#pass2').hide();

      $('#exampleModal').modal('show');
      $('.modal-title').text('Edit');
      $('#pass').hide();
      $('#pass2').hide();
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
        url: base_url + "dashboard/users/delete/" + id,
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