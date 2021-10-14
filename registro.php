<?php
include("./includes/header.php");

$existeEmail = false;
if ($_POST != null) {

  $usuario = datosDeNuevoUsuario($_POST);
  $existeEmail = existeUsuario($usuario['email'], $conexion);
  if ($existeEmail == false) {
    crear_session_para($usuario);
    registrarUsuario($usuario, $conexion);
    header('Location:index.php');
  }
}


?>



<section>
  <div class="container" style="margin-top:1.5rem;font-size:1.3rem;">
    <?php if ($existeEmail == true) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>El email ingresado ya existe en la base de datos.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
  </div>
  <div class="form-registro">
    <h2>Registrate</h2>
    <form action="#" method="POST">
      <!-- NOMBRE -->
      <div class="nameSignUp">
        <input id="NameSignUp" class="input" type="text" placeholder="Nombre" name="nombre" value="<?= isset($_POST["nombre"]) ? $_POST["nombre"] : '' ?>">
        <p id="errName"></p>
        <?php if (isset($errores["nombre"])) : ?>
          <p id="errName" style="color:red; font-size:12px;"><?= $errores["nombre"] ?></p>
        <?php endif; ?>


        <!-- APELLIDO -->
        <input id="lastNameSignUp" class="input" type="text" placeholder="apellido" name="apellido" value="<?= isset($_POST["apellido"]) ? $_POST["apellido"] : '' ?>">
        <p id="errLastName"></p>
      </div>


      <!-- EMAIL -->
      <input id="emailSignUp" class="input" type="email" placeholder="email" name="email" value="<?= isset($_POST["email"]) ? $_POST["email"] : '' ?>">
      <p id="errEmail"></p>
      <div class="nameSignUp">


        <!-- CONTRASEÑA -->
        <input id="passwordSignUp" class="input" type="password" placeholder="password" name="password" value="<?= isset($_POST["password"]) ? $_POST["password"] : '' ?>">
        <p id="errPassword"></p>


        <!-- REPETIR CONTRASEÑA -->
        <input id="passwordConfirmSignUp" class="input" type="password" placeholder=" confirme password" name="passwordConfirm" value="<?= isset($_POST["passwordConfirm"]) ? $_POST["passwordConfirm"] : '' ?>">
        <p id="errPasswordConfirm"></p>

      </div>


      <!-- ROL -->
      <label for="radio" class="d-block fontz-15 text-center">¿Eres Encargado o Empleado?</label>
      <div class="d-flex section-radio">
        <div class="radio">
          <p>Encargado</p>
          <input type="radio" name="rol" value="1"> <!-- EL VALOR DEL BIT PARA ENCARGADO ES 1 Y PARA EMPLEADO ES 0 -->
        </div>
        <div class="radio">
          <p>Empleado</p>
          <input type="radio" name="rol" value="0">
        </div>
      </div>

      <div class="botones-link fontz-15">
        <a href="login.php">Ya tengo cuenta</a>
        <button class="activa-link" name="signup">Registrarse</button>
      </div>

    </form>

  </div>
</section>

<?php include("./includes/footer.php"); ?>