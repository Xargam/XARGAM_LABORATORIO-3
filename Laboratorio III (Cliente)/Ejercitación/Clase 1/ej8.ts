
/*8. Crear una función que realice el cálculo factorial del número que recibe como
parámetro.
Nota : Utilizar console.log()*/

//main();
function main()
{
    console.log(factorial(10))
}

export function factorial(n : number ) : number 
{
    let resultado : number = (n >= 0 && Math.floor(n) == n )? 1 : -1 ;
    for(let factor = 1 ; factor <=  n; factor++  )
    {
        resultado*=factor;
    }
    return resultado;
}