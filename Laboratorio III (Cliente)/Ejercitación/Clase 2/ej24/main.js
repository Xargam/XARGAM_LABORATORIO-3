var Validation;
(function (Validation) {
    function isGenre(cad) {
        cad = cad.toLowerCase();
        return cad == 'm' || cad == 'f';
    }
    Validation.isGenre = isGenre;
    function isEmpty(cad) {
        return cad == "";
    }
    Validation.isEmpty = isEmpty;
    function isNumeric(cad) {
        var numeric = cad.length > 0 && cad != "-." && cad != "." && cad != "-" && cad != ".-";
        var dot = false;
        //Elimino el signo menos del numero en caso de que lo haya para facilitar el analisis del numero.
        if (numeric) {
            cad = (cad[0] == "-") ? cad.slice(1) : cad;
            for (var index = 0; index < cad.length; index++) {
                if (cad.charCodeAt(index) < 0x30 || cad.charCodeAt(index) > 0x39) {
                    if (cad[index] == "." && !dot) {
                        dot = true;
                        continue;
                    }
                    numeric = false;
                    break;
                }
            }
        }
        return numeric;
    }
    Validation.isNumeric = isNumeric;
})(Validation || (Validation = {}));
/// <reference path="./Validation.ts"/> 
function validarCampos() {
    var OK = "Correcto.";
    var BAD = "Incorrecto.";
    var htmlBlock = "<br><table><caption><hr>Resultado de la validacion<hr></caption><tbody><tr>" +
        "<td>Nombre:</td><td>%{NAME}%</td><tr><td>Apellido:</td><td>%{SURNAME}%</td></tr><tr></tr>" +
        "<tr><td>DNI:</td><td>%{DNI}%</td></tr><tr><td>Sexo:</td><td>%{GENRE}%</td></tr><tr><td colspan='2'><hr></td></tr></tbody></table>";
    var nombre = document.getElementById("txtName").value;
    var apellido = document.getElementById("txtSurname").value;
    var dni = document.getElementById("txtDni").value;
    var sexo = document.getElementById("txtGenre").value;
    htmlBlock = (Validation.isEmpty(nombre)) ? htmlBlock.replace("%{NAME}%", BAD)
        : htmlBlock.replace("%{NAME}%", OK);
    htmlBlock = (Validation.isEmpty(apellido)) ? htmlBlock.replace("%{SURNAME}%", BAD)
        : htmlBlock.replace("%{SURNAME}%", OK);
    htmlBlock = (Validation.isNumeric(dni) && parseFloat(dni) == Math.floor(parseFloat(dni)) && dni > "0") ?
        htmlBlock.replace("%{DNI}%", OK) : htmlBlock.replace("%{DNI}%", BAD);
    htmlBlock = (Validation.isGenre(sexo)) ? htmlBlock.replace("%{GENRE}%", OK)
        : htmlBlock.replace("%{GENRE}%", BAD);
    document.getElementById("result").hidden = false;
    document.getElementById("result").innerHTML = htmlBlock;
}
