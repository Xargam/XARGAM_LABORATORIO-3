<?php
require_once "./resources/FiguraGeometrica.php";
class Triangulo extends FiguraGeometrica
{
    private $_altura;
    private $_base;

    public function __construct($b, $h , $color = "black")
    {
        parent::__construct($color);
        $this->_base = ($b < 0 )? 0 : $b;
        $this->_altura = ($h < 0)? 0: $h;
        $this->calcularDatos();
    }

    //Metodos
    protected function calcularDatos()
    {
        //El triangulo debe ser isosceles para que se pueda graficar en forma de piramide.
        $this->_perimetro = sqrt( ($this->_base / 2) ** 2 + $this->_altura **2  );
        $this->_superficie = $this->_base * $this->_altura / 2;
    }
    public function dibujar()
    {
        $dibujo = "<div style='color:".parent::getColor()."'><pre>";
        for ($linea = 0 , $asteriscosLinea = 1; $linea < $this->_altura; $linea++, $asteriscosLinea+=2 ) 
        {
            $dibujo .= str_repeat(" ", $this->_altura - 1 - $linea) . str_repeat("*", $asteriscosLinea)."<br>";
        }
        $dibujo .= "</pre></div>";
        return $dibujo;
    }
    public function toString()
    {
        $data = sprintf("%s",parent::ToString());
        $data .= sprintf("Base: %s , altura: %s<br>", $this->_base, $this->_altura);
        return $data;
    }
}
