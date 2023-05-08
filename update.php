<?php
require 'db_functions.php';
if($_POST['submit']){
  $id=$_POST['search_key'];
$query = "UPDATE `accounts` SET `name`='ahmed' WHERE `name`='smss' AND `id`='$id'" ;
 mysqli_query($connection, $query);

}
mysqli_close($connection);
?>



<html>
  <form method='post'>
    <body>
      Google <input type='text' name='search_key' >
      <input type='submit' name='submit' value="Search">
    </body>
  </form>
</html>
