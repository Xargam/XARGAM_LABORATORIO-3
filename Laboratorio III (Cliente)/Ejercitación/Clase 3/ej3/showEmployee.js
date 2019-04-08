"use strict";
/// <reference path="./Empleado.ts"/>
function showEmployee() {
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var genre = document.getElementById("genre").value;
    var dni = parseInt(document.getElementById("dni").value, 10);
    var file = parseInt(document.getElementById("file").value, 10);
    var salary = parseFloat(document.getElementById("salary").value);
    var empleado = new Empleados.Empleado(name, surname, dni, genre, file, salary);
    console.log(empleado.toString());
}
//# sourceMappingURL=showEmployee.js.map