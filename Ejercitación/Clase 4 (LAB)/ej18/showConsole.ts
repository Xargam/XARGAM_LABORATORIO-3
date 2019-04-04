function showConsole() : void
{
    console.log( (<HTMLInputElement>document.getElementById("txtName")).value );
    document.getElementsByName("option").forEach( (html: HTMLElement)=>
    {
        if( (<HTMLInputElement>html).checked )
        {
            console.log((<HTMLInputElement>html).value);
        }
    })
}