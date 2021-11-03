<?php

include("./includes/header.php");
include('modif_cant_sql.php');
if (isset($_GET['id'])) {
    $id =  $_GET['id'];
    $query = "SELECT * FROM `products` WHERE id=$id";
    $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
}
$error = false;

if (isset($_POST['suma'])) {
    $suma = $_POST['suma'];

    $cantS = $_POST['s'];
    $cantM = $_POST['m'];
    $cantL = $_POST['l'];

    while ($row = mysqli_fetch_array($resultado)) {
        $resultS = $row['cantidad_talle_s'];
        $resultM = $row['cantidad_talle_m'];
        $resultL = $row['cantidad_talle_l'];
    }
    $resultS = $resultS + $cantS;
    $resultM = $resultM + $cantM;
    $resultL = $resultL + $cantL;


    update($resultS, $resultM, $resultL, $id, $conexion);
}


if (isset($_POST['resta'])) {
    $resta = $_POST['resta'];

    $cantS = $_POST['s'];
    $cantM = $_POST['m'];
    $cantL = $_POST['l'];

    while ($row = mysqli_fetch_array($resultado)) {
        $resultS = $row['cantidad_talle_s'];
        $resultM = $row['cantidad_talle_m'];
        $resultL = $row['cantidad_talle_l'];
    }


    if ($resultS >= $cantS) {
        $resultS = $resultS - $cantS;
    } else if ($cantS > $resultS) {
        $message = "Error: verifique las unidades a restar. No puede quedar stock negativo.";
        $error = true;
    }
    if ($resultM >= $cantM) {
        $resultM = $resultM - $cantM;
    } else {
        $message = "Error: verifique las unidades a restar. No puede quedar stock negativo.";
        $error = true;
    }
    if ($resultL >= $cantL) {
        $resultL = $resultL - $cantL;
    } else {
        $message = "Error: verifique las unidades a restar. No puede quedar stock negativo.";
        $error = true;
    }
    if ($error == false) {
        update($resultS, $resultM, $resultL, $id, $conexion);
    }
}






?>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8 container fluid" style="padding-top:30px;">


        <h2>Modificar Unidades</h2>
        <table class="table table-hover table-bordered ">

            <thead>
                <tr>

                    <td>
                        <h3> Unidades talle S </h3>
                    </td>
                    <td>
                        <h3> Unidades talle M </h3>
                    </td>
                    <td>
                        <h3> Unidades talle L </h3>
                    </td>
                    <td>

                    </td>
                    <td>
                    </td>
                    <td>
                    </td>

                </tr>
            </thead>
            <tbody>
                <div class="container" style="margin-top:1.5rem;font-size:1.3rem;">
                    <?php if ($error == true) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?php echo $message; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                </div>
                <Form action="#" method="post">
                    <tr>
                        <td> <input type="text" name="s" value="0">
                        </td>
                        <td> <input type="text" name="m" value="0">
                        </td>
                        <td><input type="text" name="l" value="0">
                        </td>

                        <td> <button type="submit" name="suma" class="btn btn-warning">Agregar unidades</button></td>
                        <td><button type="submit" name="resta" class="btn btn-warning">Restar unidades</button></td>


                </Form>
                <td> <a href="ABM_productos.php" class="btn btn-secondary">Volver</a></td>

                </tr>
            </tbody>
        </table>

    </div>
    <div class="col-2"></div>
</div>