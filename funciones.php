<?php


function datosDeNuevoUsuario($unArray)
{
  if ($unArray) {
    $usuario = [
      'nombre' => trim($unArray['nombre']),
      'email' => $unArray['email'],
      'password' => password_hash($unArray['password'], PASSWORD_DEFAULT)
    ];
    return $usuario;
  }
}

function crear_session_para_usu($usuario)
{
  $_SESSION['nombre'] = $usuario['nombre'];
  $_SESSION['email'] = $usuario['email'];
  $_SESSION['password'] = $usuario['password'];
}

function consulta_a_db($consulta)
{
  // Paso 1: Datos de conexion
  $usuario = 'root';
  $clave = '';
  $servidor = 'localhost';
  $baseDeDatos = 'tp_app_web';

  //Paso 2:  Creo la conexion
  $conexion = mysqli_connect($servidor, $usuario, $clave) or die('Error: NO SE HA PODIDO CONECTAR AL SERVIDOR');

  //Paso 3: Me conecto a la db
  $db = mysqli_select_db($conexion, $baseDeDatos) or die('Error : NO SE PUDO CONECTAR A LA BASE DE DATOS');

  //Paso 4:
  /*$consulta = "select * from user";*/

  //Paso 5: Ejecupatmos la consulta SQL
  $resultado = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion) . ' error NO SE PUDO REALIZR LA CONSULTA');

  $fila = mysqli_fetch_assoc($resultado);

  return $fila;
  //Paso 6: Cierro la conexion
  mysqli_close($conexion);
}


/*function registrarUsuario($user)
{
  // Paso 1: Datos de conexion
  $usuario = 'root';
  $clave = '';
  $servidor = 'localhost';
  $baseDeDatos = 'tp_app_web';

  //Paso 2:  Creo la conexion
  $conexion = mysqli_connect($servidor, $usuario, $clave) or die('Error: NO SE HA PODIDO CONECTAR AL SERVIDOR');

  //Paso 3: Me conecto a la db
  $db = mysqli_select_db($conexion, $baseDeDatos) or die('Error : NO SE PUDO CONECTAR A LA BASE DE DATOS');

  //Paso 4:

  $name =  $user['nombre'];
  $email = $user['email'];
  $password = $user['password'];
  $consulta = "INSERT INTO `users` (`nombre`, `email`, `password`) VALUES (?,?,?)";

  $stmt = $conexion->prepare($consulta);
  $stmt->bind_param($name, $email, $password);
  $stmt->execute();



  //Paso 5: Ejecupatmos la consulta SQl

  if (mysqli_query($conexion, $consulta)) {
    echo 'Registro insertado correctamente.';
  } else {
    echo 'Error:  NO SE PUDO REGISTRAR AL USUARIO ' . mysqli_error($conexion);
  }
  //Paso 6: Cierro la conexion
  mysqli_close($conexion);
}
*/ 

?>