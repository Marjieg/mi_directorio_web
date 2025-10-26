<?php
//Escribe un programa que cree un array asociativo en el que se guarde la cantidad de lluvia (en litros por metro cuadrado)
//de todos los días de esta semana en Granada y genere, como resultado, un mensaje con la cantidad total.

$lluvias=[
    "lunes"=>"200",
    "martes"=>"10",
    "miercoles"=>"120",
    "jueves"=>"20",
    "viernes"=>"1",
    "sabado"=>"34",
    "domingo"=>"23"
];
$suma = 0;  //inicializo mis contadores
foreach($lluvias as $lluvia=>$valor){
    $suma += $valor; //va sumando en cada vuelta del bucle el valor
}
echo "La cantidad de lluvia total de esta semana en Granada es de $suma litros por metro cuadrado.";






?>