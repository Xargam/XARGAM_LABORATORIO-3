<?php
require_once "./lib/FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{
    private $_ladoUno;
    private $_ladoDos;

    //Constructores
    public function __construct($l1, $l2,$color)
    {
        parent::__construct($color);
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
    }
    //Metodos
    protected function CalcularDatos()
    {
        $this->_perimetro = $this->_ladoUno*2 + $this->_ladoDos*2; 
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
    }
    public function Dibujar()
    {
        for($line = 0 ; $line < $this->_altura ; $line++)
        {
            echo str_repeat("*",$this->_base );
        }
    }
    public function ToString()
    {
        $data = parent::ToString()."<br/>";
        $data .= sprintf("Lado 1: %s , lado 2: %s",$this->_ladoUno , $this->_ladoDos)."<br/>";
        $data .= "Superficie: ".$this->_superficie."<br/>";
        $data .= "Perimetro: ".$this->_perimetro."<br/>";
        return $data;
    }
}
    
?>