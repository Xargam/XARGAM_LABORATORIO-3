<?php
$operador = "+-*/"; 
$op1 = rand(0,5000);
$op2 = rand(0,5000);

switch($operador[rand(0,3)])
{
    case "+":
    echo $op1 , " + " ,  $op2 , " = " , $op1 + $op2;
    break;

    case "-":
    echo $op1 , " - " ,  $op2 , " = " , $op1 - $op2;
    break;

    case "*":
    echo $op1 , " * " ,  $op2 , " = " , $op1 * $op2;
    break;

    case "/":
    if($op2 == 0)
    {
        echo "Error, división por 0.";
    }
    else    
    {
        echo $op1 , " / " ,  $op2 , " = " , $op1 / $op2;
    }
    break;

    default:
    echo "El operador es erróneo.";
    break;
}
?>