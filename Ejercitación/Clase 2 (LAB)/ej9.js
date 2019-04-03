"use strict";
/*9. Realizar una función que solicite (por medio de un parámetro) un número. Si
el número es positivo, se mostrará el factorial de ese número, caso contrario
se mostrará el cubo de dicho número.
Nota : Reutilizar la función que determina el factorial de un número y la que
calcula el cubo de un número.*/
/// <reference path="./ej8.ts"/>
/// <reference path="./ej6.ts"/>
factorialOCuboEsaEsLaCuestion(0);
function factorialOCuboEsaEsLaCuestion(number) {
    if (number < 0) {
        console.log(cubo(number));
    }
    else {
        console.log(factorial(number));
    }
}
//# sourceMappingURL=ej9.js.map