/*9. Realizar una función que solicite (por medio de un parámetro) un número. Si
el número es positivo, se mostrará el factorial de ese número, caso contrario
se mostrará el cubo de dicho número.
Nota : Reutilizar la función que determina el factorial de un número y la que
calcula el cubo de un número.*/

factorialOCuboEsaEsLaCuestion(-5);
function factorialOCuboEsaEsLaCuestion(number : number) : void
{
    if(number < 0)
    {
        console.log(cubo2(number));
    }
    else
    {
        console.log(factorial2(number));
    }
}
function factorial2(n : number ) : number 
{
    let resultado : number = 1;
    n = Math.floor(n);
    for(let factor = 1 ; factor <=  n; factor++  )
    {
        resultado*=factor;
    }
    return resultado;
}
function cubo2(num : number ) : number 
{ 
    return num ** 3; 
}





