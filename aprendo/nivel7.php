<?php
/*Crea una función llamada evaluarNota($nota) que:
Reciba una nota (0 a 10).
Devuelva una cadena de texto:
Si la nota < 5 → “Suspenso 😢”
Si la nota >= 5 y < 7 → “Aprobado 😊”
Si la nota >= 7 y < 9 → “Notable 💪”
Si la nota >= 9 → “Sobresaliente 🌟”*/

function evaluarNota ($nota){
  if($nota >=5 && $nota < 7){
        echo "aprobado";
  }elseif($nota >=7 && $nota < 9){
        echo "notable";
  }elseif($nota >= 9){
        echo "sobresaliente";
  }else{
        echo "suspenso";
  }
}
evaluarNota(7);
?>