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
  <!--<h1>Bienvenido ($usuario)<?php //echo $usuario['nombre'] ?></h1>
<h1>Bienvenido ($_POST) <?php //echo $_POST['nombre'] ?></h1>-->
  <!-- <h1>Bienvenido <?php 
  // echo $_SESSION['nombre']
   ?></h1>



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
              <a class="tarjetaInicio" href="productos.php">
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




  </div> -->
    
      <section class="index-userSection">
      <h1 class="title-index">Welcome!</h1>
        <div class="img-user">
          <img id="img-user" src="./img/user.png" alt="">
          <ul id="lista-userIndex" class="lista-user show-user">
            <li class="activa">$nombre</li>
            <li>Configuraciones</li>
            <li>Cerrar sesion</li>
          </ul>
        </div>
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