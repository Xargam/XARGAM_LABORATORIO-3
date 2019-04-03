<?php
$suma = 0;
$contadorNumerosSumados = 0;

for($i = 1 ; $suma + $i <= 1000 ; $i++)
{ 
    echo "Se suman " , $suma , " y " , $i ;
    $suma += $i;
    echo " resultado: " , $suma , "<br/>";
    $contadorNumerosSumados++;
}

echo "Se sumaron " , $contadorNumerosSumados , " numeros.";
?>