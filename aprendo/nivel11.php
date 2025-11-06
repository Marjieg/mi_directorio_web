<?php
/*Escribe un script que simule el comportamiento de lanzar una
moneda al aire y muestre una imagen con la cara o la cruz de la moneda.*/

$moneda = rand(1,2);

if($moneda == 1){
    $moneda = "cara";
    echo "<img src= 'cara.jpg' width= '80' heigth= '80'/>";
    echo "ha salido $moneda";
}else{
    $moneda = "cruz";
    echo "<img src= 'cruz.jpg' width= '80' heigth= '80'/>";
    echo "ha salido $moneda";
}

?>