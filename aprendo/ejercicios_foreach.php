<?php
//Crea un array con nombres y sus profesiones.
/*Luego, usando foreach y una función, muestra frases como:
Marina es programadora.
Pablo es diseñador.
Lucía es profesora.*/
$personas = [
    "Marina"=>"programadora",
    "Pablo"=>"diseñador",
    "Lucía"=>"profesora"
];
function Profesiones($nombre,$profesion){  //en la función le paso los parámetros del interior del array
    echo "$nombre es $profesion.<br>";
}

foreach($personas as $nombre=>$profesion){ //en el foreach incluyo el array entero
    Profesiones($nombre,$profesion);        //quiero que en cada vuelta me devuelva la función Profesiones,
                                            //usando el interior del array, nombre y profesión
}
/*Ejercicio 2 — Notas y resultados
Tienes un array con alumnos y su nota.
Crea una función llamada evaluarAlumno($nota) que devuelva (no imprima) el resultado según su nota:
< 5 → “suspenso 😢”
5–6 → “aprobado 😊”
7–8 → “notable 💪”
≥9 → “sobresaliente 🌟”
Luego, recorre el array con foreach y muestra:
    Marina ha sacado un 9 — sobresaliente 🌟
Pablo ha sacado un 5 — aprobado 😊
Lucía ha sacado un 3 — suspenso 😢*/
$clase = [
    "Marina"=>"9",
    "Pablo"=>"5",
    "Lucía"=>3
];
/*function evaluarNota($alumno,$nota){
    if($nota >= 5 && $nota <9){
        echo "$alumno ha sacado un $nota - aprobado<br>";
    }elseif($nota >= 9){
        echo "$alumno ha sacado un $nota - sobresaliente<br>";
    }else{
        echo "$alumno ha sacado un $nota - suspenso<br>";
    }
}
foreach($clase as $alumno=>$nota){  //esta función lo que hace es crear el bucle, que recorra el array entero
    evaluarNota($alumno,$nota);        //ejecutando la función anterior
}*/
/*Ejercicio 3 — Calcular la media del curso
Crea una función llamada calcularMedia($notas) que reciba un array de notas y devuelva la media.
Usa foreach dentro de la función para sumar las notas y dividir entre el total.
Ejemplo
$notas = [8, 9, 6, 10, 7];
$media = calcularMedia($notas);
echo "La media del curso es $media";
*/
$notas = [8, 9, 6, 10, 7];

function calcularMedia($notas){
    $suma = 0;
    $contador =0;
    foreach($notas as $numero){
    $suma += $numero; //a la variable $suma, sumale el valor de $numero
    $contador++; //contamos que hemos pasadu una nota más
    }
    $media = $suma / $contador;
    return $media;  //devolvemos el resultado
}


//$resultado = calcularMedia($notas);
echo "La media del curso es :", calcularMedia($notas),"<br>";

/*Ejercicio 4 — Media por alumno

Usa un array así:
$clase = [
    "Marina" => ["PHP" => 9, "Python" => 8, "Bash" => 10],
    "Pablo" => ["PHP" => 5, "Python" => 6, "Bash" => 4],
    "Lucía" => ["PHP" => 4, "Python" => 7, "Bash" => 3]
];
Crea una función calcularMediaAlumno($notas) que reciba el subarray de cada alumno y devuelva su media.Luego muestra:
Marina tiene una media de 9 — Aprobado 🎉
Pablo tiene una media de 5 — Aprobado 😊
Lucía tiene una media de 4.6 — Suspenso 😢
(Puedes reutilizar tu función evaluarAlumno() del ejercicio anterior 👀)
*/
$clase = [
    "Marina" => ["PHP" => 9, "Python" => 8, "Bash" => 10],
    "Pablo" => ["PHP" => 5, "Python" => 6, "Bash" => 4],
    "Lucía" => ["PHP" => 4, "Python" => 7, "Bash" => 3]
];

// Función para calcular la media de un solo alumno
function calcularMediaAlumno($notas){ //$notas es un subarray de $clase
    $suma = 0;
    $contador =0;
    foreach($notas as $nota){  //recorre las notas del alumno
        $suma += $nota;  //acumula
        $contador++;
    }
    return $suma / $contador; //devuelve el resultado
}
// Función para evaluar según la nota
function evaluarNota($media){
    if($media >= 5 && $media <9){
        return "- aprobado<br>"; //si no pongo return la función evaluarNota() imprimiria echo directamente, entonces $resultado no recibe nada
    }elseif($media >= 9){
        return "- sobresaliente<br>";
    }else{
        return "- suspenso<br>";
    }
}

// Recorremos toda la clase
foreach($clase as $alumno=>$notas){
    $media =calcularMediaAlumno($notas);
    $resultado = evaluarNota($media);
    echo "$alumno tiene una media de " . round($media, 1) . "$resultado<br>";
}


?>