<?php include("./includes/header.php");


$consulta = "SELECT * FROM `products`";
$resultado = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');




?>
<div>
<div class="row">
<div class="col-2"> </div>
<div class="col-8">



<div class="container fluid" Style="padding-top:30px">  
    <table class="table  table-hover table-bordered">
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
                <td>

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



                    <div> <?php echo "  <td> <a  class='btn btn-warning' href='modificarCantidadesProducto.php?id=" . $fila['id'] . "'>Actualizar Stock</a>  </td>" ?>

                    <?php echo "  <td> <a  class='btn btn-warning' href='editarProducto.php?id=" . $fila['id'] . "'>Editar</a>  </td>" ?>

                        <?php echo "  <td> <a  class='btn btn-danger' href='eliminarProducto.php?id=" . $fila['id'] . "'>Eliminar</a>  </td>" ?>


                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>

</div>
<div class="col-2">   </div>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="col-5"></div>
    <div class="col-3"> <a href="agregarProducto.php" class="btn btn-success">Nuevo producto</a></div>
</div>

            </div>




<?php mysqli_close($conexion);
include("./includes/footer.php"); ?>