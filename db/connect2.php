<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("localhost","root","","oqsnew_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
