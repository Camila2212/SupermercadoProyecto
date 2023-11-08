<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/factura.php");

    $opcion = $_POST["fEnviar"];
    $idF  = $_POST["fIdF"];
    $dtoF  = $_POST["fDtoF"];
    $fechaF   = $_POST["fFechaF"];
    $totalF   = $_POST["fTotalF"];
    $idAdmin = $_POST["fIdAdmin"];
    $idU   = $_POST["fIdU"];
    $idRol    = $_POST["fIdRol"];

    $dtoF      = htmlspecialchars($dtoF);
      

    $objetoF = new Factura($conexion, $idF, $dtoF, $fechaF, $totalF, $idAdmin, $idU, $idRol);
    switch($opcion){
        case 'Ingresar':
            $objetoF->insertar();
            $mensaje = "Ingresado";
        break;
        case 'Modificar':
            $objetoF->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoF->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioFact.php?msj=$mensaje");
?>
