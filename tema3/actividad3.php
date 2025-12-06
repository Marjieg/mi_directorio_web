<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre= $_POST["nombre"];
$profesion= $_POST["profesion"];
$correo=$_POST["correo"];

// Validaciones
if (empty($nombre)) {
    echo "Error, introduce un nombre<br>";
    echo '<a href="actividad3.html">Volver</a>';
    exit;
}

if (empty($correo)) {
    echo "Error, introduce un correo<br>";
    echo '<a href="actividad3.html">Volver</a>';
    exit;
}

// Si todo está correcto, mostramos los datos
echo "Nombre: $nombre<br>";
echo "Correo: $correo<br>";
echo "Profesiones:<br>";

foreach ($profesion as $valor) {
    echo $valor . "<br>";
}


    ?>
</body>
</html>