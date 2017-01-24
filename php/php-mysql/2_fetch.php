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

foreach ($query = $mysqli->query($sql) as $user) {
  echo "name: ".$user['name']."<br>";

  #fetch_all
    #MYSQLI_NUM
    #MYSQLI_ASSOC
    #MYSQLI_BOTH

  // $user = $query->fetch_all(MYSQLI_NUM);
  //var_dump($user);
  // echo "name: ".$user[0][1];

  //$user = $query->fetch_all(MYSQLI_ASSOC);
  //var_dump($user);
  // echo "email: ".$user[0]["email"];

  // $user = $query->fetch_all(MYSQLI_BOTH);
  //var_dump($user);

  // foreach ($user as $value) {
  //   echo "name: ".$value["name"]."<br>";
  // }
  
  #fetch_array
    #MYSQLI_NUM
    #MYSQLI_ASSOC
    #MYSQLI_BOTH

  //$user = $query->fetch_array();
  //var_dump($user);
  //echo "name: ".$user["name"]."<br>";

  // while ($user = $query->fetch_array()) {
  //   echo "name: ".$user["name"]."<br>";
  // }

  #fetch_row
  // $user = $query->fetch_row();
  // var_dump($user);
  // echo "name: ".$user["name"]."<br>";
  // while ($user = $query->fetch_row()) {
  //   echo "name: ".$user[1]."<br>";
  // }

  #fetch_object
  //$user = $query->fetch_object();
  //var_dump($user);
  //echo "name: ".$user->name."<br>";
  //while ($user = $query->fetch_object()) {
  //  echo "name: ".$user->name."<br>";
  //}

  // while ($user = $query->fetch_object()) {
  //   $row[] = $user;
  // }

  // foreach ($row as $value) {
  //   echo "name: ".$value->name."<br>";
  // }

}



?>