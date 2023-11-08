<?php
class Factura {
    private $_conexion;
    private $idF;
    private $dtoF;
    private $fechaF;
    private $totalF;
    private $idAdmin;
    private $idU;
    private $idRol;
    private $_paginacion = 10;
   
    function __construct($conexion, $idF, $dtoF, $fechaF, $totalF, $idAdmin, $idU, $idRol){
        $this->_conexion = $conexion;
        $this->idF = $idF;
        $this->dtoF = $dtoF;
        $this->fechaF = $fechaF;
        $this->totalF = $totalF;
        $this->idAdmin = $idAdmin;
        $this->idU = $idU;
        $this->idRol = $idRol;
    }

    function __get($k){
        return $this->$k;
    }
    
    function __set($k, $v){
        $this->$k = $v;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion, "INSERT INTO Factura (idF, dtoF, fechaF, totalF, idAdmin, idU, idRol)
        VALUES (NULL, '$this->dtoF', '$this->fechaF', '$this->totalF', '$this->idAdmin', '$this->idU', '$this->idRol')");
        
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria)
        VALUES (NULL, 'Inserto Factura', NULL, NULL)");
        
        return $insercion;
    }

    function modificar(){
        $modificacion = mysqli_query($this->_conexion, "UPDATE Factura SET
        dtoF = '$this->dtoF', fechaF = '$this->fechaF', totalF = '$this->totalF',
        idAdmin = '$this->idAdmin', idU = '$this->idU', idRol = '$this->idRol'
        WHERE idF = $this->idF");
        
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria)
        VALUES (NULL, 'Modifico Factura', NULL, NULL)");
        
        return $modificacion;
    }

    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion, "DELETE FROM Factura
        WHERE idF = $this->idF");
        
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria)
        VALUES (NULL, 'Inserto Factura', NULL, NULL)");
        
        return $eliminacion;
    }

    function cantidadPaginas(){
        $cantidadBloques = mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT(idF) / $this->_paginacion) AS cantidad FROM Factura")
            or die(mysqli_error($this->_conexion));
        $unRegistro = mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }

    function listar($pagina){
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Factura ORDER BY idF") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Factura ORDER BY idF
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }

}
