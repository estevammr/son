<?php 
session_start();

if($_SESSION['login']) {
  echo 'Secret area';
} else {
  echo 'Incorrect credentials';
}

//unset($_SESSION['login']);

 ?>