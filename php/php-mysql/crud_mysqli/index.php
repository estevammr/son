<?php 

require_once("User.php");

$server = "localhost";
$user = "root";
$password = "1234";
$database = "test";

@$mysqli = new mysqli($server, $user, $password, $database);

if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQL database: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
  exit;
}

$user = new User($mysqli);
// $user->_setId("2")->_setName("Natalia Rodrigues")->_setEmail("nega@hotmail.com");
//echo $user->insert();
// echo "Retorno update: ".$user->update()."<br><br>";
// echo "Retorno delete: ".$user->delete(3)."<br><br>";

// $result = $user->list();
$result = $user->find(2);
echo $result['id']."<br>";
echo $result['name']."<br>";
echo $result['email']."<br>";

// foreach ($result as $value) {
//   echo "Código: ".$value['id']."<br>";
//   echo "Nome: ".$value['name']."<br>";
//   echo "E-mail: ".$value['email']."<br><hr>";
// }
?>