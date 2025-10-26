<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*Escribe un programa que, dados los valores de la base y la altura de un rectángulo, utilice una función para cada una de estas tareas:

    Devolver su área. 
    Devolver su perímetro.
    Intercambiar los valores de su base y su altura.
    CORREGIR EN CASA*/ 


function area ($base, $altura) {
    echo "el área del rectángulo es"." ". ($base * $altura). "<br>";
}


function perimetro ($base, $altura) {
    echo "el perímetro es". " ".($base + $altura)*2 ;
}


$altura = 8;
$base = 6;
area ($base, $altura);
perimetro ($base, $altura);
perimetro($altura,$base);



?>
    
</body>
</html>