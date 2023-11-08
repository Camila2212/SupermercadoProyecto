<?php
class Administrador
{
    private $_conexion;
    private $_idAdmin;
    private $_nombre;
    private $_paginacion = 10;

    function __construct($conexion, $idAdmin, $nombre)
    {
        $this->_conexion = $conexion;
        $this->_idAdmin = $idAdmin;
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
        $insercion = mysqli_query($this->_conexion, "INSERT INTO Administrador (idAdmin, nombre)
         VALUES (NULL, '$this->_nombre')");

        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria) VALUES (NULL, 'Inserto Administrador', null, null)");
        return $insercion;
    }

    function modificar()
    {
        $modificacion = mysqli_query($this->_conexion, "UPDATE Administrador SET nombre = '$this->_nombre' WHERE idAdmin = $this->_idAdmin");

        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria) VALUES (NULL, 'Modifico Administrador', NULL, NULL)");
        return $modificacion;
    }

    function eliminar()
    {
        $eliminacion = mysqli_query($this->_conexion, "DELETE FROM Administrador WHERE idAdmin = $this->_idAdmin");
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO Auditoria (idAuditoria, detalleAuditoria, idUsuarioAuditoria, fechaAuditoria) VALUES (NULL, 'Inserto Administrador', null, null)");
        return $eliminacion;
    }

    function cantidadPaginas()
    {
        $cantidadBloques = mysqli_query($this->_conexion, "SELECT CEIL(COUNT(idAdmin) / $this->_paginacion) AS cantidad FROM Administrador") or die(mysqli_error($this->_conexion));
        $unRegistro = mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }

    function listar($pagina){
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Administrador ORDER BY idAdmin") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Administrador ORDER BY idAdmin
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }
}
