<?php

require_once '../bootstrap.php';
require_once './Entity/Libro.php';



$respuesta['ID'] = $libro->getID();
$respuesta['Titulo'] = $libro->getTitulo();
$respuesta['Descripcion'] = $libro->getDescripcion();
$respuesta['Precio'] = $libro->getPrecio();
$respuesta['Stock'] = $libro->getStock();


try {
    $entityManager->persist($libro);
    $entityManager->flush();
    $respuesta['bd'] = "Se guardó exitosamente";
} catch (\Exception $e) {
    $respuesta['bd'] = "Error: " . $e->getMessage();
}


header('Content-Type: application/json; charset=utf-8');
echo json_encode($respuesta);