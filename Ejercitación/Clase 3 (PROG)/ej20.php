<?php
include_path="./ej20.lib/Rectangulo.php";
namespace ej20 {
    
    class ej20
    {
        public static function Main()
        {
            $rec1 = new Rectangulo(new Punto(10, 5), new Punto(15, 7));
            $data = sprintf("Rectangulo:<br>");
            $data .= sprintf("Lado 1: %s Lado 2: %s <br>",$rec1->ladoUno , $rec1->ladoDos);
            echo $data;
             
        }
    }
}
 