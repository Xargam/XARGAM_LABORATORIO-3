<?php
class Persona
{
    //Atributos
    public $nombre;
    public $apellido;
    //Constructor
    public function __construct($nombre , $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    //Metodos
    public function guardar()
    {
        $path = "./Personas.txt";
        $file =  fopen($path,"a");
        $ok = fwrite($file,$this->toString().date(" - \D\i\a: d \m\\e\s: m \a\ñ\o: Y G:i:s")."\r\n");
        fclose($file);
        return $ok;
    }
    public function leer()
    {
        $path = "./Personas.txt";
        $file =  fopen($path,"r");
        $data = fread($file,filesize($path));
        $ok = strlen($data) > 0;
        echo $data;
        fclose($file);
        return $ok;
    }
    public static function traerTodasLasPersonas()
    {
        $path = "./Personas.txt";
        $file = fopen($path,"r");
        $persona = "";
        $personas = array();
        $array = array();
        while( !feof($file))
        {
            $persona = fgets($file,"-" );
            if($persona == "")
            {
                break;
            }
            $array = explode(" - ",$persona);
            $personas = new Persona($array[0],$array[1]);
            
            
        }
        
    }
    public function toString()
    {
        return sprintf("%s - %s",$this->nombre , $this->apellido);
    }
}
?>