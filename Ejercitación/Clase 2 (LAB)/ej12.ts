/*12. Crear una función que reciba como único parámetro una cadena que
contenga el día, mes y año de nacimiento de una persona (con formato dd-
mm-yyyy). La función mostrará por consola a que signo corresponde dicha
fecha de nacimiento.
Nota : Para descomponer la fecha recibida como parámetro utilice la función
split*/
/*
    signo aries ARIES: 21 de marzo – 20 de abril.
    signo tauro TAURO: 21 de abril – 21 de mayo.
    signo geminis GÉMINIS: 22 de mayo – 21 de junio.
    signo cancer CÁNCER: 22 de junio – 23 de julio.
    signo leo LEO: 24 de julio – 23 de agosto.
    signo virgo VIRGO: 24 de agosto – 23 de septiembre.
    signo libra LIBRA: 24 de septiembre – 23 de octubre.
    signo escorpio ESCORPIO: 24 de octubre – 22 de noviembre.
    signo sagitario SAGITARIO: 23 de noviembre – 21 de diciembre
    signo capricornio CAPRICORNIO: 22 de diciembre – 20 de enero.
    signo acuario ACUARIO: 21 de enero – 19 de febrero.
    signo piscis PISCIS: 20 de febrero – 20 de marzo.

*/
zodiaco("01-01-1960");

function zodiaco(fechaNacimiento : string ) : void
{
    let fechas : string[] = fechaNacimiento.split("-");
    switch(fechas[1])
    {
        case "01":
        if(fechas[0] <= "20" )
        {
            console.log("Capricornio");
        }
        else
        {
            console.log("Acuario");
        }
        break;
        case "02":
        if(fechas[0] <= "19" )
        {
            console.log("Acuario");
        }
        else
        {
            console.log("Piscis");
        }
        break;
        case "03":
        if(fechas[0] <= "20" )
        {
            console.log("Piscis");
        }
        else
        {
            console.log("Aries");
        }
        break;
        case "04":
        if(fechas[0] <= "20" )
        {
            console.log("Aries");
        }
        else
        {
            console.log("Tauro");
        }
        break;
        case "05":
        if(fechas[0] <= "21" )
        {
            console.log("Tauro");
        }
        else
        {
            console.log("Geminis");
        }
        break;
        case "06":
        if(fechas[0] <= "21" )
        {
            console.log("Geminis");
        }
        else
        {
            console.log("Cancer");
        }
        break;
        case "07":
        if(fechas[0] <= "23" )
        {
            console.log("Cancer");
        }
        else
        {
            console.log("Leo");
        }
        break;
        case "08":
        if(fechas[0] <= "23" )
        {
            console.log("Leo");
        }
        else
        {
            console.log("Virgo");
        }
        break;
        case "09":
        if(fechas[0] <= "23" )
        {
            console.log("Virgo");
        }
        else
        {
            console.log("Libra");
        }
        break;
        case "10":
        if(fechas[0] <= "23" )
        {
            console.log("Libra");
        }
        else
        {
            console.log("Escorpio");
        }
        break;
        case "11":
        if(fechas[0] <= "22" )
        {
            console.log("Escorpio");
        }
        else
        {
            console.log("Sagitario");
        }
        break;
        case "12":
        if(fechas[0] <= "21" )
        {
            console.log("Sagitatio");
        }
        else
        {
            console.log("Capricornio");
        }
        break;
    }
}




