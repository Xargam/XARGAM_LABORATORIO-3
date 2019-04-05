"use strict";
function calculate() {
    var op1 = parseFloat(document.getElementById("op1").value);
    var op2 = parseFloat(document.getElementById("op2").value);
    var operator = "";
    var result = "";
    document.getElementsByName("operator").forEach(function (htmlElement) {
        if (htmlElement.checked) {
            operator = htmlElement.value;
            return 0;
        }
    });
    switch (operator) {
        case "+":
            result = (op1 + op2).toString();
            break;
        case "-":
            result = (op1 - op2).toString();
            break;
        case "*":
            result = (op1 * op2).toString();
            break;
        case "/":
            result = (op2 == 0) ? "ERROR" : (op1 / op2).toString();
            break;
    }
    document.getElementById("result").value = result;
}
