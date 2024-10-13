<?php

use App\Entity\User;

require_once "../bootstrap.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 
    $id_cargo = (int)$_POST['id_cargo'];

    $user = new User();
    $user->setName($name)
         ->setUsername($username)
         ->setPassword($password)
         ->setIdCargo($id_cargo);

    $entityManager->persist($user);
    $entityManager->flush();

    echo "Usuario registrado con éxito!";
}
?>

<form method="POST">
    Nombre: <input type="text" name="name" required>
    Usuario: <input type="text" name="username" required>
    Contraseña: <input type="password" name="password" required>
    ID Cargo: <input type="number" name="id_cargo" required>
    <button type="submit">Registrar</button>
</form>
