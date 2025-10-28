<?php
/*Dado el código fuente suministrado, modificarlo para que funcione lo mismo usando:

 -  La estructura do {} while <condición> , subid el fichero con nombre doWhile.php
 -  La estructura for (<valor incial>;<condición>;<incremento>) , subid el fichero con nombre for.php*/
    //Vamos a tirar el dado MIENTRAS no salga un 6 y un tope de tiradas
    //entre 1 y MAXIMO_TIRADAS
    const MAXIMO_TIRADAS = 10;
    //generamos el $TopeDeTiradas
    $TopeDeTiradas = RAND(1,MAXIMO_TIRADAS);
    echo"<h5>Tienes $TopeDeTiradas tiradas</h5></br>";
    //Lanzamos el dado la ptimera vez
    $dado=rand(1,6);
    //inicializamos un contador para saber cuando sale el 6
    $contador =1;

    //mientras NO sea 6(!=)y no más de MAXIMO_TIRADAS
    while(($dado !=6)&& ($contador < $TopeDeTiradas)){
        //mostramos el resultado
        echo"Tirada numero: $contador resultado:$dado.</br>";
        //lanzamos otra vez
        $dado=radn(1,6);
        $contador++;
    }
    //pregntaos por qué hemos salido
    if ($dado==6){
        echo"ha salido un $dado en la tirada nº$contador";
    }else{
        //mostramos el resultado
        echo "Tirada número: $contador reultado:$dado.<br>";
        echo "se agotaron las tiradas";
    }
//a estructura do {} while <condición>

    do{
        echo"Tirada numero: $contador resultado:$dado.</br>";
        //lanzamos otra vez
        $dado=radn(1,6);
        $contador++;
        if ($dado==6){
            echo"ha salido un $dado en la tirada nº$contador";
        }else{
        //mostramos el resultado
            echo "Tirada número: $contador reultado:$dado.<br>";
            echo "se agotaron las tiradas";
    
    }while(($dado !=6)&& ($contador < $TopeDeTiradas));






?>