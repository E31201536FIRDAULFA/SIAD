<section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to Sign In</p>
                </div>
                <div class="card-body">
                  <form id="SignIn">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email/Username</label>
                      <input id="username" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input id="password" type="password" class="form-control">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lupa Password? <a href="<?= base_url('login/lupa-password') ?>" class="text-dark font-weight-bolder">Reset.</a>
                        </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign In</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Don't have an account?
                    <a href="<?= base_url('register') ?>" class="text-primary text-gradient font-weight-bold">Sign Up</a>
                  </p>
                  <h4 class="text-sm mx-auto text-center">Or</h4>
                  <p class="mb-2 text-sm mx-auto">
                    <a href="<?= base_url('/') ?>" class="text-primary text-gradient font-weight-bold">Kembali ke halaman utama</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>