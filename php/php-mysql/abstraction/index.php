<?php 

require_once("User.php");
require_once("ServiceUser.php");

$server = "localhost";
$user = "root";
$password = "1234";
$database = "test";

@$mysqli = new mysqli($server, $user, $password, $database);

if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQL database: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
  exit;
}

$user = new User();
$user->_setId("2")->_setName("Natalia Soares Rodrigues")->_setEmail("nega@hotmail.com");
//echo $user->insert();
// echo "Retorno update: ".$user->update()."<br><br>";
// echo "Retorno delete: ".$user->delete(3)."<br><br>";

$serviceUser = new ServiceUser($mysqli, $user);
//echo "Retorno update: ".$serviceUser->update()."<br><br>";
echo "Retorno update: ".$serviceUser->delete(4)."<br><br>";
//echo $serviceUser->insert();
// $result = $user->list();
//$result = $serviceUser->find(2);
$result = $serviceUser->list();
// echo $result['id']."<br>";
// echo $result['name']."<br>";
// echo $result['email']."<br>";

foreach ($result as $value) {
  echo "Código: ".$value['id']."<br>";
  echo "Nome: ".$value['name']."<br>";
  echo "E-mail: ".$value['email']."<br><hr>";
}
?>