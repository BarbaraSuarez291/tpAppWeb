<?php
    include("./includes/header.php");

    
?>



    <section>
      <div class="form-registro">
        <h2>Registrate</h2>
        <form action="index.php" method="POST">
          <div class="nameSignUp">

            <input id="NameSignUp"class="input" type="text" placeholder="Nombre" name="nombre">
            <p id="errName"></p>

            <input id="lastNameSignUp" class="input" type="text" placeholder="apellido" name="apellido">
            <p id="errLastName"></p>

          </div>
          
            <input id="emailSignUp" class="input" type="email" placeholder="email" name="email">
            <p id="errEmail"></p>

          <div class="nameSignUp">

            <input id="passwordSignUp" class="input" type="password" placeholder="password" name="password">
            <p id="errPassword"></p>

            <input id="passwordConfirmSignUp" class="input" type="password" placeholder=" confirme password" name="passwordConfirm">
            <p id="errPasswordConfirm"></p>

          </div>
          

          <label for="radio" class="d-block fontz-15 text-center">¿Eres Encargado o Empleado?</label>
          <div class="d-flex section-radio">
            <div class="radio">
              <p>Encargado</p>
              <input type="radio" name="radio">
            </div>
            <div class="radio">
              <p>Empleado</p>
              <input type="radio" name="radio">
            </div>
          </div>      

          <div class="botones-link fontz-15">
            <a href="login.php">Ya tengo cuenta</a>
            <button class="activa-link" name="signup">Registrarse</button>
          </div>

        </form>
          
      </div>
    </section>

    <?php include("./includes/footer.php");?>