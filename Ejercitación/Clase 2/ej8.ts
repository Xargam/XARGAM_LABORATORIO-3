
/*8. Crear una función que realice el cálculo factorial del número que recibe como
parámetro.
Nota : Utilizar console.log()*/
console.log(factorial(3))

function factorial(n : number ) : number 
{
    let resultado : number = 1;
    n = Math.floor(n);
    for(let factor = 1 ; factor <=  n; factor++  )
    {
        resultado*=factor;
    }
    return resultado;
}