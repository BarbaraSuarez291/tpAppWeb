
<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>
  <!-- <div class="container">
    <ul class="nav nav-tabs menu">
      <?php //if (!isset($_SESSION["nombre"])) : ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registro.php">Registro</a>
        </li>
      <?php //endif; ?>
      <?php //if (isset($_SESSION["nombre"])) : ?>
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
          <a class="nav-link" href="usuario.php"><?php //echo $_SESSION['nombre'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Cerrar Sesión</a>
        </li>

      <?php //endif; ?>

    </ul>
  </div> -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->
  
<nav class="navegador-header">
      <div id="icon">
            <i class="fas fa-bars"></i>
      </div>

    <ul id="ul-lista" class= "lista show">
        <li><a class="activa" href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Proveedores</a></li>
       
    </ul>
   
      
    
</nav>



<nav class="navegador-footer">
      
    <ul>
        <li><a class="activa" href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Proveedores</a></li>
       
    </ul>

</nav>
<script src= "./js/nav.js"></script>


</body>

</html>