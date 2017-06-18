<?php
	session_start();
	if (@!$_SESSION['codigo']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<?php

	$id = $_SESSION['id'];
	$foto = $_FILES['foto']['tmp_name'];
	$clave = $_POST['clave'];
	$correo = $_POST['correo'];


	require("connect_db.php");
	$sentencia="UPDATE alumno  SET correo='$correo',clave='$clave',foto='$foto' where id='$id'";
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='validar.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>