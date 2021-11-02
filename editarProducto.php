<?php

include("./includes/header.php");
include('modif_producto_sql.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE id=$id";
    $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
}
$error = false;



if (isset($_POST['updatee'])) {
    $name='--';
    $codigo = '--';
    $description = '--'; 
    $price = '--'; 

     $name = $_POST['name'];
     $codigo = $_POST['codigo'];
     $description = $_POST['description'];
     $price = $_POST['price'];
     if (empty( $name) || empty($codigo) || empty($description) || empty($price)){

            $error = true;
            $message= "Alguno de los campos se encontraba vacio. Vuelva a intentarlo nuevamente.";
    } else {
        updateProducto($name, $codigo,$description, $price, $id, $conexion);
    }
    
}


?>
<div>
    <h2>Modificar datos de producto</h2>
    <div class="container" style="margin-top:1.5rem;font-size:1.3rem;">
        <?php if ($error == true) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $message; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
    </div>
    <table class="table table-dark table-hover table-bordered ">

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
                        <td> <input type="text"  name="name" value=" <?php echo  $fila['name'] ?>">
                        </td>
                        <td> <input type="text"  name="codigo" value=" <?php echo  $fila['product_code'] ?>">
                        </td>
                        <td><input type="text"  name="description" value=" <?php echo  $fila['description'] ?>">
                        </td>
                        <td> <input type="text"  name="price" value=" <?php echo $fila['price'] ?>">
                        </td>
                        <td>

                        <button type="submit" name="updatee" class="btn btn-primary">Modificar</button>
                        </td>
                        <td>

                            <a href="ABM_productos.php" class="btn btn-primary">Volver</a>
                        </td>

                        </td>


                    </tr>

                </Form>





        </tbody>
    </table>

</div>

</div>


<?php  } ?>
