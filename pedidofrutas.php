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
    //'Naranjas'=>5,31, 'Uvas'=>3,42, 'Manzanas'=> 4,43, 'Mango'=>3,90];
    //y teniendo en cuenta que el máx de kg q podemos cargar es de 10 y que como mucho
    //tenemos 20eur hacer un programa c9_pedidoFrutas.php que genere un pedido de frutas al azar
    //limitaciones y que salga asi ()
 $listaFrutasPrecio =[
        'Peras'=> 2.15,
        'Limones'=>2.80, 
        'Cerezas'=>3.35,
        'Naranjas'=>5.31, 
        'Uvas'=>3.42, 
        'Manzanas'=> 4.43, 
        'Mango'=>3.90];
$kgmax = 10;  //establezco el peso máximo
$presupuesto =20; //establezco el presupuesto también
shuffle_asociativo($listaFrutasPrecio); //usando la función dada en el ejercicio que está arriba

$totalKg = 0;   //inicializo los contadores
$totalPrecio = 0;
$pedido = []; //array para guardar las frutas que compro
echo "<h3>Hola, cargo máximo 10kg y tengo 20 eur</h3><br>";
foreach ($listaFrutasPrecio as $fruta => $precioKg) { //recorro las filas
    $kilos = rand(1, 3); // kilos al azar
    $coste = $kilos * $precioKg; //calculo el coste
    // Comprobamos que no superamos los límites antes de añadir
    if (($totalKg + $kilos) <= $kgmax && ($totalPrecio + $coste) <= $presupuesto) {
        $pedido[$fruta] = [ //creo un nuevo array asociativo
            'kilos' => $kilos,
            'precioKg' => $precioKg,
            'subtotal' => $coste
        ];
        $totalKg += $kilos; //esto me suma todos los kg
        $totalPrecio += $coste; //esto me da el total del coste
    } else {
        break; // si se pasa de límites, paramos
    }
// Mostramos el resultado
    echo "$fruta $kilos kg $precioKg euros $coste<br>"; //imprimo la fruta,kg y el coste
    //este echo lo imprimo aquí porque quiero la parte local de cada fruta, el interior del buble
}
//quiero mostrar el pedido aleatorio de fruta, la fruta, el precio y los kg
echo "<h4>el total kg es $totalKg kg y vale $totalPrecio euros</h4><br>";
    //este lo imprimo aquí porque quiero el global total de kg y de precio
    ?>
</body>
</html>