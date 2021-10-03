<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>

  <nav class="navegador-header h-icons">
    <div id="icon" >
      <i class="fas fa-bars"></i>
    </div>
    <div>
      <i id="icon-user-responsive" class="fas fa-user"></i>
    </div>

    <ul id="ul-lista" class="lista show">
      <li><a class="activa" href="index.php">Inicio</a></li>
      <?php if (!isset($_SESSION["nombre"])) : ?>
        <li id="icon-user"><i class="fas fa-user"></i></li>
        <!-- <li><a href="login.php">Ingresar</a></li>
        <li><a href="registro.php">Registrarse</a></li> -->
        
      <?php endif; ?>
      <?php if (isset($_SESSION["nombre"])) : ?>

        <li><a href="productos.php">Productos</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Proveedores</a></li>
    </ul>

  <?php endif; ?>
  </nav>



  <nav class="navegador-footer">
    <ul>
      <li><a class="activa" href="index.php">Inicio</a></li>
      <?php if (!isset($_SESSION["nombre"])) : ?>
        <li><a href="login.php">Ingresar</a></li>
        <li><a href="registro.php">Registrarse</a></li>
      <?php endif; ?>
      <?php if (isset($_SESSION["nombre"])) : ?>

        <li><a href="productos.php">Productos</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Proveedores</a></li>
      <?php endif; ?>
    </ul>

  </nav>
  <script src="./js/nav.js"></script>
  

</body>

</html>