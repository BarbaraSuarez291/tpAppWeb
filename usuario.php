<!DOCTYPE html>
<html lang="en">
<head>
<?php include("./includes/header.php");?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
</head>
<body>
<form action="cambios_datos_usuario.php" method="post">
  <div class="form-registro">

    <h2> Cambio de datos personales</h2>
    <label><h3>Ingrese su nuevo nombre: </h3></label>
    <input type="text" id="nombre" name="nombre">

    <label><h3>Ingrese su nuevo apellido: </h3></label>
    <input type="text" id="apellido" name="apellido">

    <label><h3>Ingrese su nuevo email:</h3></label>
    <input type="text" id="email" name="email">

    <label><h3>Ingrese su nueva contraseña:</h3></label>
    <input type="password" id="clave" name="clave" minlength="8">
    <label><h5>*La contraseña debe tener minimo 8 caracteres</h5></label>
    <button type="submit" class="btn btn-primary btn-lg" id="enviar" name="enviar">Guardar Cambios </button>
  </div>
<?php include("./includes/footer.php")?>
</body>
</html>