<?php

require_once '../bootstrap.php';
require_once './Entity/User.php';



$respuesta['ID'] = $user->getID();
$respuesta['Nombre'] = $user->getNombre();
$respuesta['User'] = $user->getUser();
$respuesta['Role'] = $user->getRole();

try {
    $entityManager->persist($user);
    $entityManager->flush();
    $respuesta['bd'] = "Se guardó exitosamente";
} catch (\Exception $e) {
    $respuesta['bd'] = "Error: " . $e->getMessage();
}


header('Content-Type: application/json; charset=utf-8');
echo json_encode($respuesta);