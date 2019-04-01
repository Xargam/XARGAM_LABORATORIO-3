/*5. Guardar su nombre y apellido en dos variables distintas. Dichas variables
serán pasadas como parámetro de la función MostrarNombreApellido , que
mostrará el apellido en mayúscula y el nombre solo con la primera letra en
mayúsculas y el resto en minúsculas. El apellido y el nombre se mostrarán
separados por una coma (,).
Nota : Utilizar console.log()*/

let nombre : string = "lEONArdo";
let apellido : string = "manassali";
MostrarNombreApellido(nombre,apellido);



function MostrarNombreApellido(nombre : string , apellido : string)  : void
{
    nombre = nombre[0].toUpperCase() + nombre.substr(1).toLowerCase(); //Elevo a mayúsculas el primer caracter y el resto lo reduzco a minusculas.
    console.log(`${apellido.toUpperCase()}, ${nombre}`);
}




