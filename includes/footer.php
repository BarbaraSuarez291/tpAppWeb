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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="./js/nav.js"></script>

    <script src="./js/index.js"></script>
</body>

</html>