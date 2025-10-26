<?php 
/*Tienes este array con varios alumnos, y cada uno tiene varias asignaturas con su nota:
$clase = [
    "Marina" => ["PHP" => 9, "Python" => 8, "Bash" => 10],
    "Pablo"  => ["PHP" => 5, "Python" => 6, "Bash" => 4],
    "Lucía"  => ["PHP" => 4, "Python" => 7, "Bash" => 3],
    "Sofía"  => ["PHP" => 10, "Python" => 9, "Bash" => 9]
];
Recorre toda la clase.
Muestra el nombre del alumno.
Debajo, muestra cada asignatura y su nota.
Al final de cada alumno, calcula y muestra su nota media.
(Opcional, nivel Pro ): Indica si el alumno está aprobado o suspenso según su media (≥5).*/
$clase = [
    "Marina" => ["PHP" => 9, "Python" => 8, "Bash" => 10],
    "Pablo"  => ["PHP" => 5, "Python" => 6, "Bash" => 4],
    "Lucía"  => ["PHP" => 4, "Python" => 7, "Bash" => 3],
    "Sofía"  => ["PHP" => 10, "Python" => 9, "Bash" => 9]
];
foreach ($clase as $alumno=> $asignaturas){
    echo "Alumno : $alumno<br>";
    $suma = 0;
    $contador =0;
    foreach ($asignaturas as $asignatura=> $nota){     
        echo "$asignatura: $nota<br>";
        $suma += $nota;
        $contador++;
    }
    $media = $suma / $contador;

    if($media >= 5){
         echo "media: $media - aprobado<br>";
    }else{
         echo "media: $media - suspenso<br>";
    }
}
        
        
        
    



?>