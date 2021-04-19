<?php
//    $conn = new mysqli("localhost", "root", "", "crudajax") or die(mysqli_error());
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crudajax";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQLi: " . $conn -> connect_error;
  exit();
}

?>