<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/empresa.php");

    $opcion = $_POST["fEnviar"];
    $idEmp = $_POST["fIdEmp"];
    $nombre  = $_POST["fNombre"];
    $nit   = $_POST["fNit"];
    $telefono   = $_POST["fTelefono"];
    $correo    = $_POST["fCorreo"];
    $direccion    = $_POST["fDireccion"];

    $nombre      = htmlspecialchars($nombre);
    $nit      = htmlspecialchars($nit);
    $telefono      = htmlspecialchars($telefono);
    $correo      = htmlspecialchars($correo);
    $direccion   = htmlspecialchars($direccion);

    $objetoEmp = new Empresa($conexion,$idEmp,$nombre,$nit,$telefono,$correo,$direccion);
    switch($opcion){
        case 'Ingresar':
            $objetoEmp->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoEmp->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoEmp->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioEmp.php?msj=$mensaje");
?>