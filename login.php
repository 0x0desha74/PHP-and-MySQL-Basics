<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  if($user =='desha' && $pass=='1234'){
    header('location:output.php');
    $_SESSION['user']=$user;
  }
  else header('location:login.php?err=Invalid Data');
  
}
if(isset($_POST['signout'])){
  session_destroy();
  header('location:index.php');
}

?>




<html>
  <body>
    <form method='post'>
      <label>Username</label>
      <input type='text' name='user' >
      <label>Password</label>
      <input type='password' name='pass' >
      <button>Login</button>
      <button name='signout'>Sign Up</button>
      <?php echo $_GET['err'] ?>
    </form>
  </body>



</html>