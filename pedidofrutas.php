<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function shuffle_asociativo(&$array) {
    //tomamos solos las claves en un array aparte
        $claves = array_keys($array);
    //barajamos el array de $claves
        shuffle($claves);
    //generamos un nuevo array asociativo con las claves y valores correctos
       $nuevo=array();
        foreach($claves as $clave) {
            $nuevo[$clave] = $array[$clave];
        }
    //sobreescribimos el $array, pues se pasa por referencia
        $array = $nuevo;
    //devolvemos true siempre
        return true;
    }
    
    // Partiendo del array
    //$listaFrutasPrecio =['Peras'=> 2,15, 'Limones'=>2,80, 'Cerezas'=>3,35,
    //'Narnjas'=>5,31, 'Uvas'=>3,42, 'Manzanas'=> 4,43, 'Mango'=>3,90];
    //y teniendo en cuenta que el máx de kg q podemos cargar es de 10 y que como mucho
    //tenemos 20eur hacer un programa c9_pedidoFrutas.php que genere un pedido de frutas al azar connection_abortedestas
    //limitaciones y que salga asi ()
    
    
    
    ?>
</body>
</html>