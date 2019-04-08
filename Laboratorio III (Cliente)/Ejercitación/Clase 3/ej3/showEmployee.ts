/// <reference path="./Empleado.ts"/>

function showEmployee() : void
{
    let name : string = (<HTMLInputElement>document.getElementById("name")).value;
    let surname : string = (<HTMLInputElement>document.getElementById("surname")).value;
    let genre : string = (<HTMLSelectElement>document.getElementById("genre")).value
    let dni : number = parseInt( (<HTMLInputElement>document.getElementById("dni")).value, 10);
    let file : number = parseInt(( <HTMLInputElement>document.getElementById("file")).value,10);
    let salary : number = parseFloat((<HTMLInputElement>document.getElementById("salary")).value);
    let empleado : Empleados.Empleado = new Empleados.Empleado(name,surname,dni,genre,file,salary);
    console.log(empleado.toString());
}
