<?php
$operador = "-";
$op1 = 55;
$op2 = 2;

switch($operador)
{
    case "+":
    echo $op1 + $op2;
    break;

    case "-":
    echo $op1 - $op2;
    break;

    case "*":
    echo $op1 * $op2;
    break;

    case "/":
    if($op2 == 0)
    {
        echo "Error, división por 0.";
    }
    else    
    {
        echo $op1 / $op2;
    }
    break;

    default:
    echo "El operador es erróneo.";
    break;
}
?>