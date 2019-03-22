<?php
$num = (string)rand(20,60);
echo "el numero es el:  ";
if($num[0] == "2")
{
    echo "Veinte ";
}
else if($num[0] == "3")
{
    echo "Treinta ";
}
else if($num[0] == "4")
{
    echo "Cuarenta ";
}
else if($num[0] == "5")
{
    echo "Cincuenta ";
}
else if($num[0] == "6")
{
    echo "Sesenta ";
}

switch ($num[1]) {
      
    case '1':
    echo "y Uno";
    break;

    case '2':
    echo "y Dos";
    break;

    case '3':
    echo "y Tres";
    break;

    case '4':
    echo "y Cuatro";
    break;

    case '5':
    echo "y Cinco";
    break;

    case '6':
    echo "y Seis";
    break;

    case '7':
    echo "y Siete";
    break;

    case '8':
    echo "y Ocho";
    break; 
    
    case '9':
    echo "y Nueve";
    break;
}
echo "  " . $num;
?>
