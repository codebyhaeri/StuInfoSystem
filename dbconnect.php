<?php
$servername= "localhost";
$username = "root";
$password = "315683";  
$database = "studentmsdb";  

/*=======Procedural Style Connection========*/

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected";
?>