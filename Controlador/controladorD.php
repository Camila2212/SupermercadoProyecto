<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/detalle.php");

    $opcion = $_POST["fEnviar"];
    $idD = $_POST["fIdD"];
    $nombreD   = $_POST["fNombreD"];
     $cantD   = $_POST["fCantD"];
    $subtotalD  = $_POST["fSubtotalD"];
    $idProd  = $_POST["fIdProd"];
    $idFV  = $_POST["fIdFV"];
   
  
    $objetoD= new Detalle ($conexion,$idD,$nombreD,$cantD,$subtotalD,$idProd,$idFV);
    switch($opcion){
        case 'Ingresar':
            $objetoD->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoD->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoD->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioD.php?msj=$mensaje");
?>
