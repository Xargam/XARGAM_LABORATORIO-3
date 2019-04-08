<?php 
include "./Empleado.php";
//var_dump($_FILES);
//var_dump($_POST);

/*$destino = "fotos_empleados/".$_POST["file"]."_".$_POST["surname"].".".pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);
var_dump($destino);*/
$emp1 = new Empleado("ll","ape",456,456456,"a.jpg");
$emp2 = new Empleado("ll","apel",457,45647,"a.jpg");
$emp3 = new Empleado("ll","aple",458,456488,"a.jpg");
echo $emp1->toString();

Empleado::agregar($emp1);
Empleado::agregar($emp2);
Empleado::agregar($emp3);


?>