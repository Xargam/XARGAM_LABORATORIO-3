<?php
 /*Aplicación No 14 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.*/

$matriz1 = array();
$matriz2 = array();
$matriz3 = array();

array_push($matriz1, "Perro", "Gato", "Ratón", "Araña", "Mosca");
array_push($matriz2, "1986", "1996", "2015", "78", "86");
array_push($matriz3, "php", "mysql", "html5", "typescript", "ajax");

$arrayIndexado = array($matriz1 ,$matriz2 ,$matriz3 );
$arrayAsociativo = array("A" => $matriz1 , "B" => $matriz2 , "C" => $matriz3);

echo "Array indexado:<br>";
foreach($arrayIndexado as $key => $subarray)
{
    echo "Key: ".$key."<br>";
    foreach($subarray as $item)
    {
        echo $item."<br>";
    }
}

echo "Array asociativo:<br>";
foreach($arrayAsociativo as $key => $subarray)
{
    echo "Key: ".$key."<br>";
    foreach($subarray as $item)
    {
        echo $item."<br>";
    }
}
?>