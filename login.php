<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('./plantilla.php ') ?>
    <title>Login</title>
</head>

<body>
    <?php
    $arrayDeUsuarios = consulta_a_db('select  * from user');
    var_dump($arrayDeUsuarios); echo "<br>";
  //  echo($arrayDeUsuarios['nombre']); echo "<br>";
    foreach ($arrayDeUsuarios as $i => $value){
        echo $i. ": ". $value. "   <br>";
    }
    ?>
    <div class="row login">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="index.php" method="post" class="form-horizontal formLogin">


                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="123123">
                </div>
                <div><input class="btn btn-outline-success" type="submit" value="Iniciar sesion"></div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>

</html>