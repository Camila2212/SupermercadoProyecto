<?php
class Empresa
{
    private $_conexion;
    private $_idEmp;
    private $_nombre;
    private $_nit;
    private $_telefono;
    private $_correo;
    private $_direccion;
    private $_paginacion = 10;

    function __construct($conexion, $idEmp, $nombre, $nit, $telefono, $correo, $direccion)
    {
        $this->_conexion = $conexion;
        $this->_idEmp = $idEmp;
        $this->_nombre = $nombre;
        $this->_nit = $nit;
        $this->_telefono = $telefono;
        $this->_correo = $correo;
        $this->_direccion = $direccion;
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
        $insercion = mysqli_query($this->_conexion, "INSERT INTO
        Clientes (idC,nombreC,apellidoC,cedulaC,telefonoC,correoC)
        VALUES(NULL,' $this->_nombreC','$this->_apellidoC','$this->_cedulaC','$this->_telefonoC','$this->_correoC')");

        $auditoria = mysqli_query($this->_conexion, "INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto Clientes',null,null)");
        return $insercion;
    }
    function modificar()
    {
        $modificacion = mysqli_query($this->_conexion, "UPDATE Clientes SET
        nombreC='$this->_nombreC',apellidoC='$this->_apellidoC',
        cedulaC='$this->_cedulaC',telefonoC='$this->_telefonoC',
        correoC='$this->_correoC'
        WHERE idC=$this->_idC");
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico Clientes', NULL, NULL)");
        return $modificacion;
    }
    function eliminar()
    {
        $eliminacion = mysqli_query($this->_conexion, "DELETE FROM Clientes
        WHERE idC=$this->_idC");
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto clientes',null,null)");
        return $eliminacion;
    }
    function cantidadPaginas()
    {
        $cantidadBloques = mysqli_query(
            $this->_conexion,
            "SELECT CEIL(COUNT (idC)/$this->_paginacion) AS cantidad FROM Clientes"
        )
            or die(mysqli_error($this->_conexion));
        $unRegistro = mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }

    function listar($pagina){
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Clientes ORDER BY idC") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM Clientes ORDER BY idC
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }
}
