<?php

session_start();


if (empty($_SESSION["usuario"])) {

    header("Location: welcome.blade.php");

    exit();
}

echo "Empresarios";
?>

<p>
    Lista de empresarios
</p>

<a href="logout.php">Cerrar sesión</a>
