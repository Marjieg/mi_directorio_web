<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

/*Apartado 4:
Crear una página web carta.php, tal y como se ve en el ejercicio. Debe aparecer el horario de
apertura y cierre.*/

include 'datosRestaurante.php';
include 'cocina.php';
include 'funcionesRestaurante.php';
//include 'menuDia.php';

echo"<h3>Rte. ->> TRAETE LA BEBIDA <--- </h3>";
echo"<h3>Menu de hoy ". date("D") ."</h3>";
echo "-------------------------------------------------";
echo"<h3>PRIMEROS</h3>";
foreach($primeros as $key=>$valor){ 
    echo "$key - ";
}
echo"<h3>SEGUNDOS</h3>";
foreach($segundos as $key=>$valor){
    echo "$key * ";
}

echo"<h3>POSTRES</h3>";
foreach($postres as $key=>$valor){
    echo "$key ~  ";
}
echo "--------------------------------------------------";
echo"<h2>PRECIO MENU $precioMenu eur $iva incluido </h2>";
echo "--------------------------------------------------<br>";
//Si es fin de semana (incluido el viernes), el horario de apertura se adelanta 30 minutos y el de cierre
//se retrasa 45 minutos

$diaNumero = date("N"); // 1=lunes, ... 5=viernes, 6=sábado, 7=domingo

if ($diaNumero >= 5) { // viernes, sábado o domingo
    $hApertura = strtotime("-30 minutes", $hApertura);
    $hCierre   = strtotime("+45 minutes", $hCierre);
    echo "Hoy es fin de semana o viernes: horario ampliado.<br>";
} else {
    echo "Hoy es día laborable: horario normal.<br>";
}


echo "Abierto de $hApertura a $hCierre <br>";
echo "Gracias por su visita";




?>
    
</body>
</html>



