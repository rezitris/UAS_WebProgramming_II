
<div class="login-box">
  <div class="login-logo">
    <a href="/Login"><b>Login</b></a>
  </div><br>
  <div class="card">
    <div class="card-body login-card-body">

      <form action="<?= base_url('Login/f_login') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password"  class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
               </div>
          <div class="col-12" style="margin-top:14px; ">
            <a href="<?= base_url('Register') ?>" class="btn btn-success btn-block">Register</a>
          </div>
       
        </div>
      </form>


  
    </div>
  </div>
</div>
