<?php
//Dadas las ventas de un comercio durante una quincena, escribe un script que lleve a la salida
// a cuánto asciende el total de dichas ventas.
$ventas = [123,1000,45,342,234,12,50,2];
$ventastotales = 0;
foreach ($ventas as $ventadia=>$valor){
    $ventastotales += $valor;
}
echo "el total de ventas es $ventastotales";// si esto lo pongo dentro del bucle, me va a mostrar la venta de
                                            //cada quincena sumada con la siguiente quincena y así, en cada vuelta
                                            //al ponerlo fuera, me muestra la suma del array
?>
