<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*Escribe un programa que cree un array asociativo en el que se guarde la cantidad de lluvia 
(en litros por metro cuadrado) de todos los días de esta semana en Granada y genere, como resultado,
 un mensaje con la cantidad */

 $lluvia["lunes"] = 50;
 $lluvia["martes"] = 100;
 $lluvia["miercoles"] = 12;
 $lluvia["jueves"] = 25;
 $lluvia["viernes"] = 40;
 $lluvia["sabado"] = 33;
 $lluvia["domingo"] = 2;

$cantidad_total_lluvia = 0;
foreach ($lluvia as $valor) {
    $cantidad_total_lluvia += $valor;
}
echo "La cantidad de lluvia total esta semana en Granada es de: " . $cantidad_total_lluvia;
?>
    
</body>
</html>