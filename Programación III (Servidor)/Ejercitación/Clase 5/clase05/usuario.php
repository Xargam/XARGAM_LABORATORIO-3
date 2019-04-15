<?php

class Usuario
{
    public $id;
    public $correo;
    public $clave;
    public $nombre;
    public $apellido;
    public $perfil;

    private static $base = "usuarios";
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";

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
       $connection = mysql_connect( Usuario::$host, Usuario::$user, Usuario::$pass);
       return $connection;
    }

    public static function  cerrarConexion()
    {
        mysql_close();
    }

    public static function traerUno($id)
    {
        $connection = Usuarios::establecerConexion();
        $preUser = mysql_fetch_assoc(mysql_query("SELECT * FROM ".Usuario::$base."WHERE id={$id}",$connection));
        Usuarios::cerrarConexion();
        return ($preUser !== false)? new Usuario($preUser["id"] , $preUser["correo"] ,$preUser["clave"] , $preUser["nombre"] , 
        $preUser["apellido"]  ,$preUser["perfil"] ) : NULL;
    }

    public static function traerTodos()
    {
        $connection = Usuarios::establecerConexion();
        $userArray = array();
        while( $row = mysql_fetch_assoc(mysql_query("SELECT * FROM ".Usuario::$base) )
        {
            if( !$row)
            {
                array_push($userArray,new Usuario($row["id"] , $row["correo"] ,$row["clave"] , $row["nombre"] , 
                $row["apellido"]  ,$row["perfil"]) );
            }
        }
        Usuarios::cerrarConexion();
        return (array_count_values($userArray) > 0)? $userArray : NULL;
    }

    public static function agregar($obj)
    {
        $connection = Usuarios::establecerConexion();
        $sql = "INSERT INTO usuarios (correo , clave , nombre , apellido , perfil) VALUES ('{$obj->correo}',
        '{$obj->clave}' ,'{$obj->nombre}','{$obj->apellido}',{$obj->perfil})"
        return (mysql_query($sql,$connection) == 1)? true : false;
    }

    public function eliminar(); //bool Me elimino a mi mismo
    public static function modificar($obj); //bool
}

?>