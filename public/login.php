<?php

use App\Entity\User;

require_once "../bootstrap.php";

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRepo = $entityManager->getRepository(User::class);
    $user = $userRepo->findByUsername($username);

    if ($user && password_verify($password, $user->getPassword())) {
        $_SESSION['user_id'] = $user->getId();
        echo "Login exitoso!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>

<form method="POST">
    Usuario: <input type="text" name="username" required>
    Contraseña: <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
