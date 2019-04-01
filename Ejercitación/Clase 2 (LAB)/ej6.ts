/*6. Realizar una función que reciba como parámetro un número y que retorne el
cubo del mismo.
Nota : La función retornará el cubo del parámetro ingresado. Realizar una
función que invoque a esta última y permita mostrar por consola el resultado.*/

let myFunction : Function = () => {console.log(cubo(10))}
myFunction();

function cubo(num : number ) : number 
{ 
    return num ** 3; 
}

