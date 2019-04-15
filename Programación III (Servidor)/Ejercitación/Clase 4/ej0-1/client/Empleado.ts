/// <reference path="./Persona.ts"/> 
namespace Empleados
{
    export class Empleado extends Persona
    {
        private _legajo : number;
        private _sueldo : number;

        constructor( nombre : string , apellido : string ,dni : number, sexo : string , legajo : number , sueldo : number )
        {
            super(nombre, apellido , dni , sexo);
            this._legajo = legajo;
            this._sueldo = sueldo;
        }

        public getLegajo() : number
        {
            return this._legajo;
        }
        public getSueldo() : number
        {
            return this._sueldo;
        }

        public hablar( idioma : string) : string
        {
            return "El empleado habla "+idioma;
        }

        public toString() : string
        {
            return super.toString() + " - " + this.getLegajo() + " - " + this.getSueldo(); 
        }
    }
}