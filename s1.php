<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "aqs2fmOLpIgxrZhr";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 