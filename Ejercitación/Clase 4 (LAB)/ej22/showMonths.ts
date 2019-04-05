function showMonths()
{
    let result : string = "¡No ha seleccionado ninguna casilla!";
    let meses : string[] = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre",
    "Octubre" , "Noviembre", "Diciembre"];
    let name : HTMLInputElement = <HTMLInputElement>document.getElementById("name");
    let num : HTMLInputElement = <HTMLInputElement>document.getElementById("num");

    if( name.checked || num.checked )
    {
        result = "<table border='1'><caption>Meses del año</caption><thead>";
        result += (name.checked)? "<th>Nombre</th>" : "" ;
        result += (num.checked)? "<th>Numero</th>" : "" ;
        result += "</thead><tbody>";
        for (let index = 0; index < meses.length; index++) {
            result += "<tr>";
            result += (name.checked)? "<td>" + meses[index] + "</td>": "";
            result += (num.checked)? "<td>" + (index + 1) + "</td>" : "";
            result += "</tr>";
        }
        result += "</tbody></table>";
    }
    (<HTMLDivElement>document.getElementById("result")).innerHTML = result;
}