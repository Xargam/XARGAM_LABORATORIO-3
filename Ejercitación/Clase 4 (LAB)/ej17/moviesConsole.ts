function moviesConsole() : void
{
    document.getElementsByName("movie").forEach( (html : HTMLElement)=>
    {
        let htmlInput : HTMLInputElement = <HTMLInputElement>html;
        if( htmlInput.checked === true)
        {
            console.log( htmlInput.value);
            htmlInput.checked = false;
        }
    });
}