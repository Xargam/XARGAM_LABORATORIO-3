<?php
class usuario
{
    public $id;
    public $correo;
    public $clave;
    public $nombre;
    public $apellido;
    public $perfil;

    public function __construct($id=NULL,$correo=NULL,$clave=NULL,$nombre=NULL,$apellido=NULL,$perfil=NULL)
    {
        $this->id = $id;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->perfil = $perfil;
    }

    public function MostrarDatos()
    {
        return $this->id." - ".$this->correo." - ".$this->clave." - ".$this->nombre." - ".$this->apellido." - ".$this->perfil;
    }

    public static function TraerUno($id)
    {
        //Creando objeto usuario
        $objUsuario = new stdClass();
        $objUsuario->id = $id;
        

        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta =$objetoAccesoDato->RetornarConsulta('SELECT * FROM usuarios WHERE id=:id');

        $consulta->bindParam(':id',$objUsuario->id);

        $consulta->execute();
        
        
        $obj = $consulta->fetch(PDO::FETCH_LAZY);
        $usuario = new usuario($obj->id, $obj->correo, $obj->clave, $obj->nombre, $obj->apellido, $obj->perfil);

        return $usuario; 
    }
}

?>