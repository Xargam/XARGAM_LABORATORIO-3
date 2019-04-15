<?php
class Empleado
{
    private $_apellido;
    private $_nombre;
    private $_legajo;
    private $_sueldo;
    private $_path_foto;

    public function __construct($nombre, $apellido,$legajo,$sueldo,$fotoPath)
    {
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
        $this->_path_foto = $fotoPath;
    }

    public function toString()
    {
        return sprintf("%s-%s-%s-%s-%s",$this->_legajo , $this->_apellido , $this->_nombre ,$this->_sueldo , $this->_path_foto."\r\n" );
    }

    public static function agregar($empleado)
    {
        $filePointer = fopen("./empleados.txt","a");
        $ok = fwrite($filePointer, $empleado->toString() );
        fclose($filePointer);
        return ($ok > 0)? true : false;
    } 
    public static function traerTodos()
    {
        $filePointer = fopen("./empleados/empleados.txt","r");
        $data = array();
        $empleadosArray = array();
        while( !feof($filePointer))
        {
            $data = explode("-", fgets($filePointer));
            if(!feof($filePointer))
            {
                array_push($empleadosArray , new Empleado($data[2],$data[1],$data[0],$data[3],$data[4]));
            }
        }
        fclose($filePointer);
        return $empleadosArray;
    }
}
?>