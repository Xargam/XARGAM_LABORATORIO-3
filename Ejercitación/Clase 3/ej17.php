<?php
/* Aplicación No 17 (Validar palabra)
Crear una función que reciba como parámetro un string ( $palabra ) y un entero ( $max ). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario */
$palabra = "code";
echo "Palabra '{$palabra}', validez: ".validarPalabra($palabra,11);
function validarPalabra (string $palabra , int  $max ) : int
{
    $lista = array("recuperatorio","parcial","programacion");
    $palabra = strtolower($palabra);
    return (array_search($palabra,$lista) > -1 && strlen($palabra) <= $max)? 1 : 0 ;
}
?>
