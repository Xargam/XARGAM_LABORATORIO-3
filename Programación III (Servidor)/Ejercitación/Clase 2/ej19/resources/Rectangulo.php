<?php
require_once "./resources/FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{
    private $_ladoUno;
    private $_ladoDos;

    //Constructores
    public function __construct($l1, $l2,$color = "black")
    {
        parent::__construct($color);
        $this->_ladoUno = ($l1 < 0 )? 0 : $l1 ;
        $this->_ladoDos = ($l2 < 0 )? 0 : $l2;
        $this->calcularDatos();
    }
    //Metodos
    protected function calcularDatos()
    {
        $this->_perimetro = ($this->_ladoUno + $this->_ladoDos) * 2.0;
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
    }
    public function dibujar()
    {
        $dibujo = "<div style='color:".parent::getColor()."'>";
        for ($line = 0; $line < $this->_ladoDos; $line++) 
        {
            $dibujo .= str_repeat("*", $this->_ladoUno)."<br>";
        }
        $dibujo .= "</div>";
        return $dibujo;
    }
    public function toString()
    {
        $data = sprintf("%s",parent::toString());
        $data .= sprintf("Lado 1: %scm - lado 2: %scm<br>", $this->_ladoUno, $this->_ladoDos);
        return $data;
    }
}
?>