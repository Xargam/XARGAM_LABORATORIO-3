/*10. Definir una función que muestre información sobre una cadena de texto
que se le pasa como argumento. A partir de la cadena que se le pasa, la
función determina si esa cadena está formada sólo por mayúsculas, sólo por
minúsculas o por una mezcla de ambas.*/

enum stringCaseResult
{
    uprStr = "cadena en mayusculas",
    mixStr = "cadena con mezclas de minusculas y mayusculas",
    lwrStr = "cadena en minusculas"
}
function stringCase(cadena : string) : stringCaseResult
{
    let resultado : stringCaseResult = stringCaseResult.mixStr;
    if(cadena == cadena.toLocaleUpperCase())
    {
        resultado = stringCaseResult.uprStr;
    }
    else if(cadena == cadena.toLocaleLowerCase())
    {
        resultado = stringCaseResult.lwrStr;
    }
    return resultado;
}

console.log( stringCase("HOLA12Aa") );






