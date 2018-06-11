<?php

session_start();

$page_name="roles";

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
                <div class="pull-left"><h3 class="card-title">
                  <i class="fa fa-list"></i>
                  All User Roles
                </h3></div>
                <div class="pull-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Role</button></div>
              </div>
              <div class="card-body">

              <?php if(isset($_GET['success']) AND $_GET['success']==="true"){ ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">Role successfully added!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

              <?php } ?>

                <div class="row">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Permissions</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      require 'database.php';
                      $stmt = $pdo->query('SELECT * FROM user_roles');
                      $i = 1;
                      while ($row = $stmt->fetch())                        
                        {

                          $permissions = explode(",", $row['permissions']);

                          echo "<tr>";
                          echo "<td>" . $i++ . "</td>";
                          echo "<td>" . $row['role_name'] . "</td>";
                          echo "<td>";

                          foreach ($permissions as $permission) {
                            echo "<span class='badge badge-info'>".$permission."</span> ";
                          }

                          echo "</td>";

                          echo "<td>" . $row['id'] . "</td>";
                          echo "</tr>";

                        }
                       ?>
                      
                    </tbody>
                  </table>

                </div>
                <!-- /.row -->

              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </section>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="auth.php" method="post">
      <div class="modal-body">
        
        <div class="form-group has-feedback">
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
          <input type="hidden" name="action" value="add_role" />
          <input type="text" name="role_name" class="form-control" placeholder="Role Name">
        </div>

        <div class="form-group has-feedback">

          <h6>Permissions</h6>

          <div class="row">
            
            <div class="col-md-6 pull-left">
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission1"> Permission1</label>
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission2"> Permission2</label>
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission3"> Permission3</label>
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission4"> Permission4</label>
            </div>

            <div class="col-md-6 pull-right">
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission5"> Permission5</label>
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission6"> Permission6</label>
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission7"> Permission7</label>
              <label class="form-control"> <input class="" name="permissions[]" type="checkbox" value="Permission8"> Permission8</label>
            </div>
                 
          </div>

        </div>

        <h6>User Type</h6>

        <div class="form-group has-feedback">

          <select name="user_type" class="form-control">
            <option value="superadmin">Superadmin</option>
            <option value="admin">Admin</option>
          </select>



        </div>
       
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New Role</button>
      </div></form>
    </div>
  </div>
</div>


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
