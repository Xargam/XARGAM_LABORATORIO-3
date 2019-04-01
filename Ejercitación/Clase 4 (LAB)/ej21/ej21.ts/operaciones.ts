/*21- Se necesita hacer una página que contenga dos cuadros de texto (dónde se ingresarán
números), un botón (con la leyenda ‘Calcular’) y cuatro controles de tipo ‘radioButton’ (suma,
resta, multiplicación y división). Cuando se pulsa el botón una función deberá mostrar el
resultado (en la consola y en otro cuadro de texto), de acuerdo al tipo de operación que el
usuario eligió. Utilizar la estructura ‘switch’*/
function calcular()
{
    let numero1 = (<HTMLInputElement>document.getElementById("num1")).value;
    console.log(numero1);
    (<HTMLInputElement>document.getElementById("resultado")).value = numero1;
}