"use strict";
/*10. Definir una función que muestre información sobre una cadena de texto
que se le pasa como argumento. A partir de la cadena que se le pasa, la
función determina si esa cadena está formada sólo por mayúsculas, sólo por
minúsculas o por una mezcla de ambas.*/
var stringCaseResult;
(function (stringCaseResult) {
    stringCaseResult["uprStr"] = "cadena en mayusculas";
    stringCaseResult["mixStr"] = "cadena con mezclas de minusculas y mayusculas";
    stringCaseResult["lwrStr"] = "cadena en minusculas";
})(stringCaseResult || (stringCaseResult = {}));
function stringCase(cadena) {
    var resultado = stringCaseResult.mixStr;
    if (cadena == cadena.toLocaleUpperCase()) {
        resultado = stringCaseResult.uprStr;
    }
    else if (cadena == cadena.toLocaleLowerCase()) {
        resultado = stringCaseResult.lwrStr;
    }
    return resultado;
}
console.log(stringCase("HOLA12Aa"));
//# sourceMappingURL=ej10.js.map