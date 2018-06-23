<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	th, td {
	    padding: 5px;
	    text-align: left;
	}
	</style>
</head>
<body>
	<!--Archivo php para visualizar la tabla con los registros de la base de datos que se hayan guardado-->
	<a href="index.php">Nuevo alumno</a><br><br>
	<table>
		<thead>
			<tr>
				<!--se crea la tabla (columnas)-->
				<th>#</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Matricula</th>
				<th>Carrera</th>
				<th>Grupo</th>
				<th>Correo</th>
				<th>Nacionalidad</th>
				<th>Telefono</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			//conexion con la base de datos
				include_once 'bdalumnos.php';
				$sentencia = "SELECT * FROM alumnos ORDER BY Numero ASC";
				foreach ($base_de_datos->query($sentencia) as $row) {
					//por medio de este ciclo se imprimiran las filas de la tabla con los registros existentes en la base de datos
					echo "<tr><td>".$row['Numero']."</td>";
					echo "<td>".$row['nombre']."</td>";
					echo "<td>".$row['apellidos']."</td>";
					echo "<td>".$row['matricula']."</td>";
					echo "<td>".$row['carrera']."</td>";
					echo "<td>".$row['grupo']."</td>";
					echo "<td>".$row['correo']."</td>";
					echo "<td>".$row['nacionalidad']."</td>";
					echo "<td>".$row['telefono']."</td>";
					//enlaces para actualizar y eliminar
					echo "<td><a href='actualizar.php?Numero=".$row['Numero']."'>Actualizar</a></td>";
					echo "<td><a href='Eliminar.php?Numero=".$row['Numero']."'>Eliminar</a></td></tr>";
				}
			 ?>
		</tbody>

	</table>
</body>
</html>