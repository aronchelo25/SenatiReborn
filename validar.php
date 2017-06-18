
<?php
session_start();
	require("connect_db.php");

	$username=$_POST['codigo'];
	$pass=$_POST['clave'];

 //Validar seciones completar mñn
	$sql2=mysqli_query($conexion,"SELECT * FROM profesor WHERE codigo='$username'");
	if($f1=mysqli_fetch_assoc($sql2)){
		if($pass==$f1['clave_prof']){
			$_SESSION['id'] = $f1['id'];
			$_SESSION['nombre'] = $f1['nombre'];
			$_SESSION['apellido1'] = $f1['apellido1'];
			$_SESSION['apellido2'] = $f1['apellido2'];
			$_SESSION['correo'] = $f1['correo'];
			$_SESSION['codigo'] = $f1['codigo'];
			$_SESSION['clave_prof'] = $f1['clave_prof'];
			$_SESSION['foto'] = $f1['foto'];
			$_SESSION['dato'] = $f1['dato'];
			$_SESSION['rol']=$f1['rol'];

			echo '<script>alert("BIENVENIDO PROFESOR")</script>';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($conexion,"SELECT * FROM alumno WHERE codigo='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['clave']){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre'] = $f['nombre'];
			$_SESSION['apellido1'] = $f['apellido1'];
			$_SESSION['apellido2'] = $f['apellido2'];
			$_SESSION['correo'] = $f['correo'];
			$_SESSION['codigo'] = $f['codigo'];
			$_SESSION['clave']=$f['clave'];
			$_SESSION['foto'] = $f['foto'];
			$_SESSION['dato'] = $f['dato'];
			$_SESSION['fec_nac']=$f['fec_nac'];
			$_SESSION['sexo']=$f['sexo'];
			$_SESSION['bloque'] = $f['bloque'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>