<?php
namespace ej20
{
    class Punto
    {
        //Atributos
        private $_x;
        private $_y;
        //Constructor
        public function __construct($x , $y)
        {
            $this->_x = $x;
            $this->_y = $y;
        }
        //Metodos
        public function getX()
        {
            return $this->_x;
        }
        public function getY()
        {
            return $this->_y;
        }
    }
}
?>