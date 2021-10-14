<?php


function datosDeNuevoUsuario($unArray)
{
  if ($unArray) {
    $usuario = [
      'nombre' => trim($unArray['nombre']),
      'apellido' => $unArray['apellido'],
      'email' => trim($unArray['email']),
      'password' => $unArray['password'], /*password_hash($unArray['password'], PASSWORD_DEFAULT)*/
      'rol' => $unArray['rol'],

    ];
    return $usuario;
  }
}


function crear_session_para($usuario)
{
  $_SESSION['nombre'] = $usuario['nombre'];
  $_SESSION['email'] = $usuario['email'];
  $_SESSION['rol'] = $usuario['rol'];
}


function consulta_a_db($consulta, $conexion)
{

  //Paso 5: Ejecupatmos la consulta SQL
  $resultado = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');

  $fila = mysqli_fetch_assoc($resultado);

  return $fila;
  //Paso 6: Cierro la conexion
  mysqli_close($conexion);
}


function registrarUsuario($user, $conexion)
{
  $rol =  $user['rol'];
  $nombre = $user['nombre'];
  $apellido = $user['apellido'];
  $email = $user['email'];
  $password = $user['password'];
  $consulta = "INSERT INTO `users` (`email`, `password`, `rol`, `nombre`,`apellido`) VALUES ('$email','$password', '$rol', '$nombre', '$apellido')";

  //Paso 5: Ejecupatmos la consulta SQl

  if (mysqli_query($conexion, $consulta)) {
    echo 'Registro insertado correctamente.';
    // header("location: index.php");
  } else {
    echo 'Error:  NO SE PUDO REGISTRAR AL USUARIO ' . mysqli_error($conexion);
  }
  //Paso 6: Cierro la conexion
  //mysqli_close($conexion);
}

function ingresoUsuario($email, $password, $conexion)
{

  $consulta = "SELECT * FROM `users` WHERE `email`='$email'";
  $usuario = mysqli_query($conexion, $consulta);
  $fila = mysqli_fetch_assoc($usuario);
  if ($fila) {
    if ($fila['password'] == $password) {
      return $fila;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

function existeUsuario($email, $conexion)
{

  $consulta = "SELECT * FROM `users` WHERE `email`='$email'";
  $usuario = mysqli_query($conexion, $consulta);
  $fila = mysqli_fetch_assoc($usuario);
  if ($fila) {
    return true;
  } else {
    return false;
  }
}

/*
  function validacionRegistro($array){

$errores = [];
if ($array) {
    if (isset($array["nombre"])) {
        if (empty($array["nombre"])) {
            $errores["nombre"] = "El nombre esta vacio<br>";
        } elseif (strlen($array["nombre"]) < 3) {
            $errores["nombre"] = "Nombre mas largo porfa!<br>";
        } else {
            $username = $array["nombre"];
        }
    }
    if (isset($array["apellido"])) {
        if (empty($array["apellido"])) {
            $errores["apellido"] = "El apellido esta vacio<br>";
        } elseif (strlen($array["apellido"]) < 3) {
            $errores["apellido"] = "Apellido mas largo porfa!<br>";
        } else {
            $userLastName = $array["apellido"];
        }
    }

    if (isset($array["email"])) {
        if (empty($array["email"])) {
            $errores["email"] = "El mail esta vacio<br>";
        } elseif (!filter_var($array["email"], FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "Email no valido!<br>";
        } else {
            $email = $array["email"];
        }
    }
    if (isset($array["password"])) {
        if (empty($array["password"]) || empty($array["passwordConfirm"])) {
            $errores["contra"] = "La contraseña esta vacia<br>";
        } elseif (strlen($array["password"]) < 6) {
            $errores["contra"] = "La contraseña es demasiado corta!<br>";
        } elseif ($array["password"] != $array["passwordConfirm"]) {
            $errores["contra"] = "La contraseña no es igual a la repeticion!";
        }
    }
}
return $errores;
  }

*/
