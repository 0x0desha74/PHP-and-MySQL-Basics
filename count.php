<?php
require 'db_functions.php';

$query = "SELECT COUNT(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
echo 'Count = '.$data['c'].'<br>';

$query = "SELECT MAX(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
echo 'MAX = '.$data['c'].'<br>';

$query = "SELECT MIN(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
echo 'MIN = '.$data['c'].'<br>';

$query = "SELECT SUM(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
echo 'SUM = '.$data['c'].'<br>';

$query = "SELECT AVG(`id`) AS a FROM `accounts`";
$result=mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
echo 'AVG = '.$data['a'].'<br>';

$query = "SELECT UCASE(`name`) AS n FROM `accounts`";
$result = mysqli_query($connection, $query);
while($data=mysqli_fetch_assoc($result))
    echo 'Uppercase Names: '.$data['n'].'<br>';

$query = "SELECT MID(`name`,1,4) AS m FROM `accounts`";
$result = mysqli_query($connection, $query);
while($data=mysqli_fetch_assoc($result))
    echo 'MID = '.$data['m'].'<br>';
?>