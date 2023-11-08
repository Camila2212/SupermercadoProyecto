<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Administrador</title>
</head>
<body>
    <header>
        <h1>Formulario Administrador</h1>
    </header>
    <table border="1">
        <tbody>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col"></th>
            </tr>
    <?php
    include_once("../modelo/conexion.php");
    $objetoConexion = new conexion();
    $conexion = $objetoConexion->conectar();

    include_once("../modelo/administrador.php");
    $objetoAdmin = new Administrador($conexion,0 ,'nombre');
    $listaAdmin = $objetoAdmin->listar(0);
    while($unRegistro = mysqli_fetch_array($listaAdmin)){  

        echo '<tr><form id="fModificarAdmin"'.$unRegistro["idAdmin"].' action="../controlador/controladorAdmin.php"
        method="post">';
        echo '<td><input type="hidden" name="fIdAdmin"   value="'.$unRegistro['idAdmin'].'">';
        echo '<input type="text"   name="fNombre"   value="'.$unRegistro['nombre'].'"></td>';
        echo '<td><button type="submit" name="fEnviar"  value="Modificar">Mod</button>
                 <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
         echo '</form></tr>';   
    }
    ?>
        <tr><form id="fIngresarAdmin" action="../controlador/controladorAdmin.php" method="post">
            <td><input type="hidden" name="fIdAdmin"   value="0">
                <input type="text" name="fNombre"></td>
            <td><button type="submit" name="fEnviar" value="Ingresar">Ingresar</button>
                <button type="reset" name="fEnviar" value="Limpiar">Reset</button></td>   
        </form></tr>
        </tbody>
    </table>
<?php
    mysqli_free_result($listaAdmin);
    $objetoConexion->desconectar($conexion);
?>
</body>
</html>