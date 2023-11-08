<?php

include_once("../modelo/conexion.php");
$objetoConexion = new conexion();
$conexion = $objetoConexion->conectar();

include_once("../modelo/inicioSesion.php");

$usuario  = $_POST["Usuario"];
$contraseña   = $_POST["Contraseña"];

$usuario      = htmlspecialchars($usuario);

$objetoIS = new inicioSesion($conexion, $usuario, $contraseña,$idRol);
$usuarioEsValido = $objetoIS->verificarUsuario();

if ($usuarioEsValido) {
    session_start();
    $_SESSION['idIS']  = $objetoIS->getIdIS();
    $_SESSION['usuario']  = $objetoIS->getUsuario();
    $_SESSION['idRol']  = $objetoIS->getIdRol();

    header("location:../vista/proyectoF.php?mensaje=correcto");

} else {
 
     
    header("location:../Vista/formularioIS.php?mensaje=Contraseña incorrecta. Vuelve a intentarlo");
}


$objetoConexion->desconectar($conexion);
    


































// include_once("../modelo/conexion.php");
// include_once("../modelo/inicioSesion.php");
// $objetoConexion = new conexion();
// $conexion = $objetoConexion->conectar();

// $objetoIS = new inicioSesion($conexion, $usuario, $contraseña);
// $usuarioEsValido = $objetoIS->verificarUsuario();

// $opcion = $_POST["fEnviar"];
// // $opcion = $_POST["CS"];

// // var_dump($opcion);
// // exit;
// switch ($opcion) {
//     case 'ingresar':
//         $objetoIS->insertar();
//         $mensaje = "ingresado";
//         header("location:../vista/formularioReP.php");
//         break;

//     case 'modificar':
//         $objetoIS->modificar();
//         $mensaje = "modificado";
//         header("location:../vista/formularioReP.php");
//         break;
//     case 'eliminar':
//         $objetoIS->eliminar();
//         $mensaje = "eliminado";
//         header("location:../vista/formularioReP.php");
//         break;

//     case '1':
//         echo "opcion 1";

//         $usuario = $_POST["Usuario"];
//         $contraseña = $_POST["Contraseña"];

//         // Verificar los valores recibidos
//         var_dump($usuario);
//         var_dump($contraseña);


    

//         // var_dump($usuario);
//         // var_dump($contraseña);
//         // exit;

//         $usuario      = htmlspecialchars($usuario);


//         if ($usuarioEsValido == true) {
//             session_start();
//             $_SESSION['idIS']  = $objetoIS->getIdIS();
//             $_SESSION['usuario']  = $objetoIS->getUsuario();

//             header("location:../vista/proyectoF.php?mensaje=correcto");
//             if (isset($_POST['CS'])) {

//                 session_unset();

//                 session_destroy();
//             }
//         } else {


//             header("location:../Vista/formularioIS.php?mensaje=incorrecto");
//         }
//         break;
// }


// $objetoConexion->desconectar($conexion);
?>