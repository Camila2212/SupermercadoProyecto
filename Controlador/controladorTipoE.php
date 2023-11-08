<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/tipoE.php");

    $opcion = $_POST["fEnviar"];
    $idTipoE = $_POST["fIdTipoE"];
    $area  = $_POST["fArea"];
    $descripcion   = $_POST["fDescripcion"];

    $area      = htmlspecialchars($area);
    $descripcion      = htmlspecialchars($descripcion);


    $objetoTipoE = new TipoE($conexion,$idTipoE,$area,$descripcion);
    switch($opcion){
        case 'Ingresar':
            $objetoTipoE->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoTipoE->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoTipoE->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioTipoE.php?msj=$mensaje");
?>