<?php 

include("./includes/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `products` WHERE `id` = $id";
    $result = mysqli_query($conexion, $query);
    header('Location: ABM_productos.php');
    if (!$result) {
        die("Query Failed.");
    }
}
?>