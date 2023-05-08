<?php
require 'db_functions.php';
if($_POST['del']){
$name = $_POST['name'];
$query = "DELETE FROM `accounts` WHERE `name`='$name' ";
if(mysqli_query($connection, $query))
echo 'Data Deleted';
else echo 'Failed To Delete Data';
}
mysqli_close($connection)
?>


<html>
<form method='post'>
  Name <input type='text' name='name'> 
  <input type='submit' name='del' value='Delete'>
</form>
</html>