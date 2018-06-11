<?php

session_start();

require 'functions.php';

$page_name="settings";

if($_SESSION['auth']==="true"){

  $settings = getSettings();

?>
<!-- Header with Styles and Meta Tags -->
<?php include 'partials/header.php'; ?>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <?php include 'partials/top-nav.php'; ?>

      <!-- Main Sidebar Container -->
      <?php include 'partials/nav.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php include 'partials/content-header.php'; ?>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default color-palette-box">
              <div class="card-header">
                <div class="pull-left"><h3 class="card-title">
                  <i class="fa fa-user"></i>
                  Settings
                </h3></div>
              </div>
              <div class="card-body">

              <?php if(isset($_GET['success']) AND $_GET['success']==="true"){ ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">Successfully Updated!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

              <?php } ?>

                <div class="row">

                  <form class="col-md-6" action="auth.php" method="POST">
                    <div class="form-group row">

                      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
                      <input type="hidden" name="action" value="update_password" />
                      <input type="hidden" name="email" value="<?= $_SESSION['email']; ?>" />

                      <label for="inputEmail3" class="col-sm-3 col-form-label">Sitename</label>
                      <div class="col-sm-8">
                        <input type="text" name="sitename" class="form-control" id="inputEmail3" value="<?= $settings['sitename']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Email Settings</label>
                      <div class="col-sm-8">
                        <input type="password" name="current_password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-8">
                        <input type="password" name="new_password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary col-sm-3">Save Changes</button>
                      </div>
                    </div>
                  </form>
                 

                </div>
                <!-- /.row -->

              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </section>

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include 'partials/footer.php'; // footer html ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php include 'partials/footer-scripts.php'; // footer scripts ?>

    <?php

  } // auth session check

  else { // if session doesnt exist
    header('location: login.php');
  }
  ?>
