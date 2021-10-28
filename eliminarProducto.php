<?php include("./includes/header.php");


$id = $_GET['id'];
$consulta = "SELECT * FROM `products`  WHERE `id`=$id";
$resultado = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
$result = consulta_a_db($consulta, $conexion);


?>

<div>
    <table  class="table table-dark table-hover table-bordered">
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
                    <h3>Unidades</h3>
                </td>
                <td></td>
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
                    <td><?php echo $fila['cantidad_total'] ?>
            </td>




                        <?php echo "  <td> <a  class='btn btn-danger' href='eliminar_producto_sql.php?id=" . $fila['id'] . "'>Eliminar</a>  </td>" ?>


                </tr>
              
            <?php } ?>

        </tbody>
    </table>
</div>


<a href="ABM_productos.php" class="btn btn-primary" >Volver</a>



<?php mysqli_close($conexion);
include("./includes/footer.php"); ?>