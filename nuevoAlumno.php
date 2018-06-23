<?php 

if (!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["matricula"])) exit();
 
	include_once "bdalumnos.php";
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["apellidos"];
   $matricula = $_POST["matricula"];
   $carrera = $_POST["carrera"];
   $grupo = $_POST["grupo"];
   $correo = $_POST["correo"];
   $nacionalidad = $_POST["nacionalidad"];
   $telefono = $_POST["telefono"];

   $sentencia = $base_de_datos->prepare("INSERT INTO alumnos(nombre, apellidos, matricula, carrera, grupo, correo, nacionalidad, telefono) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
   $resultado = $sentencia->execute([$nombre, $apellidos, $matricula, $carrera, $grupo, $correo, $nacionalidad, $telefono]);


   if ($resultado == TRUE) {
   	echo "<b>Se han añadido nuevos registros</b>";
   }else{
   	echo "Algo esta mal.";
   }
   ?>