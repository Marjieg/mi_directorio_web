<?php
/*Partiendo de la variable $temperaturas (array de 12 elementos con los nombres de los
meses, como clave y la temperatura media máxima de cada mes, como valor):
$temperaturas = array("Enero" => 12, "Febrero" => 13, "Marzo" => 17, "Abril" => 19,
"Mayo" => 25, "Junio" => 31, "Julio" => 34, "Agosto" => 34, "Septiembre" => 28, "Octubre"
=> 23, "Noviembre" => 16, "Diciembre" => 13);
Se pide:
Generar un gráfico como se muestra a continuación, para el cuadrito se usa la imagen
barraTemp.png (suministrada).
pistas para que salga como se ve...
pista: '<img src = "imagenes/barraTemp.png" style="border: 1px solid black" />'
pista: <div style="font-family: monospace; font-size: 40px">
pista: str_pad($mes,15,'-').'>'
----- Se puede hacer sin usar <table>, pero si se quiere….
Suponiendo que la tabla tenga decimales:
$temperaturas = array("Enero" => 12.5, "Febrero" => 13.9,
"Marzo" => 14.1, "Abril" => 19, "Mayo" => 25, "Junio" => 31,
"Julio" => 34.4, "Agosto" => 34.45, "Septiembre" => 28,
"Octubre" => 23, "Noviembre" => 16, "Diciembre" => 13.346)*/

$temperaturas = array("Enero" => 12, "Febrero" => 13, "Marzo" => 17, "Abril" => 19,
"Mayo" => 25, "Junio" => 31, "Julio" => 34, "Agosto" => 34, "Septiembre" => 28, "Octubre"
=> 23, "Noviembre" => 16, "Diciembre" => 13);
foreach($temperaturas as $meses=>$valor){
    //$barratemp ="barraTemp/".$meses.".jpg";
    //$decimobarra = "decimoBarraTemp/".$valor."jpg";
    echo "<img src='$barraTemp.png' style="border: 1px solid black"> {$meses[]};
    echo "<img src='$decimoBarraTemp.png' style="border: 1px solid black" /> {$valor[]}'/>;
    echo "<div style="font-family: monospace; font-size: 40px"/>
    
    
}







?>