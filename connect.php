<?php
//for local use
//$servername = "127.0.0.1";
//$username = "root";
//$password = "root";
//$dbname = "iamsocial";

//for server use
$servername = "com-linweb710.srv.combell-ops.net:3306";
$username = "ID388827_iamsocial";
$password = "wachtwoordimslab2022";
$dbname = "ID388827_iamsocial";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from 'users'";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
