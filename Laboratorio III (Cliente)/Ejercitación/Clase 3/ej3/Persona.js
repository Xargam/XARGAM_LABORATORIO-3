"use strict";
var Empleados;
(function (Empleados) {
    var Persona = /** @class */ (function () {
        function Persona(nombre, apellido, dni, sexo) {
            this._nombre = nombre;
            this._apellido = apellido;
            this._dni = dni;
            this._sexo = sexo;
        }
        Persona.prototype.getNombre = function () {
            return this._nombre;
        };
        Persona.prototype.getApellido = function () {
            return this._apellido;
        };
        Persona.prototype.getSexo = function () {
            return this._sexo;
        };
        Persona.prototype.getDni = function () {
            return this._dni;
        };
        Persona.prototype.toString = function () {
            return this.getNombre() + " - " + this.getApellido() + " - " + this.getSexo() + " - " +
                this.getDni();
        };
        return Persona;
    }());
    Empleados.Persona = Persona;
})(Empleados || (Empleados = {}));
//# sourceMappingURL=Persona.js.map