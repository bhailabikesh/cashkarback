<?php 
// for live server

$servername = "localhost";
$username = "gadgetzc_ibrahim";
$password = "Passcode@12345";
$db = "gadgetzc_maindb";

// for local server
// $servername = "localhost";
//$username = "root";
//$password = "";
//$db = "gadgetzc_maindb";

// Create connection
$connect = new mysqli($servername, $username, $password, $db);

//Check connection
// if ($connect->connect_error) {
//   die("Connection failed: " . $connect->connect_error);
// }
// echo "Connected successfully";
?>