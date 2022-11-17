<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'sa');
define('DB_PASS', 'pwd');
define('DB_NAME', 'php_dev');
// Create Connection
$conn= new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
//echo 'CONNECTED SUCCESSFULLY';


?>