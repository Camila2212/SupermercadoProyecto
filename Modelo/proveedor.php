<?php
class Proveedor{
    private $_conexion;
    private $_idProv;
    private $_nombre;
    private $_apellido;
    private $_cedula;
    private $_telefono;
    private $_correo;
    private $_idEmp;
    private $_paginacion = 10;
   
    function __construct($conexion,$idProv,$nombre,$apellido,$cedula,$telefono,$correo,$idEmp){
        $this->_conexion = $conexion;
        $this->_idProv = $idProv;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_cedula= $cedula;
        $this->_telefono = $telefono;
        $this->_correo = $correo;
        $this->_idEmp = $idEmp;
    }

    function __get($k){
        return $this->$k;
    }
    function __set($k,$v){
        $this->$k= $v;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO
        proveedor (idProv,nombre,apellido,cedula,telefono,correo,idEmp)
        VALUES(NULL,' $this->_nombre','$this->_apellido','$this->_cedula','$this->_telefono','$this->_correo','$this->_idEmp')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto proveedor',null,null)");
        return $insercion;
    }
    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE proveedor SET
        nombre='$this->_nombre',apellido='$this->_apellido',
        cedula='$this->_cedula',telefono='$this->_telefono',
        correo='$this->_correo',idEmp='$this->_idEmp'
        WHERE idProv=$this->_idProv");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico proveedor', NULL, NULL)");
        return $modificacion;
    }
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM proveedor
        WHERE idProv=$this->_idProv");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto proveedor',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idProv)/$this->_paginacion) AS cantidad FROM proveedor")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina){
        if($pagina<=0){
            $listado = mysqli_query($this->_conexion,"SELECT * FROM proveedor ORDER BY idProv") or
            die (mysqli_error($this->_conexion));
        } else{
                $paginacionMax = $pagina * $this->_paginacion;
                $paginacionMin = $paginacionMax - $this->_paginacion;
                $listado = mysqli_query ($this->_conexion,"SELECT * FROM proveedor ORDER BY idProv
                LIMIT $paginacionMin, $paginacionMax") or die (mysqli_errror($this->_conexion));
            }
            return $listado;        
    }
}
?>