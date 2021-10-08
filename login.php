
    <?php
//     $arrayDeUsuarios = consulta_a_db('select  * from user');
//     var_dump($arrayDeUsuarios); echo "<br>";
//   //  echo($arrayDeUsuarios['nombre']); echo "<br>";
//     foreach ($arrayDeUsuarios as $i => $value){
//         echo $i. ": ". $value. "   <br>";
//     }

    include("./includes/header.php");
    ?>
     <section>
    <div class="form-login">
        <h2>Iniciar Sesion</h2>
        <form action="index.php">
          
          
          <input class="input" type="email" placeholder="email">
          
          <input class="input" type="password" placeholder="password">

          <div class="botones-link login-btn">
            <a href="registro.php"> Crear una cuenta</a>
            <button class="activa-link ">Iniciar Sesion</button>
          </div>
        
        </form>
    </div>
          
    </section>

    <?php include("./includes/footer.php");?>