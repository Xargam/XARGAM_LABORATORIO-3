"use strict";
/*8. Crear una función que realice el cálculo factorial del número que recibe como
parámetro.
Nota : Utilizar console.log()*/
console.log(factorial(-1));
function factorial(n) {
    var resultado = 1;
    n = Math.floor(n);
    for (var factor = 1; factor <= n; factor++) {
        resultado *= factor;
    }
    return resultado;
}
//# sourceMappingURL=ej8.js.map