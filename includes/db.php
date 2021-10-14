<?php
  // Paso 1: Datos de conexion
  $usuario = 'root';
  $clave = '';
  $servidor = 'localhost';
  $baseDeDatos = 'company_crud';

   //Paso 2:  Creo la conexion
   $conexion = mysqli_connect($servidor, $usuario, $clave) or die('Error: NO SE HA PODIDO CONECTAR AL SERVIDOR');

   //Paso 3: Me conecto a la db
   $db = mysqli_select_db($conexion, $baseDeDatos) or die('Error : NO SE PUDO CONECTAR A LA BASE DE DATOS');

?>