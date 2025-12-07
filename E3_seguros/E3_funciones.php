<?php


function calcularSeguro($aniocarnet, $genero, $aniomatricula, $combustible, $tiposeguro){
   $BASE="200";
   $precio = $BASE;
    //condiciones tomador
 //si el tomador tiene menos de 10 años de carnet BASE x2
    if ((date("Y") - $aniocarnet) < 10){
        $precio = $precio *2;
    }
 //si es mujer 10% descuento
    if ($genero === "MUJER"){
        $precio = $precio * 0.9;
    }
     //condiciones vehiculo
 //+ de 10 años de matriculación +100 eur
    if ((date("Y") - $aniomatricula) > 10){
        $precio = $precio + 100;
    }
 //si electrico 30% descuento
    if ($combustible === "electrico"){
        $precio = $precio * 0.7;
    }
 //si diesel aumento de 30%
    if ($combustible === "diesel"){
        $precio = $precio * 1.30;
    }
    //según modalidad
 //básico -- no cambia
  //intermedio -- +200 eur --- OJO CON ESTO por que esto son condiciones excluyentes
    if ($tiposeguro === "intermedio"){
        $precio = $precio + 200;
        //todo riesgo -- precio x2
    }elseif($tiposeguro === "todoriesgo"){
        $precio = $precio * 2;
    }
//todos los if se ejecutan uno tras otro, al ser independientes se van aplicando todas las
//condiciones verdaderas
return $precio;

}


?>