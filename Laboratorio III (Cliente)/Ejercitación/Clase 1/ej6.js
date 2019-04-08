"use strict";
/*6. Realizar una función que reciba como parámetro un número y que retorne el
cubo del mismo.
Nota : La función retornará el cubo del parámetro ingresado. Realizar una
función que invoque a esta última y permita mostrar por consola el resultado.*/
Object.defineProperty(exports, "__esModule", { value: true });
//main()
function main() {
    var myFunction = function () { console.log(cubo(5)); };
    myFunction();
}
function cubo(num) {
    return Math.pow(num, 3);
}
exports.cubo = cubo;
//# sourceMappingURL=ej6.js.map