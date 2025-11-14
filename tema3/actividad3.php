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

echo "nombre ",$nombre,"<br>";

foreach($profesion as $valor){
    echo $valor."<br>";
}
if (empty($nombre)) {
    echo "error, introduce un nombre";
    //poner un botón aquí que ponga volver y me redirija a la página
}elseif (condition) {
    # code...
}if (empty($correo)) {
    echo "error, introduce un correo";
}

    ?>
</body>
</html>