<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Venta</title>
</head>
<body>
    <header>
        <h1>Formulario Venta</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
                <th scope="col">Id Cliente</th>
                <th scope="col">Id Producto</th>
                <th scope="col">Cantidad Venta</th>
                <th scope="col">Descuento Venta</th>
                <th scope="col">Fecha Venta</th>
                <th scope="col">Total Venta</th>
                <th scope="col">Id Empleado</th>
                <th scope="col"></th>
            </tr>
    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/venta.php");
    $objetoVent = new venta ($conexion,0,'id','id','cant','dto','fecha','total','id');
    $listaVent = $objetoVent->listar(0);
    while($unRegistro = mysqli_fetch_array($listaVent)){
        echo '<tr><form id="fModificarVenta"'.$unRegistro["idVent"].' action="../controlador/ControladorVent.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdVent"     value="'.$unRegistro['idVent'].'">';
        echo '<input type="number"      name="fIdC"   value="'.$unRegistro['idC'].'"></td>';
        echo '<td><input type="number"  name="fIdProd"    value="'.$unRegistro['idProd'].'"></td>';
        echo '<td><input type="number"   name="fCantVent"   value="'.$unRegistro['cantVent'].'"></td>';
        echo '<td><input type="text"  name="fDtoVent"    value="'.$unRegistro['dtoVent'].'"></td>';
        echo '<td><input type="date"   name="fFechaVent"   value="'.$unRegistro['fechaVent'].'"></td>';
        echo '<td><input type="number"   name="fTotalVent"   value="'.$unRegistro['totalVent'].'"></td>';
        echo '<td><input type="number"   name="fIdE"   value="'.$unRegistro['idE'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
        echo '</form></tr>';   

    }
    ?>
        <tr><form id="fIngresarVenta" action="../controlador/ControladorVent.php" method="post">
            <input type="hidden" name="fIdVent"   value="0">
            <td><input type="number" name="fIdC"></td>
            <td><input type="number" name="fIdProd"></td>
            <td><input type="number" name="fCantVent"></td>
             <td><input type="text" name="fDtoVent"></td>
            <td><input type="date" name="fFechaVent"></td>
            <td><input type="number" name="fTotalVent"></td>
            <td><input type="number" name="fIdE"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
    mysqli_free_result($listaVent);
    $objetoConexion->desconectar($conexion);
?>
</body>
</html>