<?php
session_start();
include_once('funciones.php');

if ($_POST != null) {
  $usuario = datosDeNuevoUsuario($_POST);
  crear_session_para_usu($usuario);
  /*$PRU=registrarUsuario($_POST);*/
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  require('plantilla.php');
  ?>
  <title>Inicio</title>
</head>

<body>

  </div>

      <section class="index-userSection">
      <h1 class="title-index">Welcome!</h1>
      <?php if (isset($_SESSION["nombre"])) : ?>
      <div class="img-user">
          <img id="img-user" src="./img/user.png" alt="">
          <ul id="lista-userIndex" class="lista-user show-user">
            <li class="activa"> <a href="usuario.php"><?php echo $_SESSION['nombre'] ?></a></li>
            <li>Configuraciones</li>
            <li><a href="logout.php">Cerrar sesion</a></li>
          </ul>
        </div>
        <?php endif; ?>
      </section>
      <div class="barra-media"></div>
      <section class="contenedor seccion-cartas">
        <div class="cartas-index">
            <img src="./img/empleados.jpg" alt="">
            <h3>Empleados</h3>
            <p>12</p>
        </div>

        <div class="cartas-index">
            <img src="./img/proveedores.jpg" alt="">
            <h3>Proveedores</h3>
            <p>6</p>
        </div>

        <div class="cartas-index">
            <img src="./img/encargados2.jpg" alt="">
            <h3>Encargados</h3>
            <p>2</p>
        </div>

      </section>

<script src="./js/index.js"></script>
</body>

</html>