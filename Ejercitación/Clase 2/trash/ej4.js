"use strict";
/*3. 4. Realizar una función que reciba un número y que muestre (por consola) un
mensaje como el siguiente:
El número 5 es impar, siendo 5 el número recibido como parámetro.*/
var unaFuncion = function (x) {
    if (x.toString().indexOf(".") == -1) //Verifico que el numero sea entero, no debe haber punto.
     {
        console.log("El n\u00FAmero " + x + " es " + ((x % 2 == 0) ? "par" : "impar"), "siendo " + x + " el n\u00FAmero recibido como par\u00E1metro.");
    }
    else {
        console.log("El conjunto -Z (Todos los números excepto el conjunto de enteros y naturales) no cumple con las condiciones de paridad.");
    }
};
unaFuncion(43);
//# sourceMappingURL=../maps/ej4.js.map