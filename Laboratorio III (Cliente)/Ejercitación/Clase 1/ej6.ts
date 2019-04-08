/*6. Realizar una función que reciba como parámetro un número y que retorne el
cubo del mismo.
Nota : La función retornará el cubo del parámetro ingresado. Realizar una
función que invoque a esta última y permita mostrar por consola el resultado.*/

//main()
function main() : void
{
    let myFunction : Function = () => {console.log(cubo(5))} 
    myFunction();
}

export function cubo(num : number ) : number 
{ 
    return num ** 3; 
}

