<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    include_once("../modelo/producto.php");

    $opcion = $_POST["fEnviar"];
    $idProd = $_POST["fIdProd"];
    $nombre  = $_POST["fNombre"];
    $descripcion   = $_POST["fDescripcion"];
    $precio   = $_POST["fPrecio"];
   

    $nombre      = htmlspecialchars($nombre);
    $descripcion      = htmlspecialchars($descripcion);
  

    $objetoProd = new Producto($conexion,$idProd,$nombre,$descripcion,$precio);
    switch($opcion){
        case 'Ingresar':
            $objetoProd->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoProd->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoProd->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioProd.php?msj=$mensaje");
?>