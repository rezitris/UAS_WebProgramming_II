<div class="register-box">
  <div class="register-logo">
    <b>Register Mahasiswa</b>
  </div>
<br>
  <div class="card">
    <div class="card-body register-card-body">

      <form action="<?= base_url('Register/f_register');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="npm" placeholder="NPM">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          
          <div class="col-16">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>

     
      <a href="<?= base_url('Login') ?>" class="text-center">Already have an account ?</a>
      <div class="col-12 color-white" >-
      </div>
    </div>
  </div>
</div>