<?php

include("./includes/db.php");
//CON $_SESSION['email'] se puede traer los datos  actuales del usuario si es que hacen falta
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email =  $_POST['email'];
$rol = $_POST['rol'];
$clave = $_POST['clave'];

//Consulta si ya existe cada informacion.
$consulta = "select * FROM users where 'nombre'= '$nombre'";
$resultado = mysqli_query($conexion, $consulta);

if ($consulta == 1) {
    echo "Ya te registrastes con este nombre, ingrese otro por favor";
} else {
    echo "Nombre cambiado correctamente.";
}

$consulta2 = "select * FROM users where apellido= '$apellido'";
$resultado2 = mysqli_query($conexion, $consulta2);

if ($consulta2 == 1) {
    echo "Ya te registrastes con este apellido, ingrese otro por favor.";
} else {
    echo "Apellido cambiado correctamente.";
}

$consulta3 = "select * FROM users where email='$email'";
$resultado = mysqli_query($conexion, $consulta3);

if ($consulta3 == 1) {
    echo "Ya te registrastes con este email, ingrese otro por favor";
} else {
    echo "Email cambiado correctamente.";
}

$consulta3 = "select * FROM users where email='$email'";
$resultado = mysqli_query($conexion, $consulta3);

if ($consulta3 == 1) {
    echo "Ya te registrastes con este email, ingrese otro por favor";
} else {
    echo "Email cambiado correctamente.";
}
$consulta4 = "select * FROM users where rol='$rol'";
$resultado = mysqli_query($conexion, $consulta4);

if ($consulta4) {
    echo "Estas ingresando el mismo rol que tenias, ingrese otro por favor";
} else {
    echo "Rol cambiado correctamente.";
}

$consulta5 = "select * FROM users where password='$clave'";
$resultado = mysqli_query($conexion, $consulta5);

if ($consulta5 == 1) {
    echo "Ya te registrastes con este email, ingrese otro por favor";
} else {
    echo "Email cambiado correctamente.";
}

//Cambio de datos.
//FALTA EL WHERE
$cambio = "update users set nombre='$nombre', apellido='$apellido', email='$email', rol='$rol', password='$clave'";
$resultado_cambio = mysqli_query($conexion, $cambio);

if ($resultado_cambio = true) {
    echo "Cambios realizados exitosamente.";
}
