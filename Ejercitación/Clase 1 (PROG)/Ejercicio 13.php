<?php
/*Aplicación No 13 (Arrays asociativos II)
Cargar los tres arrays con los siguientes valores y luego ‘juntarlos’ en uno. Luego mostrarlo por
pantalla.
“Perro”, “Gato”, “Ratón”, “Araña”, “Mosca”
“1986”, “1996”, “2015”, “78”, “86”
“php”, “mysql”, “html5”, “typescript”, “ajax”
Para cargar los arrays utilizar la función array_push . Para juntarlos, utilizar la función
array_merge .*/
$matriz1 = array();
$matriz2 = array();
$matriz3 = array();
$matrizUnion = array();

array_push($matriz1,"Perro", "Gato", "Ratón", "Araña", "Mosca");
array_push($matriz2,"1986", "1996", "2015", "78", "86");
array_push($matriz3,"php", "mysql", "html5", "typescript", "ajax");
$matrizUnion = array_merge($matriz1,$matriz2,$matriz3);

echo "Matriz 1 :<br>";
foreach($matriz1 as $item)
{
    echo $item." -- ";
}

echo "<br>Matriz 2 :<br>";
foreach($matriz2 as $item)
{
    echo $item." -- ";
}

echo "<br>Matriz 3 :<br>";
foreach($matriz3 as $item)
{
    echo $item." -- ";
}

echo "<br>Matriz final :<br>";
foreach($matrizUnion as $item)
{
    echo $item." -- ";
    
}
?>