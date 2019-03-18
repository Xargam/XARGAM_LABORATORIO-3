<?php

const elementos = 5;
$vec = Array();
$promedio = 0;
$suma = 0;

echo "Elementos:<br>";

for($i = 0 ; $i < elementos ; $i++)
{
    $vec[$i] = rand();
    $suma += $vec[$i];
    echo $vec[$i], "<br>";
}

$promedio = $suma / elementos; 
echo "El promedio es: " , $promedio, "<br>";

if( $promedio > 6)
{
    echo "El promedio es mayor que 6.";
}
else if( $promedio == 6)
{
    echo "El promedio es igual que 6.";
}
else
{
    echo "El promedio es menor que 6.";
}
?>