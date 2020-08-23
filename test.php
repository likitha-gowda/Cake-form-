<?php
$server = "localhost";
$user = "root";
$pass = "";
$db="cake";
// Create connection
$cse = mysqli_connect($server,$user,$pass,$db);

// Check connection
if (!$cse) {
  die("Connection failed: " .mysqli_connect_error());
}
//echo "MysQL Connected successfully";
//mysqli_close($cse);

?>