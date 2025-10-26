<?php
    declare(strict_types=1);

/*Esta directiva activa el modo de tipos estrictos para un archivo,
 obligando a que los tipos de los argumentos de las funciones y 
 los valores de retorno coincidan exactamente con los declarados, 
 lanzando un TypeError si no es así. Esto evita las conversiones automáticas
  de tipo y ayuda a prevenir errores, haciendo el código más robusto y fiable*/
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  //calcularia el triple de un numero pero no imprimiria nada si no se lo pasamos por referencia
       function triple($numero):int {
          return $numero * 3; 
       }

       $num = 2.25; 
       echo $triple($num); 
       #echo $res.'<br>';
       #echo $num;
     
    ?>
    
</body>

</html>