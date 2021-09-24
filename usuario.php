<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    require('plantilla.php'); ?>
    <title>Usuario - <?php echo $_SESSION['nombre'] ?></title>
</head>

<body>

    <h1>Bienvenido <?php echo $_SESSION['nombre'] ?></h1>
</body>

</html>