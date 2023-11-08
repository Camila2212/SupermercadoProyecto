<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/venta.php");

    $opcion = $_POST["fEnviar"];
    $idVent = $_POST["fIdVent"];
    $idC  = $_POST["fIdC"];
    $idProd   = $_POST["fIdProd"];
    $cantVent     = $_POST["fCantVent"];
    $dtoVent   = $_POST["fDtoVent"];
    $fechaVent     = $_POST["fFechaVent"];
    $totalVent     = $_POST["fTotalVent"];
    $idE     = $_POST["fIdE"];

    $dtoVent      = htmlspecialchars($dtoVent);
   
    $objetoVent = new Venta($conexion,$idVent,$idC,$idProd,$cantVent,$dtoVent,$fechaVent,$totalVent,$idE);
    switch($opcion){
        case 'Ingresar':
            $objetoVent->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoVent->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoVent->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioVent.php?msj=$mensaje");
?>