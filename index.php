<?php


include("./includes/header.php");
?>


</div>

<section class="index-userSection">
  <h1 class="title-index">Welcome!</h1>
  <?php if (isset($_SESSION["nombre"])) : ?>
    <div class="img-user">
      <img id="img-user" src="./img/user.png" alt="">
      <ul id="lista-userIndex" class="lista-user show-userOrange">
        <li> <a id="nombreUserIndex" href="usuario.php"><?php echo strtoupper($_SESSION['nombre']) ?></a></li>
        <li><a href="usuario.php"> Configuraciones </a></li>
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

<?php include("./includes/footer.php"); ?>