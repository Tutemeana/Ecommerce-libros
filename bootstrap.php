<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Crear una configuración simple de Doctrine ORM para atributos
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/src/Entity'], // Asegúrate de que la ruta sea correcta
    isDevMode: true,
);

// Configurando la conexión a la base de datos
$connection = DriverManager::getConnection([
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/users.sqlite', 
], $config);

// Obteniendo el EntityManager
$entityManager = new EntityManager($connection, $config);