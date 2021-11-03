<?php
include("./includes/db.php");
$producto = $_POST['nombreProd'];
$codigo = $_POST['codigo'];
$precio = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];


if (!filter_var($producto, FILTER_DEFAULT) === false && !filter_var($codigo, FILTER_DEFAULT) === false && !filter_var($precio, FILTER_VALIDATE_FLOAT === false) && !filter_var($description, FILTER_DEFAULT === false) && !filter_var($category, FILTER_DEFAULT === false)) {
  $consulta = "INSERT INTO `products` (`id`, `name`, `product_code`, `description`, `price`, `id_category`,  `cantidad_talle_s`, `cantidad_talle_m`, `cantidad_talle_l`,`cantidad_total`) VALUES (NULL, '$producto', '$codigo', '$description', '$precio', '$category', '0', '0','0','0');";



  if (mysqli_query($conexion, $consulta)) {
    echo 'Registro insertado correctamente.';
    header("location: ABM_productos.php");
  } else {
    echo 'Error ' . mysqli_error($conexion);
  }
  //Cierro la conexion
  mysqli_close($conexion);
} else {
  $message = 'Error ';
  header("Location:agregarProducto.php?messageError");
}



?>
