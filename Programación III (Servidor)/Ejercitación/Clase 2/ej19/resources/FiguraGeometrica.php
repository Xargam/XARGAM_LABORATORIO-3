<?php
/*La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,
un método getter y setter para el atributo _color , un método virtual ( ToString ) y dos
métodos abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).
Ejemplo:
* *******
*** *******
***** *******
Neiner, Maximiliano PHP- 2019 Página 2
Utilizar el método ToString para obtener toda la información completa del objeto, y luego
dibujarlo por pantalla.
Jerarquía de clases*/

abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    //Constructores
    function __construct($color)
    {
        $this->setColor($color);
        $this->_perimetro = 0.0;
        $this->_superficie = 0.0;
    }

    //Setters y getters
    public function getColor()
    {
        return $this->_color;
    }
    public function setColor($color)
    {
        $this->_color = $color;
    }

    //Metodos
    public function toString()
    {
        $datos = sprintf("Color: %s<br>",$this->getColor());
        $datos .= sprintf("Perimetro: %s cm<br>", $this->_perimetro );
        $datos .= sprintf("Superficie: %s cm^2<br>", $this->_superficie);
        return $datos;
    }

    public abstract function dibujar();
    protected abstract function calcularDatos();
}
?>