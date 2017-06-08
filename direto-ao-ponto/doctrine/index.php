<?php

use App\Entity\Category;

require __DIR__ . '/bootstrap.php';

//$category = new Category();
//$category->setName("Minha primeira categoria");
//
//$category2 = new Category();
//$category2->setName("Category 2");
//
//$category3 = new Category();
//$category3->setName("Category 2");

//$entityManager->persist($category);
//$entityManager->persist($category2);
//$entityManager->persist($category3);
//$entityManager->flush();

$entityManager = getEntityManager();
$categoria = $entityManager->getRepository('App\Entity\Category')->listar();

var_dump($categoria);

//foreach ($categories as $category) {
//    echo "Name: {$category->getName()}, Id : {$category->getId()}" . "<br>";
//}