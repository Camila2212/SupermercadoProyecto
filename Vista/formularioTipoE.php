<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tipo Empleado</title>
</head>
<body>
    <header>
        <h1>Formulario Tipo Empleado</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
               
                <th scope="col">Area</th>
                <th scope="col">Descripcion</th>
                <th scope="col"></th>
            </tr>
    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/tipoE.php");
    $objetoTipoE = new tipoE($conexion,0 ,'area','descripcion');
    $listaTipoE = $objetoTipoE->listar(0);
    while($unRegistro = mysqli_fetch_array($listaTipoE)){  

        echo '<tr><form id="fModificarTipoE"'.$unRegistro["idTipoE"].' action="../controlador/controladorTipoE.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdTipoE"   value="'.$unRegistro['idTipoE'].'">';
        echo '<input type="text"   name="fArea"   value="'.$unRegistro['area'].'"></td>';
        echo '<td><input type="text"  name="fDescripcion"   value="'.$unRegistro['descripcion'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                 <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
         echo '</form></tr>';   
    }
    ?>
        <tr><form id="fIngresarTipoE" action="../controlador/controladorTipoE.php" method="post">
            <td><input type="hidden" name="fIdTipoE"   value="0">
                <input type="text" name="fArea"></td>
            <td><input type="text" name="fDescripcion"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
    mysqli_free_result($listaTipoE);
    $objetoConexion->desconectar($conexion);
?>
</body>
</html>