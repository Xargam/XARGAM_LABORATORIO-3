"use strict";
/*7. Se necesita mostrar por consola los primeros 20 números primos. Para ello
realizar una función .
Nota : Utilizar console.log()*/
primos20();
function primos20() {
    var esPrimo; //Variable para reconocer si un numero encontrado es primo.
    var contadorPrimos = 0;
    for (var posiblePrimo = 2; contadorPrimos < 20; posiblePrimo++) {
        esPrimo = true;
        for (var divisor = 2; divisor < posiblePrimo; divisor++) {
            if (posiblePrimo % divisor == 0) {
                esPrimo = false;
                break;
            }
        }
        if (esPrimo) {
            console.log(posiblePrimo + "\n");
            contadorPrimos++;
        }
    }
}
//# sourceMappingURL=../maps/ej7.js.map