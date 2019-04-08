namespace Validation {
    export function isGenre(cad: string): boolean {
        cad = cad.toLowerCase();
        return cad == 'm' || cad == 'f';
    }
    export function isEmpty(cad: string): boolean {
        return cad == "";
    }
    export function isNumeric(cad: string): boolean {
        let numeric: boolean = cad.length > 0 && cad != "-." && cad != "." && cad != "-" && cad != ".-";
        let dot : boolean = false;
        //Elimino el signo menos del numero en caso de que lo haya para facilitar el analisis del numero.
        if( numeric )
        {
            cad = (cad[0] == "-")? cad.slice(1) : cad;
            for (let index = 0; index < cad.length; index++) {
                if (cad.charCodeAt(index) < 0x30 || cad.charCodeAt(index) > 0x39) {

                    if(cad[index] == "." && !dot)
                    {
                        dot = true;
                        continue;
                    }
                    numeric = false;
                    break;
                }
            }
        }
        return numeric;
    }
}