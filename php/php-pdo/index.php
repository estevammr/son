<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IPerson.php";
require_once "Person.php";
require_once "ServicePerson.php";

$db = new Conn("localhost", "teste_bdr", "root", "1234");
$person = new Person;

$person->setId(2)->setName("Fulano");

$service = new ServicePerson($db, $person);

print_r($service->getFind(1));