<?php 
$servername = "db.r6.websupport.sk:3306";
$username = "ziak123";
$password = "123456789";
$dbname = "skolska_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>