<?php
session_start();
include_once('funciones.php');

$hayUsu = $_POST; // si la variable $hayUsu es distinta de null es porq viene redireccionada desde el registro y es necesario
// agregar el nuevo usuario y crearle la session
if ($hayUsu != null) {
  $usuario = datosDeNuevoUsuario($_POST);
  crear_session_para_usu($usuario);
  var_dump($_POST);
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
  <!--<h1>Bienvenido ($usuario)<?php echo $usuario['nombre'] ?></h1>
<h1>Bienvenido ($_POST) <?php echo $_POST['nombre'] ?></h1>-->
  <h1>Bienvenido <?php echo $_SESSION['nombre'] ?></h1>



  <div class="contenedor">


    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6  text-center">
        <div class="row row-cols-2">
          <div class="col">
            <div class="card border-ligth mb-3" style="max-width: 18rem;">

              <a href="productos.php" class="tarjetaInicio">
                <div class="card-body">
                  <img src="./img/camiseta-de-manga-corta (2).png" class="card-img-top" id="imgCard" alt="...">
                  <div class="card-title tituloCard">Productos</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="card border-light mb-3" style="max-width: 18rem;">
              <a href="productos.php">
                <div class="card-body">
                  <img src="./img/ropaFoto.png" class="card-img-top" alt="...">
                  <div class="card-title">Productos</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="card border-light mb-3" style="max-width: 18rem;">
              <a href="productos.php">
                <div class="card-body">
                  <img src="./img/ropaFoto.png" class="card-img-top" alt="...">
                  <div class="card-title">Productos</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="card border-light mb-3" style="max-width: 18rem;">
              <a href="productos.php">
                <div class="card-body">
                  <img src="./img/ropaFoto.png" class="card-img-top" alt="...">
                  <div class="card-title">Productos</div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-3"></div>
    </div>




  </div>


</body>

</html>