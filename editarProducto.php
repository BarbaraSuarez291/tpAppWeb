<?php

include("./includes/header.php");
include('modif_producto_sql.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE id=$id";
    $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
}
$error = false;



if (isset($_POST['updatee'])&& !empty($_POST)) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price = trim($_POST['price']);
    if (empty( $name) ||  empty($description) || empty($price)){

            $error = true;
            $message= "Alguno de los campos se encontraba vacio. Verifique y vuelva a intentarlo nuevamente.";
    } else {
        updateProducto($name, $description, $price, $id, $conexion);
    }

}


?>
<div class="row">
<div class="col-2"></div>
<div class="col-8">
<div class="container fluid" Style="padding-top:30px">
    <h2>Modificar datos de producto</h2>
    <div class="container" style="margin-top:1.5rem;font-size:1.3rem;">
        <?php if ($error == true) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $message; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
    </div>
    <table class="table table-hover table-bordered ">

        <thead>
            <tr>

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
                </td>
                <td>
                </td>

            </tr>
        </thead>
        <tbody>
            <?php

            while ($fila = mysqli_fetch_array($resultado)) { ?>
                <Form action="#" method="post">
                    <tr>
                        <td> <input type="text"  name="name" value="<?php echo  $fila['name']?>">
                        </td>
                        <td> <p ><?php echo  $fila['product_code'] ?></p>

                        </td>
                        <td><input type="text"  name="description" value="<?php echo  $fila['description']?>">
                        </td>
                        <td> <input type="text"  name="price" value="<?php echo $fila['price'] ?>">
                        </td>
                        <td>

                        <button type="submit" name="updatee" class="btn btn-warning">Modificar</button>
                        </td>
                        <td>

                            <a href="ABM_productos.php" class="btn btn-secondary">Volver</a>
                        </td>

                        </td>


                    </tr>

                </Form>





        </tbody>
    </table>

</div>
            </div>
            <div class="col-2"></div>
            </div>


<?php  } ?>
