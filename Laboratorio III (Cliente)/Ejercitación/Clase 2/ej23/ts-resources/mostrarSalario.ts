/*<!--23-Crear una página que posea un formulario que permita el ingreso del nombre, apellido,
email y cantidad de horas trabajadas a la semana de un operario. Al pulsar el botón
btnCalcular , se invocará a una función que calcule y muestre en un cuadro de texto (INPUT
type=text) el salario mensual del operario. El salario se calculará por medio de la cantidad de
horas trabajadas al mes por un coeficiente. Dicho coeficiente lo retornará la función
ObtenerCoeficiente (por el momento será siempre 6.88).-->*/

/// <reference path="./obtenerCoeficiente.ts"/>
function mostrarSalario() : void
{
    let nombreApellido : string = (<HTMLInputElement>document.getElementById("txtNombre")).value + " " + 
    (<HTMLInputElement>document.getElementById("txtApellido")).value;

    let email : string = (<HTMLInputElement>document.getElementById("txtEmail")).value;

    let salarioMensual : number = parseFloat((<HTMLInputElement>document.getElementById("txtHoras")).value) * 4 
    * valorHora.obtenerCoeficiente();

    let datos : string = `<b>El salario del empleado ${nombreApellido} (${email}) es:</b><br><input type='text' 
    value='$ ${salarioMensual}' id='salario' disabled>`;
    
    //Si no se creo el cuadro de texto lo creo junto a los datos.
    if(document.getElementById("salario") === null)
    {
        (<HTMLFormElement>document.getElementById("form1")).innerHTML += "<br><div id='salario'>" 
        + datos + "</div>";
    }
    //En caso de que se haya creado cargo directo el salario en el.
    else
    {
        (<HTMLDivElement>document.getElementById("salario")).innerHTML = datos; 
    }
}