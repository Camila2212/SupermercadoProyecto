<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/compra.php");

    $opcion = $_POST["fEnviar"];
    $idComp = $_POST["fIdComp"];
    $idProv  = $_POST["fIdProv"];
    $idProd   = $_POST["fIdProd"];
    $cantComp     = $_POST["fCantComp"];
    $dtoComp   = $_POST["fDtoComp"];
    $fechaComp     = $_POST["fFechaComp"];
    $totalComp     = $_POST["fTotalComp"];
    $idE     = $_POST["fIdE"];

    $dtoComp      = htmlspecialchars($dtoComp);
   
    $objetoComp = new Compra($conexion,$idComp,$idProv,$idProd,$cantComp,$dtoComp,$fechaComp,$totalComp,$idE);
    switch($opcion){
        case 'Ingresar':
            $objetoComp->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoComp->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoComp->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioComp.php?msj=$mensaje");
?>