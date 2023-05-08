<?php
$host = 'localhost';
$user_name = '0x0desha74';
$password = 'mudesha74';
$DB_name = 'users';
$connection = mysqli_connect($host, $user_name,$password, $DB_name);
if(!$connection) die('Database Error: '.mysqli_connect_error());
?>