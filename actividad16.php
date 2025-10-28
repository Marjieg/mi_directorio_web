<?php

//Escribe un script que registre la audiencia en cada una de las tres sesiones de las cuatro películas
//  que proyectó un cine el sábado pasado y que informe sobre
//  el total de espectadores en cada película y en cada sesión.
//¿Es posible hacerlo mediante un array asociativo? -- sí

$audiencia = [
    "sesion1" => ["superman"=>20,"batman"=>10,"spiderman"=>15,"catwoman"=>5],
    "sesion2" => ["superman"=>0,"batman"=>7,"spiderman"=>12,"catwoman"=>3],
    "sesion3" => ["superman"=>2,"batman"=>5,"spiderman"=>9,"catwoman"=>7],
];

$totalgeneral=0;
foreach($audiencia as $sesiones=>$peliculas){ //este recorre las sesiones
    echo "<h4>La audiencia de cada película para la $sesiones ha sido:</h4><br>";
    $sumasesiones=0;
    $numeropeliculas =count($peliculas);
    foreach($peliculas as $pelicula =>$espectadores){ //este recorre las peliculas de esa sesión
        echo "$pelicula - $espectadores espectadores<br>";
        $sumasesiones +=$espectadores; //sumamos valores paso a paso
        $totalgeneral +=$espectadores; //total general del día
    }
    echo "<h4>El total de espectadores de la sesión es : $sumasesiones</h4>";
}
echo "<h2>El total de espectadores del sábado ha sido de $totalgeneral</h2>";

//Escribe un script que calcule la audiencia total del cine anterior durante un fin de semana.

 $audiencia2 = [
    "sesion1" => ["superman"=>20,"batman"=>10,"spiderman"=>15,"catwoman"=>5],
    "sesion2" => ["superman"=>0,"batman"=>7,"spiderman"=>12,"catwoman"=>3],
    "sesion3" => ["superman"=>2,"batman"=>5,"spiderman"=>9,"catwoman"=>7],
];   

function audfinde($audiencia2){
$totaldomingo=0;
    foreach($audiencia2 as $sesiones=>$peliculas){ //este recorre las sesiones
   
    $sumasesiones2=0;
    $numeropeliculas =count($peliculas);
    foreach($peliculas as $pelicula =>$espectadores){ //este recorre las peliculas de esa sesión
        echo "$pelicula - $espectadores espectadores<br>";
        $sumasesiones2 +=$espectadores; //sumamos valores paso a paso
        $totaldomingo +=$espectadores; //total general del día
    }
    echo "<h4>El total de espectadores de la sesión es : $sumasesiones2</h4>";
    }
   
 return $totaldomingo; //solo un return por función
}

$totaldomingo = audfinde($audiencia2);
$totalfinde = $totaldomingo + $totalgeneral;
echo "<h1>el total de espectadores del finde es de $totalfinde</h1> ";


?>