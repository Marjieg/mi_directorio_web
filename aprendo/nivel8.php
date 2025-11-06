<?php
/*Calcular la hora actual y mostrar un saludo personalizado
Si la hora es < 12 → “Buenos días”
Si está entre 12 y 18 → “Buenas tardes”
Si > 18 → “Buenas noches”*/

$horaActual = date('H');

if($horaActual < '12'){
    echo "Buenos días";
}elseif($horaActual >= '12' && $horaActual < '18'){
    echo "Buenas tardes";
}else{
    echo "Buenas noches<br>";
}

/*Función horaAMinutos($hora)
👉 Convierte "HH:MM" a minutos totales.*/

function horaAMinutos($hora){
    $partes = explode(":",$hora);
    $horas = (int)$partes[0];
    $minutos = (int)$partes[1];
    $totalmin = ($horas * 60)+ $minutos;
    return $totalmin;
}
echo horaAMinutos("23:21<br>");

/*Crea un script que:
Pida hora de entrada y hora de salida (por ejemplo "09:15" y "17:45")
Calcule cuántos minutos has trabajado en total.
Muestra el resultado en formato horas (HH:MM).*/

$horaEntrada = ("09:15");
$horaSalida = ("17:45"); //aquí tendría que restar a las 17:45, 9:15, para hacer eso hay una función

$minutoTrabajados = horaAMinutos($horaSalida) - horaAMinutos($horaEntrada);
echo $minutoTrabajados."<br>";

function minutosAhora($minutos){
    $horas = floor($minutos / 60);
    $mins = $minutos % 60;
    return "$horas : $mins";
}
echo minutosAhora($minutoTrabajados);
?>