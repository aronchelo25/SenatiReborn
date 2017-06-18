<?php


		$conexion = new mysqli("localhost", "root","", "reborn");
		if ($conexion -> connect_errno) {
			die( "Fallo la conexión a la base de datos: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $conexion -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitosa";
?>