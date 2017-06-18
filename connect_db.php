<?php


		$conexion = new mysqli("localhost:8889", "root","root", "reborn");
        $conexion->set_charset("utf8");
		if ($conexion -> connect_errno) {
			die( "Fallo la conexión a la base de datos: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $conexion -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitosa";
?>