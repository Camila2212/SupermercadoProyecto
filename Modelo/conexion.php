<?php 
    class Conexion{
        function conectar(){
            $conexion = mysqli_connect("localhost","root","","proyectoFor3");
            mysqli_query($conexion,"SET Names'utf8' ");
            return $conexion;
        }
        function desconectar($conexion){
            mysqli_close($conexion);
        }
    }
?>