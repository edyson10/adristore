<?php
if (isset($_SESSION["Administrador"])) {
  header("location:Administrador");
}
?>

<body class="hold-transition login-page" style="background-image: linear-gradient(90deg, red, #FE93A7);">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1" style="font-family: 'Pacifico', cursive; font-size: 35px; margin-bottom: 10px; color: #303433;"><b>Adri Store</b></a>
      </div>
      <div class="card-body">
        <form role="form" method="POST" id="formIngresarAdministrador">
          <div class="input-group mb-3">
            <input type="email" class="form-control" id="ingresarCorreoAdministrador" name="ingresarCorreoAdministrador" placeholder="Correo">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="ingresarContraseniaAdministrador" name="ingresarContraseniaAdministrador" placeholder="Contrase&ntilde;a">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesi&oacute;n</button>
            </div>
            <!-- /.col -->
            <div class="col-6"></div>
            <!-- /.col -->
          </div>
        </form>
        <br>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <p class="mb-3">
              <a href="forgot-password.html">Has olvidado su contrase&ntilde;a</a>
            </p>
          </div>
          <div class="col-2"></div>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->