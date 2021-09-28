<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./plantilla.php ');
  ?>
  <title>Registro</title>
</head>
<?php



?>

<body>
  <div class="row registro">
    <div class="col-4"></div>
    <div class="col-4">
      <form action="index.php" method="post" class="form-horizontal formRegistro">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="123123">
        </div>
        <div><input class="btn btn-outline-success" type="submit" value="Registrarse"></div>
      </form>
    </div>
    <div class="col-4"></div>
  </div>
</body>

</html>