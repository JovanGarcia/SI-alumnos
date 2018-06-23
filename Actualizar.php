<!DOCTYPE html>
<html>
<head>

	<title>Alumnos</title>\
	<?php 
	//conexion y se obtiene el numero del alumno
		include_once 'bdalumnos.php';
		$Numero = $_GET['Numero'];
		$sentencia = "SELECT * FROM alumnos WHERE Numero =".$Numero;?>
</head>
<body>
	<!--metodo nuevos datos para obtener y actualizar los registros-->
	<form method="post" action="<?php echo 'NuevosDatos.php?Numero='.$Numero;?>">
	<!--formularios para actualizar la informacion del alumno seleccionado-->
	<?php
		foreach ($base_de_datos ->query($sentencia) as $row ) {?>
			<!--formularios con la informacion del numero de alumno seleccionado-->
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $row['nombre'];?>"><br>
			<label>Apellidos:</label>
			<input type="text" name="apellidos" value="<?php echo $row['apellidos'];?>"><br>
			<label>Matricula:</label>
			<input type="number" name="matricula" value="<?php echo $row['matricula'];?>"><br>
			<label>Carrera:</label>
			<input type="text" name="carrera" value="<?php echo $row['carrera'];?>"><br>
			<label>Grupo:</label>
			<input type="text" name="grupo" value="<?php echo $row['grupo'];?>"><br>
			<label>Correo:</label>
			<input type="text" name="correo" value="<?php echo $row['correo'];?>"><br>
			<label>Nacionalidad</label>
			<input type="text" name="nacionalidad" value="<?php echo $row['nacionalidad'];?>"><br>
			<label>Telefono:</label>
			<input type="text" name="telefono" value="<?php echo $row['telefono'];?>"><br>
			<!--boton de actualizar-->
			<button type="submit" value="Actualizar">Actualizar</button>
		</form>
	<?php		 
		}
 	?>
</body>
</html>