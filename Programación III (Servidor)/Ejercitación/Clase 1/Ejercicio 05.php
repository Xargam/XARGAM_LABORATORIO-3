<?php
$message = "No hay valor del medio";
$a = rand(0,3);
$b = rand(0,3);
$c = rand(0,3);

echo "a: " , $a ," b: " ,$b, " c: " , $c , "<br/>Valor medio: ";  

if($b < $a && $a < $c || $b > $a && $a > $c )
{
    $message = "a";
}
else if($a < $b && $b < $c || $a > $b && $b > $c)
{
    $message = "b";
}
else if($a < $c && $c < $b || $a > $c && $c > $b)
{
    $message = "c";
}
echo $message;
?>