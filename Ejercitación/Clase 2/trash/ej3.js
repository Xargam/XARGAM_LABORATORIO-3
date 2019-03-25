"use strict";
/*3. Realizar una función que reciba un parámetro requerido de tipo numérico y
otro opcional de tipo cadena. Si el segundo parámetro es recibido, se mostrará
tantas veces por consola, como lo indique el primer parámetro. En caso de no
recibir el segundo parámetro, se mostrará el valor inverso del primer
parámetro.*/
var funcion = function (num, cad) {
    if (cad != null) {
        for (var index = 0; index < num; index++) {
            console.log(cad);
        }
    }
    else {
        console.log("1/" + num + " = ", (Math.pow(num, -1)).toFixed(2));
    }
};
funcion(5, "Trivago");
//# sourceMappingURL=../maps/ej3.js.map