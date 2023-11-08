<?php
class TipoE{
    private $_conexion;
    private $_idTipoE;
    private $_area;
    private $_descripcion;
    private $_paginacion = 10;
   
    function __construct($conexion,$idTipoE,$area,$descripcion){
        $this->_conexion = $conexion;
        $this->_idE = $idTipoE;
        $this->_area = $area;
        $this->_descripcion = $descripcion;
    }

    function __get($k){
        return $this->$k;
    }
    function __set($k,$v){
        $this->$k= $v;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO
        TipoE (idTipoE, area, descripcion)
        VALUES(NULL,'$this->_area','$this->_descripcion')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto TipoE',null,null)");
        return $insercion;
    }
    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE TipoE SET
        area='$this->_area',descripcion='$this->_descripcion'
        WHERE idTipoE=$this->_idTipoE");

        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico TipoE', NULL, NULL)");
        return $modificacion;
    }
    
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM TipoE
        WHERE idTipoE=$this->_idTipoE");
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto TipoE',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idTipoE)/$this->_paginacion) AS cantidad FROM TipoE")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina){
        if($pagina<=0){
            $listado = mysqli_query($this->_conexion,"SELECT * FROM TipoE ORDER BY idTipoE") or
            die (mysqli_error($this->_conexion));
        } else{
                $paginacionMax = $pagina * $this->_paginacion;
                $paginacionMin = $paginacionMax - $this->_paginacion;
                $listado = mysqli_query ($this->_conexion,"SELECT * FROM TipoE ORDER BY idTipoE
                LIMIT $paginacionMin, $paginacionMax") or die (mysqli_errror($this->_conexion));
            }
            return $listado;        
    }
}
?>