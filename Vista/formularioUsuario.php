<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    




<div class="cont">

        <div class="medioC">
          <header>
            <h1 class="t">Usuarios</h1>

            <table class="mit" border="1">
              <tbody>
                <tr>
                  <th scope="col">Nombre Cliente</th>
                  <th scope="col">Apellido Cliente</th>
                  <th scope="col">Cedula Cliente</th>
                  <th scope="col">Telefono Cliente</th>
                  <th scope="col">Correo Cliente</th>
                  <th scope="col">Direccion Cliente</th>
                  <th scope="col">Id Rol</th>
                  <th scope="col">Contraseña</th>
                  <th scope="col"></th>
                </tr>

                <div class="formC">
                  <?php
                  include_once("../modelo/conexion.php");
                  $objetoConexion = new conexion();
                  $conexion = $objetoConexion->conectar();

                  include_once("../modelo/usuario.php");
                  $objetoU = new Usuario ($conexion, 0, 'nombre', 'apellido', 'cedula', 'telefono', 'correo','direccion','idRol','contraseña');
                  $listaU = $objetoU->listar(0);
                  while ($unRegistro = mysqli_fetch_array($listaU)) {
                    echo '<tr><form id="fModificarUsuario"' . $unRegistro["idU"] . ' action="../controlador/ControladorUsu.php"
                 method="post">';
                    echo '<td><input type="hidden" name="fIdU"     value="' . $unRegistro['idU'] . '">';
                    echo '<input type="text"      name="nombre"   value="' . $unRegistro['nombre'] . '"></td>';
                    echo '<td><input type="text"  name="apellido"    value="' . $unRegistro['apellido'] . '"></td>';
                    echo '<td><input type="text"   name="cedula"   value="' . $unRegistro['cedula'] . '"></td>';
                    echo '<td><input type="text"  name="correo"    value="' . $unRegistro['correo'] . '"></td>';
                    echo '<td><input type="email"   name="telefono"   value="' . $unRegistro['telefono'] . '"></td>';
                    echo '<td><input type="email"   name="direccion"   value="' . $unRegistro['direccion'] . '"></td>';
                    echo '<td><input type="email"   name="idRol"   value="' . $unRegistro['idRol'] . '"></td>';
                    echo '<td><input type="email"   name="contraseña"   value="' . $unRegistro['contraseña'] . '"></td>';
                    echo '<td><button type="submit"  name="fEnviar"  value="Modificar">Mod</button>
                <button type="submit"   name="fEnviar"  value="Eliminar">Eliminar</button></td>';
                    echo '</form></tr>';
                  }
                  ?>
              </tbody>
            </table>

</body>
</html>