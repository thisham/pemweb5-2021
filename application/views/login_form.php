<?php $this->load->view('template/meta') ?>
<div class="wrapper" style="height: 100vh">
  <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%)">
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silakan Login Terlebih Dahulu</p>

        <form action="" method="POST">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('template/js') ?>

</body>

</html>