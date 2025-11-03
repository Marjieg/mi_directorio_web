<?php
$equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
"Villarreal", "FC Barcelona", "Sevilla", "Getafe", "Valencia",
"Cádiz", "Granada", "Osasuna", "Atlético de Madrid", "Celta de
Vigo", "Eibar", "Huesca", "Elche", "Alavés", "Levante",
"Athletic Club", "Real Valladolid"];
//Apartado A) generar dos arrays al azar de 10 elementos cada uno, $locales y $visitantes,
//con los nombres de los equipos para hacer los emparejamientos de una jornada
/*Funciones usadas en mi solución, por si os ayudan: shuffle() y array_slice(). Se suministra un zip con los escudos
....
echo '--------------APARTADO A) -------------';
echo "<h5> LOCALES </h5> ";
var_dump($locales);
echo "<h5> VISITANTES </h5> ";
var_dump($visitantes);
....
devuelve:*/


shuffle($equipos); //shuffle ya baraja y mezcla los equipos

$locales = array_slice($equipos,0,10); //corta los 10 primero elementos
$visitantes= array_slice($equipos,10,20); //corta los 10 siguientes


echo '--------------APARTADO A) -------------';
echo "<h5> LOCALES </h5> ";
var_dump($locales);
 
echo "<h5> VISITANTES </h5> ";
var_dump($visitantes);

/*Apartado B) generar dos arrays al azar de 10 elementos cada uno, $golesLocales y
$golesVisitantes, de 0 a 6 goles. El código:
....
echo '<br><br>--------------APARTADO B) -------------';
echo "<h5> GOLES LOCALES </h5> ";
var_dump($golesLocales);
echo "<h5> GOLES VISITANTES </h5> ";
var_dump($golesVisitantes); */

#creo los arrays vacios
$golesLocales = [];
$golesVisitantes = [];
#relleno con numeros aleatorios del 0 al 6
for ($i=0;$i < 10;$i++){ //le digo al bucle que hasta que no haya generado 10 elementos sume una vuelta
    $golesLocales[] = rand(0,6); //genera un n aleatorio entre 0 y 6 y lo añade al array
    $golesVisitantes[] =rand(0,6); //lo mismo pero para el equipo visitante
}

echo '<br><br>--------------APARTADO B) -------------';
echo "<h5> GOLES LOCALES </h5> ";
var_dump($golesLocales);
echo "<h5> GOLES VISITANTES </h5> ";
var_dump($golesVisitantes);

/*Apartado C) mostrar en pantalla los resultados de la jornada generada
Podéis hacerlo como queráis, pero debe quedar algo como */

echo "<h2>RESULTADOS DE LA JORNADA</h2>";
echo "<table border='1' cellpadding='5'; text-aling:center;'>";
echo "<tr><th>Local</th><th>Resultado</th><th>Visitante</th></tr>";
for ($i=0;$i<10;$i++){
    echo "<td>$locales[$i]</td>";
    echo "<td>$golesLocales[$i]";
    echo " - $golesVisitantes[$i]</td>";
    echo "<td>$visitantes[$i]</td>";
    echo "</tr>";
}
echo "</table>";

//Apartado D (EXTRA) mostrar el resultado de esta forma bonica!! (escudos incluidos!)
echo "<h2>RESULTADOS DE LA JORNADA</h2>";
echo "<table border='1' cellpadding='5'; text-aling:center;'>";
echo "<tr><th>Local</th><th>Resultado</th><th>Visitante</th></tr>";
for ($i=0;$i<10;$i++){
    //convertimos el nombre del equipo a formato del archivo
    $escudoLocal ="escudosEquipos/" . str_replace(" ","_",$locales[$i]) . ".jpg";
    $escudoVisitante ="escudosEquipos/" . str_replace(" ","_",$visitantes[$i] . ".jpg");
  echo "<tr>";
    echo "<td><img src='$escudoLocal' width='40' height='40'> {$locales[$i]}</td>";
    echo "<td><strong>{$golesLocales[$i]} - {$golesVisitantes[$i]}</strong></td>";
    echo "<td>{$visitantes[$i]} <img src='$escudoVisitante' width='40' height='40'></td>";
    echo "</tr>";
}
echo "</table>";


?>