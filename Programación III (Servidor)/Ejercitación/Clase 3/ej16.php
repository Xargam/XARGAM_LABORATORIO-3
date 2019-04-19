<?php
/*Aplicación Nº 16 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/
$charArray = "Hola";
StringInverter($charArray);

function StringInverter($charArray)
{
    echo array_count_values( $charArray);
   /* for($i = 0 ; $i < array_count_values($charArray) ; $i++ )
    {
        echo array_count_values($charArray);
        //$aux = $charArray[$i];
        //$charArray[$i] = $charArray[array_count_values($charArray)-1-$i];
        //$charArray[array_count_values($charArray)-1-$i] = $aux;
    }*/
}
