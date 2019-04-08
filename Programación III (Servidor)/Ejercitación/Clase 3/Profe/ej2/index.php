<?php
require_once "./Persona.php";
//var_dump($_REQUEST);
$nombre = $_GET["txtNombre"];
$apellido = $_GET["txtApellido"];
$persona = new Persona($nombre,$apellido);
$persona->guardar();
die();
?>