<?php
/*Aplicación Nº 10 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.*/
$vec = array();
for($i = 0 ; count($vec) < 10  ; $i++ )
{
    if($i % 2 != 0)
    {
        array_push($vec,$i);
        echo $i , "<br/>";
    }
}
echo "En un foreach: <br/>";
foreach($vec as $numero)
{
    echo $numero , "<br/>";
}
echo "En un while: <br/>";
$j =0;
while($j < 10)
{
    echo $vec[$j] , "<br/>";
    $j++;
}
?>