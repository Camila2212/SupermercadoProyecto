<?php
class inicioSesion
{
    private $_conexion;
    private $_idIS;
    private $_usuario;
    private $_contraseña;
    private $_idRol;
    private $_paginacion = 10;

    function __construct($conexion, $usuario, $contraseña,$idRol)
    {
        $this->_conexion = $conexion;
        $this->_usuario = $usuario;
        $this->_contraseña = $contraseña;
        $this->_idRol=$idRol;
    }

    function verificarUsuario()
    {
        $verificacion = mysqli_query($this->_conexion, "SELECT idU, nombre, idRol FROM usuario 
        WHERE correo LIKE '$this->_usuario' and contraseña like '$this->_contraseña'");

        if (mysqli_num_rows($verificacion)) {
            $unUsuario = mysqli_fetch_array($verificacion);
            $this->_idIS = $unUsuario["idU"];
            $this->_usuario = $unUsuario["nombre"];
            $this->_idRol = $unUsuario["idRol"];
            return true;
        }
        return false;
    }


    function getIdIS()
    {
        return $this->_idIS;
    }

    function getUsuario()
    {
        return $this->_usuario;
    }
    
    function getContraseña()
    {
        return $this->_contraseña;
    }
    function getIdRol()
    {
        return $this->_idRol;
    }


    function insertar()
    {
        $insercion = mysqli_query($this->_conexion, "INSERT INTO
        inicioSesion (idIS,usuario,contraseña)
        VALUES(NULL,' $this->_usuario',' $this->_contraseña')");

        $auditoria = mysqli_query($this->_conexion, "INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto inicioSesion',null,null)");

        return $insercion;
    }

    function modificar()
    {
        $modificacion = mysqli_query($this->_conexion, "UPDATE inicioSesion SET
        usuario='$this->_usuario',contraseña='$this->_contraseña' WHERE idIS='$this->_idIS'");


        $auditoria = mysqli_query($this->_conexion, "INSERT INTO
        Auditoria(idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Modifico inicioSesion', NULL, NULL)");
        return $modificacion;
    }
    function eliminar()
    {
        $eliminacion = mysqli_query($this->_conexion, "DELETE FROM inicioSesion
        WHERE idIS=$this->_idIS");
        $auditoria = mysqli_query($this->_conexion, "INSERT INTO
        Auditoria (idAuditoria,detalleAuditoria,idUsuarioAuditoria,fechaAuditoria)
        VALUES (NULL,'Inserto inicioSesion', NULL, NULL)");
        return $eliminacion;
    }
    function cantidadPaginas()
    {
        $cantidadBloques = mysqli_query(
            $this->_conexion,
            "SELECT CEIL(COUNT (idIS)/$this->_paginacion) AS cantidad FROM inicioSesion"
        )
            or die(mysqli_error($this->_conexion));
        $unRegistro = mysqli_fetch_array($cantidadBloques);
        return $unRegistro['cantidad'];
    }
    function listar($pagina)
    {
        if ($pagina <= 0) {
            $listado = mysqli_query($this->_conexion, "SELECT * FROM inicioSesion ORDER BY idIS") or
                die(mysqli_error($this->_conexion));
            return $listado;
        } else {
            $paginacionMax = $pagina * $this->_paginacion;
            $paginacionMin = $paginacionMax - $this->_paginacion;
            $listado = mysqli_query($this->_conexion, "SELECT * FROM inicioSesion ORDER BY idIS
                LIMIT $paginacionMin, $paginacionMax") or die(mysqli_error($this->_conexion));
            return $listado;
        }
    }

}
