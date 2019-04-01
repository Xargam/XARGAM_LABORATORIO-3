<?php
set_include_path( include_path="./Punto.php");
namespace ej20
{
    class Rectangulo
    {
        //Atributos
        private $_vertice1;
        private $_vertice2;
        private $_vertice3;
        private $_vertice4;
        public $area;
        public $ladoDos;
        public $ladoUno;
        public $perimetro;
        //Constructor
        public function __construct($puntoV1, $puntoV3)
        {
            //Calculo de lados
            $this->ladoUno = abs( $puntoV1->getX() - $puntoV3->getX() );
            $this->ladoDos = abs( $puntoV1->getY() - $puntoV3->getY() );
            //Calculo de vertices
            $this->_vertice1 = $puntoV1;
            $this->_vertice2 = new Punto($puntoV3->getX(), $puntoV1->getY() );
            $this->_vertice3 = $puntoV3;
            $this->_vertice4 = new Punto($puntoV1->getX(), $puntoV3->getY());
            //Calculo de magnitudes
            $this->perimetro = 2 * ($this->ladoUno + $this->ladoDos);
            $this->area = $this->ladoUno * $this->ladoDos;
        }
        //Metodos
        public function dibujar()
        {
            $dibujo = "";
            for($line = 0 ; $line < $this->ladoDos ; $line++)
            {
                $dibujo .= str_repeat("*",$this->ladoUno);
            }
            return $dibujo;
        }
    
    
    }
}
?>