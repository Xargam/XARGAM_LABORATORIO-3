<?php
/*Aplicación Nº 16 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/

echo StringInverter("INFLACION");
function StringInverter (string $charArray ) : string
{
    $invertedCad = "";
    for($index = 0 ; $index < strlen($charArray) ; $index++  )
    {
        $invertedCad[$index] = $charArray[strlen($charArray)-1-$index];
    }
    return $invertedCad;
}

?>