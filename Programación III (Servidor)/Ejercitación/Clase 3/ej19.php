<?php
#Aplicación Nº 19 (Figuras geométricas)

require_once "./Lib/FiguraGeometrica.php";
require_once "./Lib/Rectangulo.php";
require_once "./Lib/Triangulo.php";

$triangulo = new Triangulo(2,4,"blue");
echo $triangulo->ToString();
echo $triangulo->Dibujar();
?>