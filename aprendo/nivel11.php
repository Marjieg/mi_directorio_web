<?php
/*Escribe un script que simule el comportamiento de lanzar una
moneda al aire y muestre una imagen con la cara o la cruz de la moneda.*/

$moneda = rand(1,2);

if($moneda == 1){
    $moneda = "cara";
    echo "<img src= 'cara.jpg' width= '80' heigth= '80'/>";
    echo "ha salido $moneda<br>";
}else{
    $moneda = "cruz";
    echo "<img src= 'cruz.jpg' width= '80' heigth= '80'/>";
    echo "ha salido $moneda <br> ";
}

/*Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre 
un mensaje indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 2 martes, etc.*/

$num = rand(1,7);
switch($num){
    case 1:
        echo "Es lunes";
        break;
    case 2:
        echo "Es martes";
        break;
    case 3:
        echo "Es miercoles";
        break;
    case 4:
        echo "Es jueves";
        break;
    case 5:
        echo "Es viernes";
        break;
    case 6;
        echo "Es sábado";
        break;
    case 7;
        echo "Es domingo"; 
        break;   
}



?>