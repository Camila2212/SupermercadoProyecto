<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Empresa</title>
</head>
<body>
    <header>
        <h1>Formulario Empresa</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
                <th scope="col">Nombre Empresa</th>
                <th scope="col">Nit Empresa</th>
                <th scope="col">Telefono Empresa</th>
                <th scope="col">Correo Empresa</th>
                <th scope="col">Direccion Empresa</th>
                <th scope="col"></th>
            </tr>
    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/empresa.php");
    $objetoEmp = new Empresa($conexion,0,'nombre','nit','telefono','correo','direccion');
    $listaEmp = $objetoEmp->listar(0);
    while($unRegistro = mysqli_fetch_array($listaEmp)){
        echo '<tr><form id="fModificarEmpresa"'.$unRegistro["idEmp"].' action="../controlador/ControladorEmp.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdEmp"     value="'.$unRegistro['idEmp'].'">';
        echo '<input type="text"      name="fNombre"   value="'.$unRegistro['nombre'].'"></td>';
        echo '<td><input type="text"  name="fNit"    value="'.$unRegistro['nit'].'"></td>';
        echo '<td><input type="text"   name="fTelefono"   value="'.$unRegistro['telefono'].'"></td>';
        echo '<td><input type="email"  name="fCorreo"    value="'.$unRegistro['correo'].'"></td>';
        echo '<td><input type="text"   name="fDireccion"   value="'.$unRegistro['direccion'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
        echo '</form></tr>';   

    }
    ?>
        <tr><form id="fIngresarClientes" action="../controlador/ControladorEmp.php" method="post">
            <input type="hidden" name="fIdEmp"   value="0">
            <td><input type="text" name="fNombre"></td>
            <td><input type="text" name="fNit"></td>
             <td><input type="text" name="fTelefono"></td>
            <td><input type="email" name="fCorreo"></td>
            <td><input type="text" name="fDireccion"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
    mysqli_free_result($listaEmp);
    $objetoConexion->desconectar($conexion);
?>
</body>
</html>