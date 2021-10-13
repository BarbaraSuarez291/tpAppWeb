<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="./img/tienda-de-ropa.png" type="image/x-icon">
   
    
    
    <!--FONT AWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Archivos a incluir -->
    <?php
    require_once('funciones.php');

    ?>
    <link rel="stylesheet" href="css/style.css">

  
  <title>Inicio</title>
</head>

<body>

<nav class="navegador-header h-icons">
    <div id="icon" >
      <i class="fas fa-bars"></i>
    </div>
    <div>
      <?php 
        if(!isset($_SESSION["nombre"])) : ?>
      <i id="icon-user-responsive" class="fas fa-user"></i>
          
      <?php endif; ?>
    </div>

    <ul id="ul-lista" class="lista show">
      <li><a id="inicioNavbar" class="activa" href="index.php">Inicio</a></li>
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

          <ul id="ulNavLog" class="ul-ingreso show-user">
            <li><a href="login.php">Ingresar</a></li>
            <li><a href="registro.php"> Registrarse</a></li>
          </ul>
