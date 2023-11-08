<?php
class Detalle{
    private $_conexion;
    private $_idD;
    private $_nombreD;
    private $_cantD;
    private $_subtotalD;
    private $_idProd;
    private $_idF;
    
    private $_paginacion = 10;
   
    function __construct($conexion,$idD,$nombreD,$cantD,$subtotalD,$idProd,$idF){
        $this->_conexion = $conexion;
        
       
        $this->_idD = $idD;
        $this->_nombreD = $nombreD;
        $this->_cantD= $cantD;
        $this->_subtotalD = $subtotalD;
         $this->_idProd = $idProd;
         $this->_idF = $idF;
    }

    function __get($k){
        return $this->$k;
    }
    function __set($k,$v){
        $this->$k= $v;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO
        Detalle (idD,nombreD,cantD,subtotalD,idProd,idF)
        VALUES(NULL,' $this->_nombreD',' $this->_cantD','$this->_subtotalD','$this->_idProd','$this->_idF')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Detalle',null,null)");
        return $insercion;
    }
    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE Detalle SET
        nombreD='$this->_nombreD',cantD='$this->_cantD',subtotalD='$this->_subtotalD',
        idProd='$this->_idProd', idF='$this->_idF'
        WHERE idD=$this->_idD");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico Detalle', NULL, NULL)");
        return $modificacion;
    }
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM Detalle
        WHERE idD=$this->_idD");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Detalle',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idD)/$this->_paginacion) AS cantidad FROM Detalle")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina){
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Detalle ORDER BY idD") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Detalle ORDER BY idD
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }
}
?>