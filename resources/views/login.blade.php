<?php

$usuario_correcto = "smontiel";
$password_correcto = "Password123$";

$username = $_POST["username"];
$password = $_POST["password"];

if ($username === $usuario_correcto && $password === $password_correcto) {

    session_start();

    $_SESSION["usuario"] = $usuario;

    header("Location: empresarios.php");
} else {
    echo "El usuario o la contraseña son incorrectos";
}
