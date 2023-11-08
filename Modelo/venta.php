<?php
class Venta{
    private $_conexion;
    private $_idVent;
    private $_idC;
    private $_idProd;
    private $_cantVent;
    private $_dtoVent;
    private $_fechaVent;
    private $_totalVent;
    private $_idE;
    private $_paginacion = 10;
   
    function __construct($conexion,$idVent,$idC,$idProd,$cantVent,$dtoVent,$fechaVent,$totalVent,$idE){
        $this->_conexion = $conexion;
        $this->_idVent = $idVent;
        $this->_idC = $idC;
        $this->_idProd= $idProd;
        $this->_cantVent = $cantVent;
        $this->_dtoVent = $dtoVent;
        $this->_fechaVent = $fechaVent;
        $this->_totalVent = $totalVent;
        $this->_idE = $idE;
    }

    function __get($k){
        return $this->$k;
    }
    function __set($k,$v){
        $this->$k= $v;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO
        venta (idVent,idC,idProd,cantVent,dtoVent,fechaVent,totalVent,idE)
        VALUES(NULL,' $this->_idC','$this->_idProd','$this->_cantVent','$this->_dtoVent','$this->_fechaVent','$this->_totalVent','$this->_idE')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Venta',null,null)");
        return $insercion;
    }
    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE Venta SET
        idC='$this->_idC',idProd='$this->_idProd',
        cantVent='$this->_cantVent',dtoVent='$this->_dtoVent',
        fechaVent='$this->_fechaVent',totalVent='$this->_totalVent',
        idE='$this->_idE'
        WHERE idVent=$this->_idVent");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico Venta', NULL, NULL)");
        return $modificacion;
    }
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM Venta
        WHERE idVent=$this->_idVent");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Venta',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idE)/$this->_paginacion) AS cantidad FROM Venta")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina){
        if($pagina<=0){
            $listado = mysqli_query($this->_conexion,"SELECT * FROM Venta ORDER BY idVent") or
            die (mysqli_error($this->_conexion));
        } else{
                $paginacionMax = $pagina * $this->_paginacion;
                $paginacionMin = $paginacionMax - $this->_paginacion;
                $listado = mysqli_query ($this->_conexion,"SELECT * FROM Vent ORDER BY idVent
                LIMIT $paginacionMin, $paginacionMax") or die (mysqli_errror($this->_conexion));
            }
            return $listado;        
    }
}
?>