var valorHora;
(function (valorHora) {
    function obtenerCoeficiente() {
        return 6.88;
    }
    valorHora.obtenerCoeficiente = obtenerCoeficiente;
})(valorHora || (valorHora = {}));
/*<!--23-Crear una página que posea un formulario que permita el ingreso del nombre, apellido,
email y cantidad de horas trabajadas a la semana de un operario. Al pulsar el botón
btnCalcular , se invocará a una función que calcule y muestre en un cuadro de texto (INPUT
type=text) el salario mensual del operario. El salario se calculará por medio de la cantidad de
horas trabajadas al mes por un coeficiente. Dicho coeficiente lo retornará la función
ObtenerCoeficiente (por el momento será siempre 6.88).-->*/
/// <reference path="./obtenerCoeficiente.ts"/>
function mostrarSalario() {
    var nombreApellido = document.getElementById("txtNombre").value + " " +
        document.getElementById("txtApellido").value;
    var email = document.getElementById("txtEmail").value;
    var salarioMensual = parseFloat(document.getElementById("txtHoras").value) * 4
        * valorHora.obtenerCoeficiente();
    var datos = "<b>El salario del empleado " + nombreApellido + " (" + email + ") es:</b><br><input type='text' \n    value='$ " + salarioMensual + "' id='salario' disabled>";
    //Si no se creo el cuadro de texto lo creo junto a los datos.
    if (document.getElementById("salario") === null) {
        document.getElementById("form1").innerHTML += "<br><div id='salario'>"
            + datos + "</div>";
    }
    //En caso de que se haya creado cargo directo el salario en el.
    else {
        document.getElementById("salario").innerHTML = datos;
    }
}
