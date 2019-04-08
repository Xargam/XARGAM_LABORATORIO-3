"use strict";
function showMonths() {
    var result = "¡No ha seleccionado ninguna casilla!";
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
        "Octubre", "Noviembre", "Diciembre"];
    var name = document.getElementById("name");
    var num = document.getElementById("num");
    if (name.checked || num.checked) {
        result = "<table border='1'><caption>Meses del año</caption><thead>";
        result += (name.checked) ? "<th>Nombre</th>" : "";
        result += (num.checked) ? "<th>Numero</th>" : "";
        result += "</thead><tbody>";
        for (var index = 0; index < meses.length; index++) {
            result += "<tr>";
            result += (name.checked) ? "<td>" + meses[index] + "</td>" : "";
            result += (num.checked) ? "<td>" + (index + 1) + "</td>" : "";
            result += "</tr>";
        }
        result += "</tbody></table>";
    }
    document.getElementById("result").innerHTML = result;
}
