<?php
$num = 53;
$numLetras = "";

if ($num <= 60 && $num >= 20) {
    //Se realiza la escritura de las decenas.
    if ($num == 60) {
        $numLetras = "sesenta";
    } else if ($num < 60 && $num > 50) {
            $numLetras = "cincuenta y ";
    } else if ($num == 50) {
            $numLetras = "cincuenta";
    } else if ($num < 50 && $num > 40) {
            $numLetras = "cuarenta y ";
    } else if ($num == 40) {
            $numLetras = "cuarenta";
    } else if ($num < 40 && $num > 30) {
            $numLetras = "treinta y ";
    } else if ($num == 30) {
            $numLetras = "treinta";
    } else if ($num < 30 && $num > 20) {
            $numLetras = "veinti";
    } else  {
            $numLetras = "veinte";
    }

    //Se realiza la escritura de las unidades y en caso ! decena = 2 ! se colocan tildes.
    switch(substr($num,1,2))
    {
        case 1:
        $numLetras.="uno";
        break;
        case 2:
        if($num < 30)
        {
            $numLetras.="dós";
        }
        else
        {
            $numLetras.="dos";
        }
        break;
        case 3:
        if($num < 30)
        {
            $numLetras.="trés";
        }
        else
        {
            $numLetras.="tres";
        }
        break;
        case 4:
        $numLetras.="cuatro";
        break;
        case 5:
        $numLetras.="cinco";
        break;
        case 6:
        if($num < 30)
        {
            $numLetras.="séis";
        }
        else
        {
            $numLetras.="seis";
        }
        break;
        case 7:
        $numLetras.="siete";
        break;
        case 8:
        $numLetras.="ocho";
        break;
        case 9:
        $numLetras.="nueve";
        break;
    }
    echo $numLetras;
}
