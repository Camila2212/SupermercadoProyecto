<?php
class Producto{
    private $_conexion;
    private $_idProd;
    private $_nombre;
    private $_descripcion;
    private $_precio;
    private $_paginacion = 10;
   
    function __construct($conexion,$idProd,$nombre,$descripcion,$precio){
        $this->_conexion = $conexion;
        $this->_idProd = $idProd;
        $this->_nombre = $nombre;
        $this->_descripcion = $descripcion;
        $this->_precio= $precio;
        
    }

    function __get($k){
        return $this->$k;
    }
    function __set($k,$v){
        $this->$k= $v;
    }

    function insertar(){
        $insercion = mysqli_query($this->_conexion,"INSERT INTO
        Producto (idProd,nombre,descripcion,precio)
        VALUES(NULL,' $this->_nombre','$this->_descripcion','$this->_precio')");
        
        $auditoria = mysqli_query($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Producto',null,null)");
        return $insercion;
    }
    function modificar(){
        $modificacion = mysqli_query($this->_conexion,"UPDATE Producto SET
        nombre='$this->_nombre',descripcion='$this->_descripcion',
        precio='$this->_precio'
        WHERE idProd=$this->_idProd");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico Producto', NULL, NULL)");
        return $modificacion;
    }
    function eliminar(){
        $eliminacion = mysqli_query($this->_conexion,"DELETE FROM Producto
        WHERE idProd=$this->_idProd");
        $auditoria = mysqli_query ($this->_conexion,"INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Producto',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas(){
        $cantidadBloques=mysqli_query($this->_conexion,
          "SELECT CEIL(COUNT (idProd)/$this->_paginacion) AS cantidad FROM Producto")
            or die(mysqli_error($this->_conexion));
        $unRegistro=mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina){
        if($pagina<=0){
            $listado = mysqli_query($this->_conexion,"SELECT * FROM Producto ORDER BY idProd") or
            die (mysqli_error($this->_conexion));
            
        } else{
                $paginacionMax = $pagina * $this->_paginacion;
                $paginacionMin = $paginacionMax - $this->_paginacion;
                $listado = mysqli_query ($this->_conexion,"SELECT * FROM Producto ORDER BY idProd
                LIMIT $paginacionMin, $paginacionMax") or die (mysqli_errror($this->_conexion));
            }
            return $listado;        
    }
}
?>