<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['codigo']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
?>
<html>
<head>
	<title>Calificar</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menustilos.css">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

</head>
<body data-offset="40" background="images/admin.jpeg" style="background-attachment: fixed; background-size: 100% 100%;">
<?php require("include/menup.php"); ?>
<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM alumno WHERE id=$id";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$nombre=$row[1];
		    	$apellido1=$row[2];
		    	$apellido2=$row[3];
		    	$codigo=$row[5];
		} 
		?>
		<div class="container"><form action="calificaralumno.php" method="POST">

		<h3>Calificar a <?php echo $apellido2.' '.$apellido1.' '.$nombre; ?></h3><input type="text" name="alumno" value="<?php echo $apellido2.' '.$apellido1.' '.$nombre; ?>" readonly="readonly"> con id <input type="text" name="codigo" value="<?php echo $codigo;?>" readonly="readonly">
		
<div class="row" style="text-align:center">
<?php
         include("connect_db.php");

         $query="SELECT*FROM cursos";
         $resultado =$conexion->query($query);
         while($row=$resultado->fetch_assoc()){
          ?>
			<div class="span2">
				<div class="well well-small">
					<h5><?php echo $row['nombre'];?></h5>
					<input type="number" name="semestre1">
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h5><?php echo $row['nombre2'];?></h5>
					<input type="number" name="semestre2">
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h5><?php echo $row['nombre3'];?></h5>
					<input type="number" name="semestre3">
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					.
					<h5><?php echo $row['nombre4'];?></h5>

					<input type="number" name="semestre4">
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					.
					<h5><?php echo $row['nombre5'];?></h5>
					<input type="number" name="semestre5">
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h5><?php echo $row['nombre6'];?></h5>
					<input type="number" name="semestre6">
				</div>
			</div>
			
<?php } ?>
<input type="submit" name="Enviar" class="btn btn-success btn-primary"> <input type="Reset" name="" class="btn btn-success btn-primary">
</form>
<?php require("include/footer.php"); ?>
</body>
</html>