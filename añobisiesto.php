<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Dado un año, envíe un mensaje para señalar si es bisiesto o no. 
//Los años bisiestos son aquellos que son divisibles por 4, excepto los que son divisibles por 100 sin serlo por 400.
$anio = rand(1900, 2025);

if (($anio % 400 == 0) or ($anio % 4 == 0 and $anio % 100 != 0)) {
    echo "es bisiesto";
}else {
    echo "no es bisiesto";
}
    ?>
</body>
</html>