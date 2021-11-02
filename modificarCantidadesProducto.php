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
<!--
<div>
    <table class="table table-dark table-hover table-bordered ">
        <thead>
            <tr>
                <td>
                    <h3> ID </h3>
                </td>
                <td>
                    <h3> Producto </h3>
                </td>
                <td>
                    <h3>Codigo </h3>
                </td>
                <td>
                    <h3>Descripcion </h3>
                </td>
                <td>
                    <h3> Precio</h3>
                </td>
                <td>
                    <h3>Cantidad Talle S</h3>
                </td>
                <td>
                    <h3>Cantidad Talle M</h3>
                </td>
                <td>
                    <h3>Cantidad Talle L</h3>
                </td>
                <td>
                    <h3>Stock total</h3>
                </td>

            </tr>
        </thead>
        <tbody>
            <?php

            while ($fila = mysqli_fetch_array($resultado)) { ?>
                <tr>
                    <td> <?php echo  $fila['id'] ?>
                    </td>
                    <td> <?php echo  $fila['name'] ?>
                    </td>
                    <td><?php echo $fila['product_code'] ?>
                    </td>
                    <td><?php echo $fila['description'] ?>
                    </td>
                    <td><?php echo $fila['price'] ?>
                    </td>
                    <td><?php echo $fila['cantidad_talle_s'] ?>
                    </td>

                    <td><?php echo $fila['cantidad_talle_m'] ?>
                    </td>

                    <td><?php echo $fila['cantidad_talle_l'] ?>
                    </td>

                    <td><?php echo $fila['cantidad_total'] ?>
                    </td>


                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>
-->

</div>

<div class="form-registro">
<h2>Modificar Unidades</h2>
<div class="container" style="margin-top:1.5rem;font-size:1.3rem;">
    <?php if ($error == true) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo $message; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
</div>
<Form action="#" method="post">
    <div class="mb-3">
        <label for="s">Unidades talle S</label>
        <input type="text" id="s" name="s" value="0">
    </div>
    <div class="mb-3">
        <label for="m">Unidades talle M</label>
        <input type="text" id="m" name="m" value="0">
    </div>
    <div class="mb-3">
        <label for="l">Unidades talle L</label>
        <input type="text" id="l" name="l" value="0">
    </div>

    <div><button type="submit" name="suma" class="btn btn-primary">Agregar unidades</button></div>
  
    <div><button type="submit" name="resta" class="btn btn-primary">Restar unidades</button></div>

</Form>
     <a href="ABM_productos.php" class="btn btn-primary">Volver</a>

</div>