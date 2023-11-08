<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/Administrador.php");

    $opcion = $_POST["fEnviar"];
    $idRol = $_POST["fIdAdmin"];
    $nombre  = $_POST["fNombre"];

    $nombre      = htmlspecialchars($nombre);

    $objetoAdmin = new Administrador($conexion,$idAdmin,$nombre);
    switch($opcion){
        case 'Ingresar':
            $objetoAdmin->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoAdmin->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoAdmin->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioAdmin.php?msj=$mensaje");
?>