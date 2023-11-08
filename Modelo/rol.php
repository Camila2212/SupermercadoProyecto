<?php
class Rol
{
    private $_conexion;
    private $_idRol;
    private $_nombre;
    private $_paginacion = 10;

    function __construct($conexion, $idRol, $nombre)
    {
        $this->_conexion = $conexion;
        $this->_idRol = $idRol;
        $this->_nombre = $nombre;
    }

    function __get($k)
    {
        return $this->$k;
    }
    function __set($k, $v)
    {
        $this->$k = $v;
    }

    function insertar()
    {
        $insercion = mysqli_query($this->_conexion, "INSERT INTO Rol (idRol, nombre) VALUES (NULL, '$this->_nombre')");

        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria) VALUES (NULL, 'Inserto Rol', null, null)");
        return $insercion;
    }

    function modificar()
    {
        $modificacion = mysqli_query($this->_conexion, "UPDATE Rol SET  nombre = '$this->_nombre' WHERE idRol = $this->_idRol");

        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria) VALUES (NULL, 'Modifico Rol', NULL, NULL)");
        return $modificacion;
    }

    function eliminar()
    {
        $eliminacion = mysqli_query($this->_conexion, "DELETE FROM Rol WHERE idRol = $this->_idRol");
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria) VALUES (NULL, 'Inserto Rol', null, null)");
        return $eliminacion;
    }

    function cantidadPaginas()
    {
        $cantidadBloques = mysqli_query($this->_conexion, "SELECT CEIL(COUNT(idRol) / $this->_paginacion) AS cantidad FROM Rol") or die(mysqli_error($this->_conexion));
        $unRegistro = mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }

    function listar($pagina){
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Rol ORDER BY idRol") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Rol ORDER BY idRol
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }
}
