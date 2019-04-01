"use strict";
/*9. Realizar una función que solicite (por medio de un parámetro) un número. Si
el número es positivo, se mostrará el factorial de ese número, caso contrario
se mostrará el cubo de dicho número.
Nota : Reutilizar la función que determina el factorial de un número y la que
calcula el cubo de un número.*/
factorialOCuboEsaEsLaCuestion(-5);
function factorialOCuboEsaEsLaCuestion(number) {
    if (number < 0) {
        console.log(cubo2(number));
    }
    else {
        console.log(factorial2(number));
    }
}
function factorial2(n) {
    var resultado = 1;
    n = Math.floor(n);
    for (var factor = 1; factor <= n; factor++) {
        resultado *= factor;
    }
    return resultado;
}
function cubo2(num) {
    return Math.pow(num, 3);
}
//# sourceMappingURL=ej9.js.map