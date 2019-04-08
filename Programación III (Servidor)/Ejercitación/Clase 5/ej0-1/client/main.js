var __extends = (this && this.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
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
/// <reference path="./Persona.ts"/> 
var Empleados;
(function (Empleados) {
    var Empleado = /** @class */ (function (_super) {
        __extends(Empleado, _super);
        function Empleado(nombre, apellido, dni, sexo, legajo, sueldo) {
            var _this = _super.call(this, nombre, apellido, dni, sexo) || this;
            _this._legajo = legajo;
            _this._sueldo = sueldo;
            return _this;
        }
        Empleado.prototype.getLegajo = function () {
            return this._legajo;
        };
        Empleado.prototype.getSueldo = function () {
            return this._sueldo;
        };
        Empleado.prototype.hablar = function (idioma) {
            return "El empleado habla " + idioma;
        };
        Empleado.prototype.toString = function () {
            return _super.prototype.toString.call(this) + " - " + this.getLegajo() + " - " + this.getSueldo();
        };
        return Empleado;
    }(Empleados.Persona));
    Empleados.Empleado = Empleado;
})(Empleados || (Empleados = {}));
/// <reference path="./Empleado.ts"/>
function showEmployee() {
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var genre = document.getElementById("genre").value;
    var dni = parseInt(document.getElementById("dni").value, 10);
    var file = parseInt(document.getElementById("file").value, 10);
    var salary = parseFloat(document.getElementById("salary").value);
    var empleado = new Empleados.Empleado(name, surname, dni, genre, file, salary);
    console.log(empleado.toString());
}
