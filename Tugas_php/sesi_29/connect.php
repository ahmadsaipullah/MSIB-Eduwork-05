<?php

$servername = 'localhost';
$database = 'sesi_29';
$username = 'root';
$password = '';

$sqli = mysqli_connect($servername, $username, $password, $database);

if (!$sqli) {
  die("connection failed: " . mysqli_connect_error());
}
