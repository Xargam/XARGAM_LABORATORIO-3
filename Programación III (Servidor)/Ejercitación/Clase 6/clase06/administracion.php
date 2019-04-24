<?php
include_once "./EJERCICIO_CLASE/clases/AccesoDatos.php"; //Se usa antes del Usuario sino tira error
include_once "./EJERCICIO_CLASE/clases/usuario.php";

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

$host = "localhost";
$user = "root";
$pass = "";
$base = "productos";

switch($queHago){

# FUNCIONES HECHAS EN CLASE
    case "TraerUno": #OK
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        
        $resp = usuario::TraerUno($id);

        if($resp !== NULL)
        {
            
            echo($resp->MostrarDatos());
        }
        else
        {
            var_dump($resp);
        }

    break;

    case "TraerTodosEmpleados": #OK

        $usuario = new Usuario();
        $users= $usuario->TraerTodos();
        if($users !== NULL)
        {
            foreach ($users as $key) {
                echo($key->id."<br>".$key->correo."<br>".$key->clave."<br>".$key->nombre."<br>".$key->apellido."<br>".$key->perfil."<br>");
            }
        }
        else
        {
            echo $users;
        }
        
    break;

    case "EliminarEmpleado": #OK
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $usuario = new Usuario();
        $user= $usuario->Eliminar($id);
        
        if($user) //If true
        {
            echo "Se elimino al usuario con exito!";
        }
        else //If false
        {
            echo "Error al eliminar!";
        }
    break;

    case "AgregarEmpleado": #OK
        $correo = isset($_POST['correo']) ? $_POST['correo'] : NULL;
        $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
        $perfil = isset($_POST['perfil']) ? $_POST['perfil'] : NULL;
        
        $usuario = new Usuario(-1,$correo,$clave,$nombre,$apellido,$perfil);


        if(Usuario::Agregar($usuario)) #Es estatico
        {
            echo "Exito al guardar!";
        }
        else
        {
            echo "Error al guardar!";
        }

    break;

    case "ModificarEmpleado":
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $correo = isset($_POST['correo']) ? $_POST['correo'] : NULL;
        $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
        $perfil = isset($_POST['perfil']) ? $_POST['perfil'] : NULL;
        
        $usuario = new Usuario($id,$correo,$clave,$nombre,$apellido,$perfil); #El id en este caso es obligatorio


        if(Usuario::Modificar($usuario))
        {
            echo "Exito al modificar!";
        }
        else
        {
            echo "Error al modificar!";
        }
    break;

    default:
        echo ":(";

}