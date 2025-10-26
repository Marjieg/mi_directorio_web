<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*Escribe un programa que cree un array indexado con el nombre de los módulos de tu curso y, 
    a continuación, lleve a la salida un título y, haciendo uso de un bucle foreach, la lista de estos.
    Modifica el código anterior para sustituir el bucle foreach por un bucle for.*/



$modulos = ['SRI', 'IAW', 'ADGDB', 'SAD', 'PYTHON', 'INGLES', 'IPE2', 'ASO', 'PROYECTO'];
/*
 echo "<h1>En este curso tenemos ".count($modulos)." asignaturas</h1>";
    echo '<ul>';
    foreach ($modulos as $m) {
        echo '<li>', $m, '</li>'; 
    }
    echo '</ul>';
----------------------
*/
for ($modulo = 0; $modulo<=count($modulos)-1; $modulo++){
    echo $modulos[$modulo] . '<br>';
}


?>
</body>
</html>