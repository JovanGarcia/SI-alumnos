<?php 
	//funcion para eliminar un registro (fila) de la bd 
	//se hace conexion con la bd
	include_once 'bdalumnos.php';
	//se obtiene el numero o id del alumno
	$Numero = $_GET['Numero'];
	//por medio de una consulta se usa delete para borrar la fila en donde el numero sea el registro del alumno seleccionado
	$sentencia = $base_de_datos -> prepare("DELETE FROM alumnos WHERE Numero = ?");
	$resultado = $sentencia -> execute([$Numero]);
	//mensaje para mostrar si se elimino la fila
	if ($resultado) {
		# si se elimino correctamente
		header('Location: Tabla.php');
	}
 ?>