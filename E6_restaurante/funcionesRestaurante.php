<?php

/*Apartado 3:
Crear un repositorio de funciones para este ejercicio, funcionesRestaurante.php:
function mediaPrecios($array), devuelve el precio medio del array asociativo que se pase.
*/

include 'cocina.php';

function mediaPrecios($array): float{
    $contador = 0;
    $suma =0;
    foreach($array as $key=>$valor){
        $suma+= $valor; //voy sumando los precios de todo el array
        $contador ++; //cuento el número de elementos que hay
    }
    $media = ($suma / $contador); //divido el total de los precios entre los platos
    return $media;
}

//var_dump($primeros); //he usado esto para ver si me imprimía bien el array

//var_dump(mediaPrecios($primeros));
//var_dump(str_pad($plato,25,"-",2)); //str_pad escribe -----

//function horaAMinutos($hora), recibe un string en el formato “HH:MM” devuelve el total de
//minutos. que le paso? una hora con unos minutos, quiero que me devuelva el total de min, 
//para eso necesito separar la hora HH de los MM, multiplicar HH por 60 y a eso sumarle MM
function horaAMinutos($hora) {
  $partes = explode(":", $hora); // Divide la cadena en horas y minutos
  $horas = $partes[0];
  $minutos = $partes[1];
  $totalMinutos = ($horas * 60) + $minutos;
  return $totalMinutos;
}

/*function minutosAHora($minutos), recibe un entero con minutos y devuelve un string en el
formato “HH:MM”*/

function minutosAHora($minutos){
    $horas = (int)($minutos/60); //parte entera de las horas
    $minutosRestantes = $minutos % 60; //minutos restantes
    $horasFormateadas = str_pad($horas,2,"0",STR_PAD_LEFT);
    $minutosFormateados = str_pad($minutosRestantes,2, "0",STR_PAD_LEFT);
    return $horasFormateadas . ":". $minutosFormateados;
}


$precioMprimero = mediaPrecios($primeros);
$precioMsegundo = mediaPrecios($segundos);
$precioMpostre = mediaPrecios($postres);
$precioMenu = $precioMprimero + $precioMsegundo + $precioMpostre;
echo "precio MENÚ".$precioMenu;



//minutosAHora(horaAMinutos($horaApertura)
// strftime("%A") -- esto devuelve el día actual de la semana
//var_dump(strftime("%H,%M")) esto me devuelve la hora y los minutos actuales
//var_dump(date(w));






?>