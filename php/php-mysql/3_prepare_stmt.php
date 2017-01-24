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

$stmt = $mysqli->stmt_init();
$stmt->prepare("SELECT name,email FROM user WHERE id = ? and name = ?");
$stmt->bind_param("is", $_GET["id"], $_GET["name"]);
$stmt->execute();
$stmt->bind_result($name,$email);
$stmt->fetch();

echo "name: ".$name."<br>";
echo "email: ".$email."<br>";

?>