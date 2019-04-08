"use strict";
/*5. Guardar su nombre y apellido en dos variables distintas. Dichas variables
serán pasadas como parámetro de la función MostrarNombreApellido , que
mostrará el apellido en mayúscula y el nombre solo con la primera letra en
mayúsculas y el resto en minúsculas. El apellido y el nombre se mostrarán
separados por una coma (,).
Nota : Utilizar console.log()*/
var nombre = "lEONArdo";
var apellido = "manassali";
MostrarNombreApellido(nombre, apellido);
function MostrarNombreApellido(nombre, apellido) {
    nombre = nombre[0].toUpperCase() + nombre.substr(1).toLowerCase(); //Elevo a mayúsculas el primer caracter y el resto lo reduzco a minusculas.
    console.log(apellido.toUpperCase() + ", " + nombre);
}
//# sourceMappingURL=ej5.js.map