<nav class="navegador-footer">
  <ul>
    <li><a class="" href="index.php">Inicio</a></li>
    <?php if (!isset($_SESSION["nombre"])) : ?>
      <li><a href="login.php">Ingresar</a></li>
      <li><a href="registro.php">Registrarse</a></li>
    <?php endif; ?>
    <?php if (isset($_SESSION["nombre"])) : ?>
      <?php if ($_SESSION["rol"] == '1') : ?>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="#">Usuarios</a></li>

      <?php else : ?>
        <li><a href="productos.php">Productos</a></li>

  </ul>
<?php endif; ?>
<?php endif; ?>
</ul>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="./js/nav.js"></script>

<script src="./js/index.js"></script>
<script src="./js/form.js"></script>
</body>

</html>