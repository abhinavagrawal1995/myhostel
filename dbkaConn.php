<?php
include 'keys.php';
// Create connection
$conn = new mysqli_connect($db_host, $db_user, $db_pass,$db_name);

// Check connection
if (mysqli_connect_errno()) {
  echo "This is embarassing. Looks like we ran into some problems. Please try again later. " . mysqli_connect_error();
}
echo "Connected successfully";
?>