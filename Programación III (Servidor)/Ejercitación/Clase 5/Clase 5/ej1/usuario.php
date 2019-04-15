<?php

class Usuario
{
    public $id;
    public $correo;
    public $clave;
    public $nombre;
    public $apellido;
    public $perfil;

    private $base = "usuarios";
    private $user = "root";
    private $clave = "";

    function __construct($id , $correo , $clave , $nombre , $apellido , $perfil)
    {
        $this->id = $id;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->perfil = $perfil;
    }

    public static function  establecerConexion()
    {
       $connection = mysql_connect("localhost",$user,$clave);
       return $connection;
    }

    public static function  cerrarConexion()
    {
        mysql_close();
    }

    public function traerUno($id)
    {
        $connection = $this->establecerConexion();
        $preUser = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE id={$id}",$connection));
        $this->mysql_close();
        return = ($preUser !== false)? new Usuario($preUser["id"] , $preUser["correo"] ,$preUser["clave"] , $preUser["nombre"] , 
        $preUser["apellido"]  ,$preUser["perfil"] ) : NULL;
    }
}

?>