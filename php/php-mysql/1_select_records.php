<?php

$server = "localhost";
$user = "root";
$password = "1234";
$database = "test";

@$mysqli = new mysqli($server, $user, $password, $database);

if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQL database: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
  exit;
}

$sql = "SELECT * FROM USER";
$query = $mysqli->query($sql);

while($data = $query->fetch_assoc()) {
  echo "Id: ".$data['id']."<br>";
  echo "Name: ".$data['name']."<br>";
  echo "Email: ".$data['email']."<br><hr>";
}

?>