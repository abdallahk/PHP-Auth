<?php

session_start();

$page_name="users";

require_once 'functions.php';

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
                  All Users
                </h3></div>
                <div class="pull-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Register New User</button></div>
              </div>
              <div class="card-body">

              <?php if(isset($_GET['success']) AND $_GET['success']==="true"){ ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">User successfully added!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

              <?php } ?>

                <div class="row">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Role</th>
                        <th>Date & Time</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      require 'database.php';
                      $stmt = $pdo->query('SELECT * FROM users');
                      $i = 1;
                      while ($row = $stmt->fetch())                        
                        {

                          echo "<tr>";
                          echo "<td>" . $i++ . "</td>";
                          echo "<td>" . $row['username'] . "</td>";
                          echo "<td>" . $row['email'] . "</td>";
                          echo "<td>" . $row['user_role'] . "</td>";
                          echo "<td>" . $row['created_at'] . "</td>";
                          echo "
                          <td>
                          <a id='" . $row['id'] . "' onclick='editUser(this.id);' href='#'><span class='badge badge-info'><i class='fa fa-pencil'></i></span></a>
                          <a id='" . $row['id'] . "' onclick='deleteUser(this.id);' href='#'><span class='badge badge-danger'><i class='fa fa-trash'></i></span></a>
                          
                          </td>
                          ";
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
        <h5 class="modal-title" id="exampleModalLabel">Register New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="auth.php" method="post">
      <div class="modal-body">
        
        <div class="form-group has-feedback">
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
          <input type="hidden" name="action" value="register" />
          <input type="text" name="username" class="form-control" placeholder="Username">

        </div>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email">

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group has-feedback">
          <select name="user_role" class="form-control">

            <?php

            $stmt = $pdo->query('SELECT role_name FROM user_roles');
            $i = 1;
            while ($user_role = $stmt->fetch()) { ?>

            <option value="<?= $user_role['role_name']; ?>"><?= $user_role['role_name']; ?></option>

            <?php } ?>
            
          </select>
        </div>
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add User</button>
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

    <!-- Ajax to Delete User -->
    <script type="text/javascript"> 


      function deleteUser(id) {

        var r = confirm("Are you sure that you want to delete?");

        if (r == true) {

          var csrf_token = "<?= $_SESSION['csrf_token'];?>";
          var action = "delete_user";
          var user_id = id;
          var dataString = 'action=' + action + '&user_id='+ user_id + '&csrf_token='+ csrf_token;

          $.ajax({
              type: "POST",
              url: "auth.php",
              data: dataString,
              cache: false,
              success: function(result){
                alert(result);
                location.reload();
              }
            });
        
      }
    }
 </script>

    <?php

  } // auth session check

  else { // if session doesnt exist
    header('location: login.php');
  }
  ?>
