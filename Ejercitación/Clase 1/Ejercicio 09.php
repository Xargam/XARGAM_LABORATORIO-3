<?php
/*Aplicación Nº 9 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/

$accumulator = 0;
$promedio = 0;
$message = "El promedio es menor que 6.";
$vec = Array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10));

for($i = 0 ; $i < 5 ; $i++)
{
    $accumulator += $vec[$i];
}
$promedio = $accumulator / 5;

if($promedio > 6)
{
    $message = "El promedio es mayor que 6";
}
else if($promedio == 6)
{
    $message = "El promedio es igual 6";
}
echo $promedio.".".$message;
?>