<?php
// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$paths = array(__DIR__.'/src/Entity');
$isDevMode = true;

// the connection configuration
$dbParams = array(
  'driver'   => 'pdo_mysql',
  'user'     => 'root',
  'password' => '1234',
  'dbname'   => 'doctrine_direto_ponto'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

function getEntityManager() {
  global $entityManager;
  return $entityManager;
}