<?php 

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$product = $container['product'];
$service = $container['ServiceProduct'];
// $product->setName('Python')->setDesc('Course Python');
// echo $service->save();

// $product->setId(3)->setName('Ruby')->setDesc('Ruby on Rails Course');
// echo $service->update();

$product->setId(1);
echo $service->delete();

$list = $container['ServiceProduct']->list();

require_once "list.product.php";
