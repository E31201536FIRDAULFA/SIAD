<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
<div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-12">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Informasi Akun</h6>
                    </div>
                    <div class="col-md-4 text-end">
                        <button onclick="enableEditProfile()" type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0">
                            Edit Profile
                        </button>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                    <form id="form" action="<?= base_url('dashboard/profile/'.session()->get('id')) ?>" method="post">
                        <input id="id" type="text" class="form-control" name="id" value="<?= $user['id'] ?>" hidden>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">NIK</label>
                            <input id="nik" type="number" class="form-control" name="nik" value="<?= $user['nik'] ?>" disabled>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Nama Lengkap</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>" disabled>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Username</label>
                            <input id="username" type="text" class="form-control" name="username" value="<?= $user['username'] ?>" disabled>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Email</label>
                            <input id="email" type="text" class="form-control" name="email" value="<?= $user['email'] ?>" disabled>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Role</label>
                            <input id="role" type="text" class="form-control" name="role" value="<?= $user['role'] ?>" readonly>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control" disabled>
                                <option>Pilih Jenis Kelamin</option>
                                <option value="<?= $user['jk'] ?>" selected><?= $user['jk'] ?></option>
                                <option value="perempuan">Perempuan</option>
                                <option value="laki-laki">Laki-laki</option>
                            </select>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Alamat</label>
                            <textarea id="alamat" type="text" class="form-control" name="alamat" disabled><?= $user['alamat'] ?></textarea>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Pekerjaan</label>
                            <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="<?= $user['pekerjaan'] ?>" disabled>
                        </div>
                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Perkawinan</label>
                            <select name="kawin" id="kawin" class="form-control" disabled>
                                <option>Pilih Status Perkawinan</option>
                                <option value="<?= $user['kawin'] ?>" selected><?= $user['kawin'] ?></option>
                                <option value="menikah">Menikah</option>
                                <option value="belum_menikah">Belum Menikah</option>
                            </select>
                        </div>
                        <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Kewarganegaraan</label>
                                  <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" disabled>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Agama</label>
                                  <select id="agama" class="form-control" name="agama" disabled>
                                    
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                  </select>
                                </div>

                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Tanggal Lahir</label>
                            <input id="ttl" type="date" class="form-control" name="ttl" value="<?= $user['ttl'] ?>" disabled>
                        </div>

                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Nomor KK</label>
                            <input id="no_kk" type="number" class="form-control" name="no_kk" value="<?= $user['no_kk'] ?>" disabled>
                        </div>

                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Nama Ayah</label>
                            <input id="nama_ayah" type="text" class="form-control" name="nama_ayah" value="<?= $user['nama_ayah'] ?>" disabled>
                        </div>

                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Tanggal Lahir Ayah</label>
                            <input id="ttlayah" type="date" class="form-control" name="ttlayah" value="<?= $user['ttlayah'] ?>" disabled>
                        </div>

                        <div class="input-group input-group-static mb-3">
                            <label class="ms-0">Alamat Ayah</label>
                            <input id="alamat_ayah" type="text" class="form-control" name="alamatayah" value="<?= $user['alamatayah'] ?>" disabled>
                        </div>




                        <button type="submit" class="btn btn-lg btn-info btn-lg mt-4 mb-0">Simpan</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
function enableEditProfile() {
  var inputFields = document.getElementById('form').getElementsByTagName('input');
  var textareaField = document.getElementById('form').getElementsByTagName('textarea')[0];
  var selectFields = document.getElementById('form').getElementsByTagName('select');
  
  for (var i = 0; i < inputFields.length; i++) {
    if (inputFields[i].disabled) {
      inputFields[i].removeAttribute('disabled');
    } else {
      inputFields[i].setAttribute('disabled', 'disabled');
    }
  }

  if (textareaField.disabled) {
    textareaField.removeAttribute('disabled');
  } else {
    textareaField.setAttribute('disabled', 'disabled');
  }

  for (var j = 0; j < selectFields.length; j++) {
    if (selectFields[j].disabled) {
      selectFields[j].removeAttribute('disabled');
    } else {
      selectFields[j].setAttribute('disabled', 'disabled');
    }
  }
}

</script>
<?= $this->endSection() ?>