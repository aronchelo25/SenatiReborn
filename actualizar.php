<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['codigo']) {
	header("Location:index.php");
}
?>		
  <head>
    <meta charset="utf-8">
    <title>**SENATI REBORN**</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/menustilos.css">

  </head>
<body>
<?php require("include/menup.php"); ?>

	<div>
		<div>
		<h2> Actualizaci&oacute;n de Datos</h2>	
		<div>
		<hr>
		 <h4>Mis Alumnos</h4>
		<div>
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM alumno WHERE id=$id";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
		    	$apellido1=$row[2];
		    	$apellido2=$row[3];
		    	$correo=$row[4];
		    	$codigo=$row[5];
		    	$clave=$row[6];
		    }



		?>
<div><center>
		<form action="ejecutaactualizar.php" method="post">
				<img src=""><br>
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Nombre<br> <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
				Apellido paterno<br> <input type="text" name="apellido1" value="<?php echo $apellido1?>"><br>
				Apellido materno<br> <input type="text" name="apellido2" value="<?php echo $apellido2?>"><br>
				Correo<br> <input type="text" name="correo" value="<?php echo $correo?>"><br>
				Codigo ID<br> <input type="text" name="codigo" value="<?php echo $codigo?>"><br>
				Contraseña<br> <input type="password" name="clave" value="<?php echo $clave?>"><br>

				<br><input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
</center></div>
				  
		
		
		<div>
		
		</div>	
		</div>	
		<br/>
		</div>

</div>

	</div>
</div>

</div>
<?php require("include/footer.php"); ?>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


