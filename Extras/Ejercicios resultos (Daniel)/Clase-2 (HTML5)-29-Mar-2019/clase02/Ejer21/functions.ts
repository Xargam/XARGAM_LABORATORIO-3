function Calcular()
{
    var dato1: number =Number((<HTMLInputElement>document.getElementById("num1")).value);
    var dato2: number =Number((<HTMLInputElement>document.getElementById("num2")).value);
    var operador: string = ((<HTMLInputElement>document.getElementById("operador")).value);

    switch (operador) {
        case "+":
            ((<HTMLInputElement>document.getElementById("result")).value= String(dato1+dato2));
            break;
    
        case "-":
            ((<HTMLInputElement>document.getElementById("result")).value= String(dato1-dato2));
            break;

        case "*":
            ((<HTMLInputElement>document.getElementById("result")).value= String(dato1*dato2));
            break;

        case "/":
            if(Validar(dato2) == true)
            {
                ((<HTMLInputElement>document.getElementById("result")).value= String(dato1/dato2));
            }
            else
            {
                ((<HTMLInputElement>document.getElementById("result")).value= "ERROR (division por cero)");
            }
            break;
    }
}

function Validar(numero:number): boolean
{
    if(numero == 0)
    {
        return false;
    }
    return true;
}