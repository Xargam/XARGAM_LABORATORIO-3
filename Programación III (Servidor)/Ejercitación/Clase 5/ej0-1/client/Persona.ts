namespace Empleados {
    export abstract  class Persona {
        protected _nombre: string;
        protected _apellido: string;
        protected _sexo: string;
        protected _dni: number;

        constructor( nombre : string , apellido : string ,dni : number, sexo : string , )
        {
            this._nombre = nombre;
            this._apellido = apellido;
            this._dni = dni;
            this._sexo = sexo;
        }

        public getNombre() : string
        {
            return this._nombre;
        }
        public getApellido() : string
        {
            return this._apellido;
        }
        public getSexo() : string
        {
            return this._sexo;
        }
        public getDni() : number
        {
            return this._dni;
        }

        public abstract hablar( idioma : string): string;
        public toString() : string
        {
            return this.getNombre() + " - " + this.getApellido() + " - " + this.getSexo() + " - " +
            this.getDni();
        }
    }
}
