<?php
class Usuario{
    private $_conexion;
    private $_idU;
    private $_nombre;
    private $_apellido;
    private $_cedula;
    private $_telefono;
    private $_correo;
    private $_direccion;
    private $_idRol;
    private $_contraseña;
    private $_paginacion = 10;
   
 
    function __construct($conexion,$idU,$nombre,$apellido,$cedula,$telefono,$correo,$direccion,$idRol,$contraseña){
        $this->_conexion = $conexion;
        $this->_idU = $idU;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_cedula = $cedula;
        $this->_telefono = $telefono;
        $this->_correo = $correo;
        $this->_direccion = $direccion;
        $this->_idRol = $idRol;
        $this->_contraseña = $contraseña;

    }

    function __get($k){
        return $this->$k;
    }
    function __set($k,$v){
        $this->$k= $v;
    }
    function getIdU()
    {
        return $this->_idU;
    }

    function getNombre()
    {
        return $this->_nombre;
    }
    function getContraseña()
    {
        return $this->_contraseña;
    }
    function getRol()
    {
        return $this->_idRol;
    }


    function insertar1(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO `usuario`(`idU`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`, `direccion`, `idRol`,contraseña) 
        VALUES(NULL,' $this->_nombre','$this->_apellido','$this->_cedula','$this->_telefono','$this->_correo','$this->_direccion','$this->_idRol','$this->_contraseña')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto empleado',null,null)");
        return $insercion;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO
        empleado (idE,nombre,apellido,cedula,telefono,correo,direccion,idTipoE)
        VALUES(NULL,' $this->_nombre','$this->_apellido','$this->_cedula','$this->_telefono','$this->_correo','$this->_direccion','$this->_idTipoE')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto empleado',null,null)");
        return $insercion;
    }
    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE empleado SET
        nombre='$this->_nombre',apellido='$this->_apellido',
        cedula='$this->_cedula',telefono='$this->_telefono',
        correo='$this->_correo',direccion='$this->_direccion',
        idTipoE='$this->_idTipoE'
        WHERE idE=$this->_idE");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico empleado', NULL, NULL)");
        return $modificacion;
    }
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM empleado
        WHERE idE=$this->_idE");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto empleado',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idU)/$this->_paginacion) AS cantidad FROM Usuario")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
   

    function listar($pagina){
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Usuario ORDER BY idU") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Usuario ORDER BY idU
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }
    function verificarUsuario()
    {
        $verificacion = mysqli_query($this->_conexion, "SELECT idU, nombre FROM Usuario 
        WHERE nombre LIKE '$this->_nombre' and contraseña like '$this->_contraseña'");

        if (mysqli_num_rows($verificacion)) {
            $unUsuario = mysqli_fetch_array($verificacion);
            $this->_idU = $unUsuario["idU"];
            $this->_usuario = $unUsuario["usuario"];
            $this->_contraseña = $unUsuario["contraseña"];
            return true;
        }
        return false;
    }
}
?>