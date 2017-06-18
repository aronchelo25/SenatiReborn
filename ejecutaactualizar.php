<?php


	extract($_POST);
	require("connect_db.php");
	$sentencia="UPDATE alumno SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2',correo='$correo', codigo='$codigo',clave='$clave' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error en la actualización de los datos";
		echo '<script>alert("NO SE PUEDO ACTUALIZAR LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>