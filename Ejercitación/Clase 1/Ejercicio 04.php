<?php

$suma = 0;
$contadorNumerosSumados = 0;

for($i = 1 ; $suma <= 1000 ; $i++)
{ 
    echo "Se suman " , $suma , " y " , $i , "<br/>";
    $suma += $i;
    $contadorNumerosSumados++;
}

echo "Se sumaron " , $contadorNumerosSumados , " numeros.";

?>