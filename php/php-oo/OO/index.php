<?php 

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari","Vermelha");
$ferrari->engine = 478;
$ferrari->setDoors(2);

$mustang = new Car("Mustang", "Amarelo");
$mustang->engine = 300;
$mustang->setDoors(4);

$harley = new Motorcycle("Harley", "Preta");
$harley->engine = 150;

echo $harley->brand;

?>