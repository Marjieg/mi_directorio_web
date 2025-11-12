<?php
include 'almacen.php'; //he puesto esto para llamar a los arrays que he creado en ese archivo php


function totalArticulos($listaArticulos_01){
    $suma_01 = 0;
    foreach($listaArticulos_01 as $key_01=> $valor_01){
        $suma_01 += $valor_01;
    }
    return $suma_01; //me está devolviendo la suma de los valores del array---
}
//hago lo siguiente para comprobar con un array, en este caso el de $juegos_01, que me devuelva la suma
echo "la suma del array conrrespondiente a los valores del mismo es de ".totalArticulos($juegos_01)."<br>"; 


function PrecioConDescuento($precio_01, $descuento_01){
    $descuentoAplicado_01 = $descuento_01 * 0.1; //para que se aplique el descuento en %
    $precioFinal_01 = $precio_01 - $descuentoAplicado_01; //hacer el descuento en porcentaje
    return $precioFinal_01;
}

echo "el precio final con el descuento aplicado es de". PrecioConDescuento(30,10)."euros <br>"; //esto lo he hecho para probar lo que me devolvía

function fechaEntrega($tiempoEnvio_01){

    $fechaActual_01 = date('d-m-Y'); //esto para que me de la fecha actual
    $tiempoEnvio_01 = date('d-m-Y'); //y aquí tendría que transformar el entero que me de a un formato de fecha
//tengo que dar formato a esto para poderlo sumar a la fecha
    $entregaPrevista_01 = $fechaActual_01 + $tiempoEnvio_01; //a la fecha actual le tengo que sumar los días previstos de tiempo de envío
    
    return $entregaPrevista_01;
}

echo "el envío esta previsto para el día ".fechaEntrega(5); //esto lo he hecho para probar lo que me devolvía

?>