<?php
    include("./includes/header.php");
?>



    <section>
      <div class="form-registro">
        <h2>Registrate</h2>
        <form action="index.php">
          <div class="nameSignUp">
            <input class="input" type="text" placeholder="Nombre">
            <input class="input" type="text" placeholder="apellido">
          </div>
          
          <input class="input" type="email" placeholder="email">

          <div class="nameSignUp">
            <input class="input" type="password" placeholder="password">

            <input class="input" type="password" placeholder=" confirme password">
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
            <button class="activa-link">Registrarse</button>
          </div>

        </form>
          
      </div>
    </section>

    <?php include("./includes/footer.php");?>