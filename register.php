<?php



// Start a session (which should use cookies over HTTP only).
session_start();
// Create a new CSRF token.
if (! isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
}


 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FAR Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="dist/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>FAR</b> Dashboard</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">User Registration</p>

      <?php if (isset($_GET['message']) AND $_GET['message'] === "true") { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">Registration Successful!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
      <?php } ?>

      <form action="auth.php" method="post">
        <div class="form-group has-feedback">
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
          <input type="hidden" name="action" value="register" />
          <input type="hidden" name="user_role" value="admin" />
          <input type="text" name="username" class="form-control" placeholder="Username">

        </div>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email">

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">

        </div>
        <div class="row">
          <div class="col-12">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> <span  style="font-weight:normal;"> I agree with the <a href="#">Terms & Conditions</a> </span>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1" style="text-align: center;">
        <a href="#">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="dist/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
