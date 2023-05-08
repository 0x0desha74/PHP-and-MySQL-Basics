<?php

require 'db_functions.php';
$query = "SELECT * FROM `accounts` ORDER BY `name` DESC";
$result = mysqli_query($connection, $query);
while($rows=mysqli_fetch_array($result))
echo $rows['id'].'  '.$rows['name'].'  '.$rows['password'].'<br>';
mysqli_close($connection)

?>