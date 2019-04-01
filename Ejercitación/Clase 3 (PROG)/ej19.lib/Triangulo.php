<?php
require_once "./FiguraGeometrica.php";
namespace ej19 {
    class Triangulo extends FiguraGeometrica
    {
        private $_altura;
        private $_base;

        public function __construct($b, $h)
        {
            $this->_base = $b;
            $this->_altura = $h;
            $this->CalcularDatos();
        }

        //Metodos
        protected function CalcularDatos()
        {
            $this->_perimetro = $this->_base + $this->_altura * 2;
            $this->_superficie = $this->_base * $this->_altura / 2;
        }
        public function Dibujar()
        {
            for ($line = 0, $asteriscos = 1; $line < $this->_altura; $line++, $asteriscos += 2) {
                    echo str_repeat(" ", $line) . str_repeat("*", 0);
                }
        }
        public function ToString()
        {
            $data = parent::ToString() . "<br/>";
            $data .= sprintf("Base: %s , altura: %s", $this->_base, $this->_altura) . "<br/>";
            $data .= "Superficie: " . $this->_superficie . "<br/>";
            $data .= "Perimetro: " . $this->_perimetro . "<br/>";
            return $data;
        }
    }
}
 