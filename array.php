<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//funcion con array

    $bebidas = ['Café','Té','Agua','Cerveza','Vino','Refresco']; 

    echo "<h1>Escoja una de las siguientes ".count($bebidas)." bebidas</h1>";
    echo '<ul>';
    foreach ($bebidas as $b) {
        echo '<li>', $b, '</li>'; 
    }
    echo '</ul>';

?> 
</body>
</html>