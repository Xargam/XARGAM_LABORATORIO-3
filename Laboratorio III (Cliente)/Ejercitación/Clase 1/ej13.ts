/*13. Un número de Smith es un número entero tal que la suma de sus dígitos
es igual a la suma de los dígitos de los números restantes tras la factorización
en primos (la factorización debe estar escrita sin exponentes, repitiendo los
números todas las veces necesarias). Por ejemplo, 378 = 2 × 3 × 3 × 3 × 7 es
un número de Smith en base 10, porque 3 + 7 + 8 = 2 + 3 + 3 + 3 + 7. Por
definición, se deben contar los dígitos de los factores. Por ejemplo, 22 en base
10 es 2 × 11, y se deben contar los tres dígitos: 2, 1, 1. Por lo tanto 22 es un
número de Smith porque 2 + 2 = 2 + 1 + 1
Nota : Utilice tres funciones, una realiza la comparación, otra descompone el
numero en sus factores primos y suma los coeficientes, y la última función
suma cada termino*/

let array : number[] = new Array<number>(1086,1,-1,22.55,22,378,2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89 , 97,);
array.forEach( (value) => {console.log(esNumeroSmith(value),"Num: ", value)});

function esNumeroSmith(num : number) : boolean
{
    let smithNum : boolean = false;
    if(!esPrimo(num) && num > 0 && num.toString().indexOf(".") == -1 && sumarDigitosFactoresPrimos(num) == sumarDigitosNumero(num) )
    {
        smithNum = true;
    }
    return smithNum;
}
function sumarDigitosNumero(num : number) : number
{
    let suma : number = 0;
    num.toString().split("").forEach( (value) => { suma += parseInt(value,10)  } );
    return suma;
}
function sumarDigitosFactoresPrimos(num: number): number 
{
  let suma : number = 0;
  for (let divisor = 2; num > 1; divisor++) 
  {
    if (num % divisor == 0) 
    {
      num /= divisor;
      divisor.toString().split("").forEach( (value) => { suma += parseInt(value,10); } );
      divisor = 1;
    }
  }
  return suma;
}
function esPrimo(num : number) : boolean 
{
    let primo : boolean = (num > 1)? true : false;
    for(let divisor = 2 ;  divisor < num ; divisor++  )
    {
        if(num % divisor == 0)
        {
            primo = false;
            break;
        }
    }
    return primo;
}
