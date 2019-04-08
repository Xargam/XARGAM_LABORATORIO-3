<?php
require "./Auto.php";

$auto1 = new Auto("Ford","Azul",100);
$auto2 = new Auto("Ford","Rojo",100);

$auto3 = new Auto("Fiat","Negro",45000);
$auto4 = new Auto("Fiat","Negro",55000);

$auto5 = new Auto("Chevrolet","Violeta",51111,"3/2/2017");

$auto3->agregarImpuestos(1500);
$auto4->agregarImpuestos(1500);
$auto5->agregarImpuestos(1500);

echo "Suma de los precios: ".Auto::add($auto1,$auto2)."<br>";

if( $auto1->equals($auto1,$auto2) )
{
    echo "El primer auto es igual al segundo.<br>";
}
else
{
    echo "El primer auto es distinto del segundo.<br>";
}
if( $auto1->equals($auto1,$auto5))
{
    echo "El primer auto es igual al quinto<br>";
}
else
{
    echo "El primer auto es distinto del quinto<br>";
}

echo "Auto 1:".Auto::mostrarAuto($auto1)."<br>";
echo "Auto 3:".Auto::mostrarAuto($auto3)."<br>";
echo "Auto 1:".Auto::mostrarAuto($auto5)."<br>";

?>