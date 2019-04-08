<?php
include "./resources/Rectangulo.php";

$vertice1 = new Punto(0,0);
$vertice3 = new Punto(5,5);
$rectangulo = new Rectangulo($vertice1, $vertice3);
echo $rectangulo->toString();
echo $rectangulo->dibujar();
?>
