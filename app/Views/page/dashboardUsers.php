<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Users</h6>
              <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                            <form action="#" id="form">
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="id" name="id" hidden>
                                  <input id="nama" type="text" class="form-control" name="nama">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Username</label>
                                  <input id="username" type="text" class="form-control" name="username">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Email</label>
                                  <input id="email" type="text" class="form-control" name="email">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Role</label>
                                  <select class="form-control" id="role" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="penduduk">Penduduk</option>
                                    <option value="pegawai">Pegawai</option>
                                  </select>
                                </div>
                                <div id="pass" class="input-group input-group-outline mb-3">
                                  <label class="form-label">Password</label>
                                  <input id="password" type="password" class="form-control" name="password">
                                </div>
                                <div id="pass2" class="input-group input-group-outline mb-3">
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
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="table">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
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
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/getUsers.js') ?>"></script>
<script src="<?= base_url('js/saveUsers.js') ?>"></script>
<?= $this->endSection() ?>