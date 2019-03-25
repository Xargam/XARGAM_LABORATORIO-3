/*7. Se necesita mostrar por consola los primeros 20 números primos. Para ello
realizar una función .
Nota : Utilizar console.log()*/
primos20();
function primos20(): void
{
    let esPrimo : boolean; //Variable para reconocer si un numero encontrado es primo.
    let contadorPrimos : number = 0; 

    for(let posiblePrimo = 2 ; contadorPrimos < 20;posiblePrimo++ )
    {
        esPrimo = true;
        for (let divisor = 2 ; divisor < posiblePrimo ; divisor++) 
        {
            if(posiblePrimo % divisor == 0)
            { 
                esPrimo = false;
                break;
            }
        }
        if(esPrimo)
        {
            console.log(posiblePrimo + "\n");
            contadorPrimos++;
        }
    }
}