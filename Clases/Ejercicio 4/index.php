<?php
$resultado = 0;
for($i = 1 ;$resultado <= 1000;i++ )
{
    echo "Sumados: ", $i , " y " , $i+1 ," ";
    $i += $i+1;
    echo "Resultado: " , $i ;
    echo "<br>";
}
?>