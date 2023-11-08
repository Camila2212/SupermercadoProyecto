<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/usuario.php");

    $opcion = $_POST["fEnviar"];
    $nombre = $_POST["nombre"];
    $apellido  = $_POST["apellido"];
    $cedula  = $_POST["cedula"];
    $correo   = $_POST["correo"];
    $telefono   = $_POST["telefono"];
    $direccion    = $_POST["direccion"];
    $idRol  =$_POST["idRol"];
    $contraseña  =$_POST["contraseña"];

    $nombre      = htmlspecialchars($nombre);
    $apellido      = htmlspecialchars($apellido);
    $email      = htmlspecialchars($email);
    $telefono      = htmlspecialchars($telefono);
    $direccion      = htmlspecialchars($direccion);
   
    $objetoU = new Usuario($conexion,0,$nombre,$apellido,$cedula,$telefono,$correo,$direccion,$idRol,$contraseña);

    switch($opcion){
        case 'Ingresar':
            $objetoU->insertar1();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoU->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoU->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioUsu.php?msj=$mensaje");
?>