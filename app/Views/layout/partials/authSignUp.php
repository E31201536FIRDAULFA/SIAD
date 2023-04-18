<section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative h-100 border-radius-lg d-flex flex-column justify-content-center">
              <img width="500px" src="<?= base_url('assets/img/illustrations/logo-jbr.jpg')?>" style="background-size: 100% 100%; background-repeat: no-repeat; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up/Daftar</h4>
                  <p class="mb-0">Masukan Email dan Password Anda Untuk Mendaftar</p>
                </div>
                <div class="card-body">
                  <form role="form" id="SignUp">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Nama</label>
                      <input name="nama" id="nama" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Username</label>
                      <input name="username" id="username" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input name="email" id="email" type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input name="password" id="password" type="password" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Konfirmasi Passsword</label>
                      <input name="password_confirm" id="password_confirm" type="password" class="form-control">
                    </div>
          
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Register</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Sudah Punya Akun?
                    <a href="<?= base_url('login') ?>" class="text-info text-gradient font-weight-bold">Masuk</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>