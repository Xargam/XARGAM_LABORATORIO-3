<?php
$num = (string)rand(20,60);
$numLetras = "El numero está fuera de rango.";

if ($num <= "60" && $num >= "20")
{
    switch($num[0])
    {
        case "6":
        $numLetras = "Sesenta";
        break;
        case "5":
        $numLetras = "Cincuenta";
        break;
        case "4":
        $numLetras = "Cuarenta";
        break;
        case "3":
        $numLetras = "Treinta";
        break;
        case "2":
        $numLetras = ($num[1] == "0")?"Veinte" : "Veinti";
        break;
    }
    $numLetras .= ($num[0] > "2" && $num[1] > 0 ) ? " y " : ""; 
    if($num[1] != 0)
    {
        switch($num[1])
        {
            case "1":
            $numLetras.="uno";
            break;
            case "2":
            $numLetras .= ($num[0] == "2")? "dós" : "dos";
            break;
            case "3":
            $numLetras .= ($num[0] == "2")? "trés" : "tres";
            break;
            case "4":
            $numLetras.="cuatro";
            break;
            case "5":
            $numLetras.="cinco";
            break;
            case "6":
            $numLetras .= ($num[0] == "2")? "séis" : "seis";
            break;
            case "7":
            $numLetras.="siete";
            break;
            case "8":
            $numLetras.="ocho";
            break;
            case "9":
            $numLetras.="nueve";
            break;
        }
    }
}
echo $num , "<br/>" , $numLetras;
?>
