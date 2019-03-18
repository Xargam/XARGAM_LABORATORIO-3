<?php

$vec = Array();
$contador = 0;
$numero = 0;

while( $contador < 10 )
{
    $numero = rand();
    if($numero % 2 != 0)
    {
        $vec[$contador] = $numero;
        $contador++;
    }
}

foreach($vec as $numero)
{
    echo $numero , "<br/>";
}
?>