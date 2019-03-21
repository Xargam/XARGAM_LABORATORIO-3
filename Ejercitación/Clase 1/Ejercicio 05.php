<?php
$x = 2;
$y = 0;
$z = 1;
$aux = 0;
$msj = "No hay valor del medio";

for($i = 0 ; $i < 3 ; $i++)
{
    $aux = $x; //Voy moviendo las variables de tal forma de buscar que $y (la central) quede entre un num mayor y otro menor.
    $x = $y ;
    $y = $z;
    $z = $aux;

    if( $x < $y && $y < $z || $x > $y && $y > $z  )
    {
        $msj = "El valor medio es ".$y;
        break;
    }
}
echo $msj;

?>