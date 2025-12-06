<?php
session_start();

echo "<h2>Saludo</h2>";
echo "<div>Nombre: " . $_SESSION["nombre"] . "</div>";
echo "<div>Apellidos: " . $_SESSION["apellidos"] . "</div>";
?>