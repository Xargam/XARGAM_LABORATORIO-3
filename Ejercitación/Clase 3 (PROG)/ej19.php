<?php
/*plicación No 19 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,
un método getter y setter para el atributo _color , un método virtual ( ToString ) y dos
métodos abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).
Ejemplo:
*
***
*****
*******
*******
*******
Neiner, Maximiliano
PHP- 2019
Página 1Utilizar el método ToString para obtener toda la información completa del objeto, y luego
dibujarlo por pantalla.
Jerarquía de clases:*/
#Aplicación Nº 19 (Figuras geométricas)

require_once "./ej19.lib/FiguraGeometrica.php";
require_once "./ej19.lib//Rectangulo.php";
require_once "./ej19.lib//Triangulo.php";

$triangulo = new Triangulo(2,4,"blue");
echo $triangulo->ToString();
echo $triangulo->Dibujar();
?>