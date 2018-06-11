<?php

require "database.php";
require "functions.php";

session_start();

/**************
* Login
**************/

if($_POST['action']=="login"){

  if($_SESSION['auth']=="true"){

    echo "Your are already logged in!";

    header('Location: dashboard.php');

  }
  else{

    if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']){

      $entered_email=$_POST['email'];

      $entered_password=$_POST['password'];

      $stored_password= getStoredPassword($entered_email);


      if (password_verify($entered_password, $stored_password['password'])) {

        echo 'Password is valid!';

        $_SESSION['auth']="true"; //set auth as true in session

        $_SESSION['email']=$entered_email; //set logged in user's email in session

        $_SESSION['user_type']="admin";


        // $_SESSION['permissions'] = getUserPermissions($entered_password);  //get the logged in user's permissions

        header('Location: dashboard.php'); // redirect to dashboard

      }

      else {

        header('Location: login.php?message=false');

      }


    }



  }

}
elseif($_POST['action']=="register"){

  if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']){

    $entered_username=$_POST['username'];

    $entered_email=$_POST['email'];

    $entered_password=$_POST['password'];

    $user_role=$_POST['user_role'];

    $hashed_password= password_hash($entered_password, PASSWORD_DEFAULT);

    registerUser($entered_username, $entered_email, $hashed_password, $user_role);

    header("Location: ".$_SERVER['HTTP_REFERER']."?success=true");

  }
}

elseif($_POST['action']=="update_password"){
  

  if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']){

    $email=$_POST['email'];

    $current_password=$_POST['current_password'];

    $new_password=$_POST['new_password'];

    $new_password_hashed= password_hash($new_password, PASSWORD_DEFAULT);

    $stored_password= getStoredPassword($email);

    $stored_password['password'];



      if (password_verify($current_password, $stored_password['password'])) {

        updatePassword($email, $new_password_hashed);

        header("Location: ".$_SERVER['HTTP_REFERER']."?success=true");

      }

      else {

        header("Location: ".$_SERVER['HTTP_REFERER']."?success=false");


      }

  }
}

elseif(isset($_GET['action']) AND $_GET['action']=="logout"){

    session_unset();
    session_destroy();
    header('Location: login.php');

}



// Other form actions

elseif($_POST['action']=="add_role"){

  if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']){

    $role_name=$_POST['role_name'];

    $permissions_array = $_POST['permissions'];

    $permissions = implode (", ", $permissions_array);

    $user_type = $_POST['user_type'];

    
    addRole($role_name, $permissions, $user_type);

    header("Location: ".$_SERVER['HTTP_REFERER']."?success=true");

  }
}

elseif($_POST['action']=="delete_user"){


  if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']){

    $user_id = $_POST['user_id'];

    deleteUser($user_id);

  }
  

}


  ?>
