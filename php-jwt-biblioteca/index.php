<?php

use Namshi\JOSE\SimpleJWS;
require __DIR__ . '/vendor/autoload.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$privateKey = 's41asa4d5a6d454d45d54685d4/*/*/s*asad54ad5ad4';

if($username == 'estevam.mrodrigues@gmail.com' && $password == '123456'){
  $id = 1;
  $firstName = 'Estevam';
  $lastName = 'Rodrigues';
  
  $jws = new SimpleJWS([
      'alg' => 'HS256'
  ]);

  $jws->setPayload([
    'id' => $id,
    'first_name' => $firstName,
    'last_name' => $lastName
  ]);

  
  $jws->sign($privateKey);
  echo json_encode(['token' => $jws->getTokenString()]);
} else {
    try{
      $jws = SimpleJWS::load($_GET['token']);
    } catch(\Exception $e){
      echo 'Seu token é inválido';
      return;
    }
    
    if($jws->isValid($privateKey)){
      echo 'Seu token é válido';
    } else {
      echo 'Este token não é compatível';
    }
}