<?php

session_start();

$page_name="orders";

if($_SESSION['auth']==="true"){


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
                <h3 class="card-title">
                  <i class="fa fa-list"></i>
                  VAT Filing Orders
                </h3>
              </div>
              <div class="card-body">

                <div class="row">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td>1</td>
                        <td><a href="">View</a>                        </td>
                      </tr>
                    </tbody>
                  </table>

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
