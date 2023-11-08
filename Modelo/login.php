<?php
class Login{
    private $_conexion;
   private $_idUsuario;
   private $_emailUsuario;
   private $_hashedClave;
   private $_nombreUsuario;
   private $_rolUsuario;
    private $_paginacion = 10;
   
    function __construct($conexion,$correo,$clave){
        $this->_conexion = $conexion;
        $this->_emailUsuario = $correo;
        $this->_hashedClave = hash('sha256',$clave);
        

    }
    function getId(){
        return $this->_idUsuario;
    }

        function getNombre(){
            return $this->_nombreUsuario;
        }
    function getRol(){
        return $this->_rolUsuario;
    }

    

    function insertar(){
        $mivar = "INSERT INTO `login` (`idUsuario`, `emailUsuario`) VALUES (NULL, '$this->_emailUsuario')";     
        $insercion = mysqli_query($this->_conexion,$mivar);
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto login', NULL, NULL)");
        return $insercion;
    }

    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE login SET
        emailUsuario='$this->_emailUsuario' WHERE idUsuario='$this->_idUsuario'");


        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico login', NULL, NULL)");
        return $modificacion;
    }
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM login
        WHERE idUsuario=$this->_idUsuario");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto login', NULL, NULL)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idUsuario)/$this->_paginacion) AS cantidad FROM login")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina){
        if($pagina<=0){
            $listado = mysqli_query($this->_conexion,"SELECT * FROM login ORDER BY idUsuario") or
            die (mysqli_error($this->_conexion));
        } else{
                $paginacionMax = $pagina * $this->_paginacion;
                $paginacionMin = $paginacionMax - $this->_paginacion;
                $listado = mysqli_query ($this->_conexion,"SELECT * FROM login ORDER BY idUsuario
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
                                                                
            }
            return $listado;        
    }
    function verificarUsuario(){
        $verificacion =mysqli_query($this->_conexion,"SELECT id,usuario,nombre FROM Usuarios WHERE usuario LIKE '$this->_emailUsuario'AND
         CONVERT (claveUsuario, CHAR(100)) LIKE '$this->_hashedClave')");

        if (mysqli_num_rows($verificacion)) {
            $unUsuario = mysqli_fetch_array($verificacion);
            $this->_idUsuario = $unUsuario ["idUsuario"];
            $this->_nombreUsuario =$unUsuario["nombreUsuario"];
            $this->_rolUsuario =$unUsuario["rolUsuario"];
            return true;
        }
        return false;
    }

}
?>