<!doctype html>
<html lang="en">
  <head>
  <?php include("./includes/header.php") ?>

    <title>Productos</title>
  </head>
  <body> 
   <div class= "row">
<div class="col-3"></div>>
<div class="col-6">
<div style="padding: 30px;">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" role="listbox">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height:50vh">
      <img src="img/rop_dep3.jpg" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item" style="height: 50vh">
      <img src="img/rop_dep2.jpeg" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item" style="height:50vh">
      <img src="img/rop_dep.jpg" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</div>
<div class="col-3"></div>


   </div>

   <div class= "row">
<div class="col-5"></div>
<div class="col-2 text-center">

<button type="button" class="btn btn-secondary" style="height:4rem; "><a href="ABM_productos.php" style="color:aliceblue; padding:.4rem; font-size:1.5rem;">Actualizacion de productos</a></button>
</div>
<div class="col-5"></div>


   </div>
<?php include("./includes/footer.php");?>
  </body>
</html>