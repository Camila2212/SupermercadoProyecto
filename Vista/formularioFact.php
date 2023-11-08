<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Factura</title>
</head>
<body>
    <header>
        <h1>Formulario Factura</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
            <th scope="col">Descuento Factura</th>
                <th scope="col">Fecha Factura</th>
                <th scope="col">Total Factura</th>
                <th scope="col">Id Administrador</th>
                <th scope="col">Id Usuario</th>
                <th scope="col">Id Rol</th>
                <th scope="col"></th>
            </tr>


    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/factura.php");
    $objetoF = new Factura ($conexion,0,'dto','fecha','total','idAdmin','idU','idRol');
    $listaF = $objetoF->listar(0);
    while($unRegistro = mysqli_fetch_array($listaF)){
        echo '<tr><form id="fModificarFactura"'.$unRegistro["idF"].' action="../controlador/ControladorFact.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdF"     value="'.$unRegistro['idF'].'">';
        echo '<input type="text"      name="fDtoF"   value="'.$unRegistro['dtoF'].'"></td>';
        echo '<td><input type="date"  name="fFechaF"    value="'.$unRegistro['fechaF'].'"></td>';
        echo '<td><input type="number"  name="fTotalF"    value="'.$unRegistro['totalF'].'"></td>';
        echo '<td><input type="number"   name="fIdAdmin"   value="'.$unRegistro['idAdmin'].'"></td>';
        echo '<td><input type="number"   name="fIdU"   value="'.$unRegistro['idU'].'"></td>';
        echo '<td><input type="number"   name="fIdRol"   value="'.$unRegistro['idRol'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
        echo '</form></tr>';   

    }
    ?>
        <tr><form id="fIngresarFactura" action="../controlador/ControladorFact.php" method="post">
            <input type="hidden" name="fIdF"   value="0">
            <td><input type="number" name="fDtoF"></td>
            <td><input type="date" name="fFechaF"></td>
            <td><input type="number" name="fTotalFV"></td>
            <td><input type="number" name="fIdAdmin"></td>
            <td><input type="number" name="fIdU"></td>
            <td><input type="number" name="fIdRol"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
    mysqli_free_result($listaF);
    $objetoConexion->desconectar($conexion);
?>
</body>
</html>