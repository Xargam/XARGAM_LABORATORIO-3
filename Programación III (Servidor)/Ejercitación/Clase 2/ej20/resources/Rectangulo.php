<?php
require_once "./resources/Punto.php";

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
        $this->ladoUno = abs($puntoV1->getX() - $puntoV3->getX());
        $this->ladoDos = abs($puntoV1->getY() - $puntoV3->getY());
        //Calculo de vertices
        $this->_vertice1 = $puntoV1;
        $this->_vertice2 = new Punto($puntoV3->getX(), $puntoV1->getY());
        $this->_vertice3 = $puntoV3;
        $this->_vertice4 = new Punto($puntoV1->getX(), $puntoV3->getY());
        //Calculo de magnitudes
        $this->perimetro = 2 * ($this->ladoUno + $this->ladoDos);
        $this->area = $this->ladoUno * $this->ladoDos;
    }
    //Metodos
    public function toString()
    {
        $data = sprintf("Lado 1: %s cm<br>",$this->ladoUno);
        $data .= sprintf("Lado 2: %s cm<br>",$this->ladoDos);
        $data .= sprintf("Perimetro: %s cm - area: %s cm^2<br>",$this->perimetro, $this->area);
        $data .= sprintf("Vertice 1: %s<br>",$this->_vertice1->toString() );
        $data .= sprintf("Vertice 2: %s<br>",$this->_vertice2->toString() );
        $data .= sprintf("Vertice 3: %s<br>",$this->_vertice3->toString() );
        $data .= sprintf("Vertice 4: %s<br>",$this->_vertice4->toString() );
        return $data;
    }
    public function dibujar()
    {
        $dibujo = "";
        for ($base = 0; $base < $this->ladoDos; $base++) {
                $dibujo .= str_repeat("*", $this->ladoUno)."<br>";
            }
        return $dibujo;
    }
}
?>