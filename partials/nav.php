<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboard.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="Dashboard" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">John Doe</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
               <a href="/dashboard.php" class="nav-link <?php if($page_name==="dashboard"){echo "active";} ?>">
                 <i class="nav-icon fa fa-dashboard"></i>
                 <p>
                   Dashboard
                 </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="/orders.php" class="nav-link <?php if($page_name==="orders"){echo "active";} ?>">
                 <i class="nav-icon fa fa-list"></i>
                 <p>
                   Orders
                 </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="/users.php" class="nav-link <?php if($page_name==="users"){echo "active";} ?>">
                 <i class="nav-icon fa fa-users"></i>
                 <p>
                   Users
                 </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="/roles.php" class="nav-link <?php if($page_name==="roles"){echo "active";} ?>">
                 <i class="nav-icon fa fa-sitemap"></i>
                 <p>
                   User Roles
                 </p>
               </a>
             </li>             
        
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="dist/pages/calendar.html" class="nav-link">
            <i class="nav-icon fa fa-calendar"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-envelope-o"></i>
            <p>
              Mailbox
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="dist/pages/mailbox/mailbox.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/mailbox/compose.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Compose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/mailbox/read-mail.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Read</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Pages
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="dist/pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Invoice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/examples/login.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Login</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/examples/register.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/examples/lockscreen.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Lockscreen</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-plus-square-o"></i>
            <p>
              Extras
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="dist/pages/examples/404.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Error 404</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/examples/500.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Error 500</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/examples/blank.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Blank Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="starter.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Starter Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">SETTINGS</li>
        <li class="nav-item">
          <a href="settings.php" class="nav-link <?php if($page_name==="settings"){echo "active";} ?>">
            <i class="nav-icon fa fa-cog"></i>
            <p>Settings</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="account.php" class="nav-link <?php if($page_name==="account"){echo "active";} ?>">
            <i class="nav-icon fa fa-user"></i>
            <p>My Account</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="auth.php?action=logout" class="nav-link">
            <i class="nav-icon fa fa-sign-out"></i>
            <p>
              Logout
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
