<?php
require_once "./FiguraGeometrica.php";

namespace ej19
{
    class Rectangulo extends FiguraGeometrica
    {
    private $_ladoUno;
    private $_ladoDos;

    //Constructores
    public function __construct($l1, $l2)
    {
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
    }
    //Metodos
    protected function CalcularDatos()
    {
        parent::_perimetro = ($this->_ladoUno + $this->_ladoDos)*2; 
        parent::_superficie = $this->_ladoUno * $this->_ladoDos;
    }
    public function Dibujar()
    {
        for($line = 0 ; $line < this->_ladoDos; $line++)
        {
            echo str_repeat("*",$this->_ladoUno );
        }
    }
    public function ToString()
    {
        $data = sprintf("%s<br>",parent::ToString());
        $data .= sprintf("Lado 1: %s , lado 2: %s<br/>",$this->_ladoUno , $this->_ladoDos);
        $data .= sprintf("Superficie: %s<br>",$this->_superficie);
        $data .= sprintf("Perimetro: %s<br>",$this->_perimetro);
        return $data;
    }
}
}
    
?>