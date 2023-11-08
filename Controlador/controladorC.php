<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/clientes.php");

    $opcion = $_POST["fEnviar"];
    $idC = $_POST["fIdC"];
    $nombreC  = $_POST["fNombreC"];
    $apellidoC   = $_POST["fApellidoC"];
    $cedulaC   = $_POST["fCedulaC"];
    $telefonoC   = $_POST["fTelefonoC"];
    $correoC    = $_POST["fCorreoC"];

    $nombreC      = htmlspecialchars($nombreC);
    $apellidoC      = htmlspecialchars($apellidoC);
    $cedulaC      = htmlspecialchars($cedulaC);
    $telefonoC      = htmlspecialchars($telefonoC);
    $correoC      = htmlspecialchars($correoC);
   

    $objetoC = new Clientes($conexion,$idC,$nombreC,$apellidoC,$cedulaC,$telefonoC,$correoC);
    switch($opcion){
        case 'Ingresar':
            $objetoC->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoC->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoC->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioC.php?msj=$mensaje");
?>