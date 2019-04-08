<?php
/*Aplicación No 18 (Par e impar)
Crear una función llamada EsPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función EsImpar.*/

$numero = 44;

echo "Numero elegido: ",$numero,"<br>" ;

if(esPar($numero))
{
    echo "El numero es par.";
}
else if(esImpar($numero)) //Esto es un asquito pero esta hecho a proposito para testear.
{
    echo "El numero es impar.";
}
else
{
    echo "El numero no cumple con las propiedades de la paridad.";
}

//Verifica que un numero sea valido y finito.
function isValidNumber($num)
{
    return is_numeric($num) && is_finite($num);
}

//informa de la existencia de decimales.
function hasDecimals($num)
{
    return isValidNumber($num) && floor($num) != $num;
}
function esPar($num)
{
    return isValidNumber($num) && !hasDecimals($num) && $num % 2 == 0;
}
function esImpar($num)
{
    return isValidNumber($num) && !hasDecimals($num) && !esPar($num);
}
?>