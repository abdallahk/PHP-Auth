<?php



 ?>


 <form action="auth.php" method="post">

   <input type="hidden" name="action" value="logout">
   <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
   <input type="submit" value="Click to logout">

 </form>
