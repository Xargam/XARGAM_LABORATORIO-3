"use strict";
/*2. Cree una aplicación que muestre, a través de un Array , los nombres de los
meses de un año y el número al que ese mes corresponde. Utilizar una
estructura repetitiva para escribir en la consola ( console.log() )*/
var meses = [
    "Enero", "Febrero", "Marzo", "Abril",
    "Mayo", "Junio", "Julio", "Agosto",
    "Septiembre", "Octubre", "Noviembre", "Diciembre"
];
meses.forEach(function (mes, numero) {
    console.log("Mes: " + mes + ", numero: " + (numero + 1));
});
//# sourceMappingURL=../maps/ej2.js.map