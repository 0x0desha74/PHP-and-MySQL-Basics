<?php
require('db_functions.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['name'];
$pass = md5($_POST['pass']);
$query= "INSERT INTO `accounts` (`id`, `name`, `password`) VALUES (NULL, '$name', '$pass')";
if(mysqli_query($connection, $query)) echo "Registered Successfully ".mysqli_insert_id($connection);
else echo "Error";
};
?>


<html>
  <body>
    <form method='post'>
      <label>Username</label>
      <input type='text' name='name'>
      <label>Password</label>
      <input type='password' name='pass'>
      <button>Sign Up</button>
    </form> 
  </body>


</html>