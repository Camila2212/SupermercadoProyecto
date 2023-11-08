<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Detalles</title>
</head>
<body>
    <header>
        <h1>Formulario Detalles</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
            <th scope="col">Nombre </th>
                <th scope="col">Cantidad </th>
                <th scope="col">Subtotal </th>
                <th scope="col">Id Producto</th>
                <th scope="col">Id Factura </th>
                <th scope="col"></th>
            </tr>
    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();


    include_once("../modelo/detalle.php");
    $objetoD = new Detalle($conexion,0,'nombre','cant','subtotal','idProd','idF');
    $listaD = $objetoD->listar(0);
    while($unRegistro = mysqli_fetch_array($listaD)){
        echo '<tr><form id="fModificarDetalle"'.$unRegistro["idD"].' action="../controlador/ControladorD.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdD"     value="'.$unRegistro['idD'].'">';
        echo '<input type="text"      name="fNombreD"   value="'.$unRegistro['nombreD'].'"></td>';
        echo '<td><input type="number"      name="fCantD"   value="'.$unRegistro['cantD'].'"></td>';
        echo '<td><input type="number"  name="fSubtotalD"    value="'.$unRegistro['subtotalD'].'"></td>';
        echo '<td><input type="number"   name="fIdProd"   value="'.$unRegistro['idProd'].'"></td>';
        echo '<td><input type="number"   name="fIdF"   value="'.$unRegistro['idF'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
        echo '</form></tr>';   

    }
    ?>
        <tr><form id="fIngresarDetalles" action="../controlador/ControladorD.php" method="post">
            <input type="hidden" name="fIdD"   value="0">
            <td><input type="text" name="fNombreD"></td>
            <td><input type="number" name="fCantD"></td>
            <td><input type="number" name="fSubtotalD"></td>
             <td><input type="number" name="fIdProd"></td>
             <td><input type="number" name="fIdF"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
   mysqli_free_result($listaD);
   $objetoConexion->desconectar($conexion);
?>

</body>
</html>