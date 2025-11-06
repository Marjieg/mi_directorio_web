<?php
/*Apartado 5:
Crear una página web que imprima un menú del día, menuDia.php, poniendo al menos 2 platos de
cada array ($primeros, $segundos y $postres) al azar y calculando el precio del menú con la media
de los precios de cada parte*/

//include 'datosRestaurante.php';
include 'cocina.php';
//include 'carta.php';
include 'funcionesRestaurante.php';

//echo "Menú de hoy".date('w')."<br>";
//echo "PRIMEROS <br>";

//echo "El precio medio de los primeros es de ".mediaPrecios($primeros)."euros<br>";
//echo "El precio medio de los seguntos es de ".mediaPrecios($segundos)."euros<br>";
//echo "El precio medio de los postres es de ".mediaPrecios($postres)."euros<br>";
$precioMprimero = mediaPrecios($primeros);
$precioMsegundo = mediaPrecios($segundos);
$precioMpostre = mediaPrecio($postres);
$precioMenu = $precioMprimero + $precioMsegundo + $precioMpostre;
echo "precio MENÚ".$precioMenu;

?>