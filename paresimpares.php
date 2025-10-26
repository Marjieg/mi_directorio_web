<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 0 < 10 es lo mismo que 1 <= 10 --> da 10 vueltas en estos dos casos

/*  Mejora el código anterior para que no se lleve a la salida el último espacio en blanco.
    Escribe scripts PHP para generar:
       a) Los números pares comprendidos entre 50 y 80.
        b) Los números enteros entre 17 y -17.
        c) La tabla de multiplicar del número 6..*/
     

//a)

$pares = [];
for ($i = 50; $i <= 80; $i++) {
    if ($i % 2 == 0) {
        $pares[] = $i;
    }
}
echo implode(' ', $pares). "<br>";

//b)


$enteros = [];
for ($i = -17; $i <=17 ; $i++) {
    if ($i) {
        $enteros[] = $i;
    }
}
echo implode(' ', $enteros)."<br>";

//c)La tabla de multiplicar del número 6..desde 1 hasta 100 

$multiplica = [];
for ($i = 1; $i <=100 ; $i++) {
    if ($i % 6 == 0) {
        $multiplica[] = $i;
    }
}
echo implode(' ', $multiplica)."<br>"; 

//Reescribe los scripts anteriores utilizando el bucle do ... while.TERMINAR DE HACER
// a) Pares entre 50 y 80 con do...while
$pares = [];
$i = 50;
do {
    if ($i % 2 == 0) {
        $pares[] = $i;
    }
    $i++;
} while ($i <= 80);
echo "a) Pares entre 50 y 80 (do...while): " . implode(' ', $pares) . "<br>";

// b) Enteros entre 17 y -17 con do...while
$enteros = [];
$i = 17;
do {
    $enteros[] = $i;
    $i--;
} while ($i >= -17);
echo "b) Enteros entre 17 y -17 (do...while): " . implode(' ', $enteros) . "<br>";

// c) Tabla del 6 con do...while
$multiplica = [];
$i = 6;
do {
    $multiplica[] = $i;
    $i += 6;
} while ($i <= 100);
echo "c) Tabla del 6 (do...while): " . implode(' ', $multiplica) . "<br>";
    ?>
    
</body>
</html>