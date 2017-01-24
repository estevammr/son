<?php 
session_start();

$login = "admin";
$password = "111";

if ($login == "admin" && $password == "111") {
  $_SESSION['login'] = true;
  echo "Sucess!";
} else {
  echo "Error!";
}

?>

<a href="secret.php">Get in</a>