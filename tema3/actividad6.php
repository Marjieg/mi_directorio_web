<?php
session_start();

// Guardamos los datos enviados por el formulario
$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellidos"] = $_POST["apellidos"];

// Enlace al segundo archivo
echo '<a href="actividad6.1.php">Ir al saludo</a>';
?>