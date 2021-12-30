<?php


include("./includes/header.php");
include("./includes/db.php");
//CONSULTA PARA TRAER CANTIDAD DE ENCARGADOS/ADMINISTRADORES
$consultaEncargados = "SELECT COUNT(id) AS encargados FROM `users` WHERE `rol`='1'";
$resultadoEnc = mysqli_query($conexion, $consultaEncargados) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');

//CONSULTA PARA TRAER CANTIDAD DE EMPLEADOS
$consultaEmpleados = "SELECT COUNT(id) AS empleados FROM `users` WHERE `rol`='0'";
$resultadoEmpl = mysqli_query($conexion, $consultaEmpleados) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');

//CONSULTA PARA TRAER CANTIDAD DE PROVEEDORES
$consultaProveedores = "SELECT COUNT(id_contacto) AS proveedores FROM `contactos` WHERE `tipo`='1'";
$resultadoProveedores = mysqli_query($conexion, $consultaProveedores) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
?>


</div>

<head><title>Inicio</title> </head>
<section class="index-userSection">
  <h1 class="title-index">Welcome!</h1>
  <?php if (isset($_SESSION["nombre"])) : ?>
    <div class="img-user">
      <img id="img-user" src="./img/user.png" alt="">
      <ul id="lista-userIndex" class="lista-user show-userOrange">
        <li> <a id="nombreUserIndex" href="usuario.php"><?php echo strtoupper($_SESSION['nombre']); ?></a></li>
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
    <?php while ($row = mysqli_fetch_assoc($resultadoEmpl)):?>
        <p><?php echo $row['empleados']?></p>
    <?php endwhile ?>
  </div>

  <div class="cartas-index">
    <img src="./img/proveedores.jpg" alt="">
    <h3>Proveedores</h3>
    <?php while ($row = mysqli_fetch_assoc($resultadoProveedores)):?>
        <p><?php echo $row['proveedores']?></p>
    <?php endwhile ?>
  </div>

  <div class="cartas-index">
    <img src="./img/encargados2.jpg" alt="">
    <h3>Encargados</h3>
    <?php while ($row = mysqli_fetch_assoc($resultadoEnc)):?>
        <p><?php echo $row['encargados']?></p>
    <?php endwhile ?>
  </div>

</section>

<?php include("./includes/footer.php"); ?>