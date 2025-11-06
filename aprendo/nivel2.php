<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Pide (o define en una variable) la edad del usuario y:
Si es menor de 18 → “Eres menor de edad ”
Si está entre 18 y 65 → “Eres adulto ”
Si es mayor de 65 → “Eres jubilado*/
$edad = "34";

if ($edad < 18){
    echo "eres menor de edad";
}elseif($edad >= 18 && $edad < 65){
    echo "eres adulto";
}else{
    echo "estas jubilado";
}
//Haz un bucle while que cuente del 5 al 1 (decreciendo) y muestre cada número.
$i = 5;
while($i>=1){
    echo "cuentra atrás $i<br>";
    $i--;
}
//Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila
//  y 10 columnas. Utiliza un bucle while

$i=1;
echo"<table border='1'><tr>";
while($i <=10){
    echo "<td>$i</td>";
    $i++;
}
echo "</td></table>";

    ?>
</body>
</html>