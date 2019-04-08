"use strict";
/*8. Crear una función que realice el cálculo factorial del número que recibe como
parámetro.
Nota : Utilizar console.log()*/
Object.defineProperty(exports, "__esModule", { value: true });
//main();
function main() {
    console.log(factorial(10));
}
function factorial(n) {
    var resultado = (n >= 0 && Math.floor(n) == n) ? 1 : -1;
    for (var factor = 1; factor <= n; factor++) {
        resultado *= factor;
    }
    return resultado;
}
exports.factorial = factorial;
//# sourceMappingURL=ej8.js.map