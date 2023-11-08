<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Proveedor</title>
</head>
<body>
    <header>
        <h1>Formulario Proveedor</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
                <th scope="col">Nombre Proveedor</th>
                <th scope="col">Apellido Proveedor</th>
                <th scope="col">Cedula Proveedor</th>
                <th scope="col">Telefono Proveedor</th>
                <th scope="col">Correo Proveedor</th>
                <th scope="col">Id Empresa</th>
                <th scope="col"></th>
            </tr>
    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/proveedor.php");
    $objetoProv = new proveedor($conexion,0,'nombre','apellido','cedula','telefono','correo','idEmp');
    $listaProv = $objetoProv->listar(0);
    while($unRegistro = mysqli_fetch_array($listaProv)){
        echo '<tr><form id="fModificarProveedor"'.$unRegistro["idProv"].' action="../controlador/ControladorProv.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdProv"     value="'.$unRegistro['idProv'].'">';
        echo '<input type="text"      name="fNombre"   value="'.$unRegistro['nombre'].'"></td>';
        echo '<td><input type="text"  name="fApellido"    value="'.$unRegistro['apellido'].'"></td>';
        echo '<td><input type="text"   name="fCedula"   value="'.$unRegistro['cedula'].'"></td>';
        echo '<td><input type="text"  name="fTelefono"    value="'.$unRegistro['telefono'].'"></td>';
        echo '<td><input type="email"   name="fCorreo"   value="'.$unRegistro['correo'].'"></td>';
        echo '<td><input type="text"   name="fIdEmp"   value="'.$unRegistro['idEmp'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
        echo '</form></tr>';   

    }
    ?>
        <tr><form id="fIngresarMucamas" action="../controlador/ControladorProv.php" method="post">
            <input type="hidden" name="fIdProv"   value="0">
            <td><input type="text" name="fNombre"></td>
            <td><input type="text" name="fApellido"></td>
            <td><input type="text" name="fCedula"></td>
             <td><input type="text" name="fTelefono"></td>
            <td><input type="email" name="fCorreo"></td>
            <td><input type="text" name="fIdEmp"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
    mysqli_free_result($listaProv);
    $objetoConexion->desconectar($conexion);
?>
</body>
</html>