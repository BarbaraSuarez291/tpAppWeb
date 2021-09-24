<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <div class="container">
    <ul class="nav nav-tabs menu">
      <?php if (!isset($_SESSION["nombre"])) : ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registro.php">Registro</a>
        </li>
      <?php endif; ?>
      <?php if (isset($_SESSION["nombre"])) : ?>
        <li class="item-logo">
          <img id="logo"src="./img/tienda-de-ropa_chico.png" alt="logo">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contactos.php">Contactos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="usuario.php"><?php echo $_SESSION['nombre'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Cerrar Sesión</a>
        </li>

      <?php endif; ?>

    </ul>
  </div>
</body>

</html>