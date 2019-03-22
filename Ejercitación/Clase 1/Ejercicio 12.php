<?php 
/*Aplicación Nº 12 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.*/
$lapiceras = array("color" => "rojo","marca" => "bic","trazo" => "fino","precio" => 10);
$lapiceras = array("color" => "verde","marca" => "bic","trazo" => "fino","precio" => 8);
$lapiceras = array("color" => "azul","marca" => "bic","trazo" => "fino","precio" => 11);

foreach($lapiceras as $lapicera)
{
    echo "lapicera:<bn/>" , var_dump($lapicera) ; 
}
?>