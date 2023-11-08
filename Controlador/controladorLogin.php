<?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion =$objetoConexion->conectar();

    $opcion = $_POST["fEnviar"];
    $emailUsuario = $_POST["fEmail"];
    $claveUsuario  = $_POST["fClave"];
    
    $emailUsuario = mysqli_real_escape_string($conexion,$emailUsuario);
    
    include_once("../modelo/login.php");
    $objetoLogin = new Login ($conexion, $emailUsuario, $claveUsuario);
    $usuarioEsValido = $objetoLogin->verificarUsuario();

  
    if($usuarioEsValido==true){
        session_start();
        $_SESSION['id']  =$objetoLogin->getId();
        $_SESSION['nombre']  =$objetoLogin->getNombre();
        $_SESSION['rol']  =$objetoLogin->getRol();
        header("location:../Vista/formularioC.php");
    }else {
        header("location:../Vista/formularioLogin.php?mensaje=incorrecto");
    }

    switch($opcion){
        case 'Ingresar':
            $objetoLogin->insertar();
            $mensaje = "Ingresado";
        break;
        case'Modificar':
            $objetoLogin->modificar();
            $mensaje = "Modificado";
        break;
        case 'Eliminar':
            $objetoLogin->eliminar();
            $mensaje = "Eliminado";
        break;
    }
    $objetoConexion->desconectar($conexion);
    header("location:../vista/formularioC.php?msj=$mensaje");
?>