function showEmail()
{
    let htmlSelectedOptions : HTMLCollectionOf<HTMLOptionElement> = (<HTMLSelectElement>document.getElementById("cboMail")).selectedOptions;
    for(let index = 0 ; index < htmlSelectedOptions.length ; index++)
    {
        alert((<HTMLOptionElement>htmlSelectedOptions.item(index)).value);
    }
}