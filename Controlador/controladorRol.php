<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/rol.php");

    $opcion = $_POST["fEnviar"];
    $idRol = $_POST["fIdRol"];
    $nombre  = $_POST["fNombre"];

    $nombre      = htmlspecialchars($nombre);

    $objetoRol = new Rol($conexion,$idRol,$nombre);
    switch($opcion){
        case 'Ingresar':
            $objetoRol->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoRol->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoRol->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioRol.php?msj=$mensaje");
?>