/// <reference path="./Validation.ts"/> 

function validarCampos() : void
{
    const OK = "Correcto.";
    const BAD = "Incorrecto.";

    let htmlBlock : string = "<br><table><caption><hr>Resultado de la validacion<hr></caption><tbody><tr>" +
    "<td>Nombre:</td><td>%{NAME}%</td><tr><td>Apellido:</td><td>%{SURNAME}%</td></tr><tr></tr>" + 
    "<tr><td>DNI:</td><td>%{DNI}%</td></tr><tr><td>Sexo:</td><td>%{GENRE}%</td></tr><tr><td colspan='2'><hr></td></tr></tbody></table>";

    let nombre : string = ( <HTMLInputElement>document.getElementById("txtName")).value;
    let apellido : string = ( <HTMLInputElement>document.getElementById("txtSurname")).value;
    let dni : string = (<HTMLInputElement>document.getElementById("txtDni")).value;
    let sexo : string = ( <HTMLInputElement>document.getElementById("txtGenre")).value;

    htmlBlock = (Validation.isEmpty(nombre))? htmlBlock.replace("%{NAME}%",BAD) 
    : htmlBlock.replace("%{NAME}%",OK);

    htmlBlock = (Validation.isEmpty(apellido))? htmlBlock.replace("%{SURNAME}%",BAD) 
    : htmlBlock.replace("%{SURNAME}%",OK);

    htmlBlock = (Validation.isNumeric(dni) && parseFloat(dni) == Math.floor(parseFloat(dni)) && dni > "0")? 
    htmlBlock.replace("%{DNI}%",OK) : htmlBlock.replace("%{DNI}%",BAD);
    htmlBlock = (Validation.isGenre(sexo))? htmlBlock.replace("%{GENRE}%",OK) 
    : htmlBlock.replace("%{GENRE}%",BAD);

    (<HTMLDivElement>document.getElementById("result")).hidden = false;
    (<HTMLDivElement>document.getElementById("result")).innerHTML = htmlBlock;
    
}