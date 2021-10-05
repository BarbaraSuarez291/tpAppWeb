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
    <section>
      <div class="form-registro">
        <h2>Registrate</h2>
        <form action="index.php">
          <div class="nameSignUp">
            <input class="input" type="text" placeholder="Nombre">
            <input class="input" type="text" placeholder="apellido">
          </div>
          
          <input class="input" type="email" placeholder="email">
          
          <input class="input" type="password" placeholder="password">

          <input class="input" type="password" placeholder=" confirme password">
      
    

        </form>
          <div class="botones-link">
            <a href="#">Ya tengo cuenta</a>
            <a class="activa-link" href="#">Registrarse</a>
          </div>
      </div>
    </section>
</body>

</html>