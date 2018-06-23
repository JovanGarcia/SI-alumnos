<?php 
//se obtiene el numero y se postean los registros
	include_once 'bdalumnos.php';
	$Numero= $_GET['Numero'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$matricula = $_POST['matricula'];
	$carrera = $_POST['carrera'];
	$grupo = $_POST['grupo'];
	$correo = $_POST['correo'];
	$nacionalidad = $_POST['nacionalidad'];
	$telefono = $_POST['telefono'];

//mediante una consulta con UPDATE se actualizan los registros de una fila, en donde el numero sea el numero del alumno seleccionado
	$sentencia = $base_de_datos -> prepare("UPDATE alumnos SET nombre = ?,apellidos = ?,matricula = ? ,carrera = ?,grupo = ? ,correo = ? ,nacionalidad = ? ,telefono = ? WHERE Numero = ?");
	$resultado = $sentencia -> execute([$nombre,$apellidos,$matricula,$carrera,$grupo,$correo,$nacionalidad,$telefono,$Numero]);

	if ($resultado) {
		//se realizaron correctamente los cambios
		header('Location: Tabla.php');
	}else {
		# Error
		echo "<p>Error</p>";
	}

 ?>