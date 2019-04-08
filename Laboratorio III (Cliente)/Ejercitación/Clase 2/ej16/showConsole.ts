function showConsole() : void
{
    let inputData : NodeListOf<HTMLElement> = document.getElementsByName("txtBox");
    let areaData : HTMLElement | null = document.getElementById("txtCurriculum");

    inputData.forEach( (html : HTMLElement ) =>
    {
        if((<HTMLInputElement>html).value != "")
        {
            console.log((<HTMLInputElement>html).value);
        }
    });
    if((<HTMLTextAreaElement>areaData).value != "")
    {
        console.log((<HTMLTextAreaElement>areaData).value );
    }
}