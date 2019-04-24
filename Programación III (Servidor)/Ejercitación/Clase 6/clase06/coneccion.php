<?php

# ----------- CONECCION ------------ FUNCIONA

/* $obj = new stdClass();
$obj->Exito = TRUE;
$obj->Mensaje = "";
$obj->Html = "";

try {
    $usuario = 'root';
    $clave = '';

    $objetoPDO = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', $usuario, $clave);

    $obj->Html = "objetoPDO = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', 'root', '')";

    $obj->Mensaje = "Exito, se conecto !";

} catch (PDOException $e) {
    $obj->Exito = FALSE;
    $obj->Mensaje = "Error";
}

echo json_encode($obj); */ 

# --------------------------------------------------

# --------------- SELECT -----------------

$obj = new stdClass();
$obj->Exito = TRUE;
$obj->Mensaje = "";
$obj->Html = "";

try {
    $usuario = 'root';
    $clave = '';

    $objetoPDO = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', $usuario, $clave);

    $obj->Html = "objetoPDO = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', 'root', '')";

    $obj->Mensaje = "Exito, se conecto !";

    $sql = $objetoPDO->query("SELECT *  FROM cds");

    $arrayDatos = $sql->fetchAll();

    foreach ($arrayDatos as $fila) {
        echo $fila[0] . "------<br>";
        echo $fila[1] . "------<br>";
        echo $fila[2] . "------<br>";
        echo $fila[3] . "------<br>";

        //O tambien

        /* echo $fila['titel'] . "------<br>";
        echo $fila['interpret'] . "------<br>";
        echo $fila['jahr'] . "------<br>";
        echo $fila['id'] . "------<br>"; */

        # fetch
    }

} catch (PDOException $e) {
    $obj->Exito = FALSE;
    $obj->Mensaje = "Error";
}

echo json_encode($obj);

#  ****** MODIFICAR EL EJERCICIO DE LA CLASE 05 PARA USAR EL PDO
# USAR METODOS MOSTRAr() para traer uno o todos.

?>