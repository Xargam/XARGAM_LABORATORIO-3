function calculate()
{
    let op1 : number = parseFloat((<HTMLInputElement>document.getElementById("op1")).value);
    let op2 : number = parseFloat((<HTMLInputElement>document.getElementById("op2")).value);
    let operator : string = "";
    let result : string = "";
    document.getElementsByName("operator").forEach( (htmlElement)=>
    {
        if( (<HTMLInputElement>htmlElement).checked)
        {
            operator = (<HTMLInputElement>htmlElement).value;
            return 0;
        }
    })
    switch(operator)
    {
        case "+":
        result = (op1 + op2).toString();
        break;
        case "-":
        result = (op1 - op2).toString();
        break;
        case "*":
        result = (op1 * op2).toString();
        break;
        case "/":
        result = (op2 == 0)? "ERROR" : (op1 / op2).toString();
        break;
    }
    (<HTMLInputElement>document.getElementById("result")).value = result;
}