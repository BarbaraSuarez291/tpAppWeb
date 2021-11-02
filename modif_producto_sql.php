<?php
//FUNCION QUE MODIFICA LAS PROPIEDADES DE UN PRODUCTO
function updateProducto($nombre, $codigo, $descripcion, $precio, $id, $conexion){
    $consulta =  "UPDATE `products` SET `name`='$nombre', `product_code`='$codigo',`description`='$descripcion', `price`='$precio' WHERE id='$id' ";
    $resultado =mysqli_query($conexion, $consulta)  or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
    mysqli_close($conexion);
    header('Location: ABM_productos.php');

}



?>