<?php
//FUNCION QUE MODIFICA LAS CANTIDADES DE CADA TALLE Y DE EL TOTAL DE PROUCTOS
function update($s, $m, $l, $id, $conexion){
    $total = $s+ $m + $l;
    $consulta =  "UPDATE `products` SET `cantidad_talle_s`='$s', `cantidad_talle_m`='$m',`cantidad_talle_l`='$l', `cantidad_total`='$total' WHERE id='$id' ";
    mysqli_query($conexion, $consulta)  or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');
    mysqli_close($conexion);
    header('Location: ABM_productos.php');

}



?>