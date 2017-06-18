<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['codigo']) {
	header("Location:index.php");
}
?>	
	<head>
		<title><?php echo $_SESSION['nombre']." ".$_SESSION['apellido1'];?></title>
		<meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menustilos.css">
	</head>
	<body data-offset="40" background="images/index2.jpg" style="background-attachment: fixed; background-size: 100% 100%;">
	<?php require("include/menu.php"); ?>
		<center>
		<div><img src="images/alias.jpg" style="border-radius: 100pt"></div>
		<form action="autoactualizar.php" method="POST" enctype="multipart/form-data">
				Foto<br> <input type="file" name="foto" value="foto.png" ><br>
				<br>
				Nombre<br> <input type="text" name="nombre" value="<?php echo  $_SESSION['nombre'] ;?>" readonly="readonly"><br>
				Apellido paterno<br> <input type="text" name="apellido1" value="<?php echo $_SESSION['apellido1'] ;?>" readonly="readonly"><br>
				Apellido materno<br> <input type="text" name="apellido2" value="<?php echo $_SESSION['apellido2'] ;?>" readonly="readonly"><br>
				Codigo ID<br> <input type="text" name="codigo" value="<?php echo $_SESSION['codigo'] ;?>" readonly="readonly"><br>
				Correo<br> <input type="text" name="correo" value="<?php echo $_SESSION['correo'];?>"><br>
				Clave<br> <input type="password" name="clave" value="<?php echo $_SESSION['clave'] ;?>"><br>
				

				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
			</center>
			<?php require("include/footer.php"); ?>
	</body>
	</html>