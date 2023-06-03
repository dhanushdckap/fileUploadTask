<?php
// $servername = "localhost";
// $username = "root";
// $password = "welcome";
// $dbname = "fileUpload";


// $conn = mysqli_connect($servername, $username, $password,"$dbname");

// if ($conn->connect_error) {
//   // die("Connection failed: " . $conn->connect_error);

// }
// // echo "Connected successfully";

$servername = "localhost";
$username = "root";
$password = "welcome";

try {
  $conn = new PDO("mysql:host=$servername;dbname=fileUpload", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>