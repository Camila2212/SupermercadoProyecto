<?php
session_start();
if (isset($_SESSION['id'])) {
    echo "Hay algo";
   
}else{
    echo "Aún nada";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../Controlador/controladorLogin.php" method="post">

        <h2>Ingrese al sistema</h2>
        <input name="fEmail" type="email" maxlength="60" placeholder="nombre@sucorreo.co" required autofocus>
        <input name="fClave" type="password" placeholder="Password" required>

        <button name="fEnviar" type="submit" value="Ingresar">Ingresar</button>
    </form>
    <?php
    @$mensaje  = $_GET['mensaje'];
    if (isset ($mensaje)) {
        if ($mensaje=='incorrecto') {
           echo'<div class="alert alert-danger" role="alert"<Usuario o Clave incorrecto </div>';
        }
    }
?>
</body>
</html>