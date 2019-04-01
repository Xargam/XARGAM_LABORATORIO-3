"use strict";
/*11. Definir una función que determine si la cadena de texto que se le pasa
como parámetro es un palíndromo, es decir, si se lee de la misma forma desde
la izquierda y desde la derecha. Ejemplo de palíndromo complejo: "La ruta nos
aporto otro paso natural".*/
console.log(isPalindrome("La ruta nos aportó otro paso naturale"));
function isPalindrome(cadena) {
    var cadena2;
    cadena2 = cadena = cadena.toLocaleLowerCase().replace(/[^a-z0-9]/g, "");
    cadena2 = cadena2.split("").reverse().join("");
    return cadena == cadena2;
}
//# sourceMappingURL=ej11.js.map