
<?php 
/*Aplicación Nº 12 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.*/
/*Se debería hacer con un Array de doble dimensión pero como en el ultimo un ejercicio especifica que 
se usen arrays de Arrays infiero que en este no pide eso.*/

$lapicera1 = array("color" => "rojo","marca" => "bic","trazo" => "fino","precio" => 10);
$lapicera2 = array("color" => "verde","marca" => "bic","trazo" => "fino","precio" => 8);
$lapicera3 = array("color" => "azul","marca" => "bic","trazo" => "fino","precio" => 11);

var_dump($lapicera1);
echo("<br>");
var_dump($lapicera2);
echo("<br>");
var_dump($lapicera3);
echo("<br>");
?>