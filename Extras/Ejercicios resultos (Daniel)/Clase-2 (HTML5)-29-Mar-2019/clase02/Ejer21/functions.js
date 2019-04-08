"use strict";
function Calcular() {
    var dato1 = Number(document.getElementById("num1").value);
    var dato2 = Number(document.getElementById("num2").value);
    var operador = (document.getElementById("operador").value);
    switch (operador) {
        case "+":
            (document.getElementById("result").value = String(dato1 + dato2));
            break;
        case "-":
            (document.getElementById("result").value = String(dato1 - dato2));
            break;
        case "*":
            (document.getElementById("result").value = String(dato1 * dato2));
            break;
        case "/":
            if (Validar(dato2) == true) {
                (document.getElementById("result").value = String(dato1 / dato2));
            }
            else {
                (document.getElementById("result").value = "ERROR (division por cero)");
            }
            break;
    }
}
function Validar(numero) {
    if (numero == 0) {
        return false;
    }
    return true;
}
