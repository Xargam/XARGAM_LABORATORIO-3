"use strict";
/*9. Realizar una función que solicite (por medio de un parámetro) un número. Si
el número es positivo, se mostrará el factorial de ese número, caso contrario
se mostrará el cubo de dicho número.
Nota : Reutilizar la función que determina el factorial de un número y la que
calcula el cubo de un número.*/
Object.defineProperty(exports, "__esModule", { value: true });
var ej6_1 = require("./ej6");
var ej8_1 = require("./ej8");
factorialOCuboEsaEsLaCuestion(3);
function factorialOCuboEsaEsLaCuestion(number) {
    if (number < 0) {
        console.log(ej6_1.cubo(number));
    }
    else {
        console.log(ej8_1.factorial(number));
    }
}
//# sourceMappingURL=ej9.js.map