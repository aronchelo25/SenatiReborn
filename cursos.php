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
	<title>Mis cursos</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/menustilos.css">
</head>
<body data-offset="40" background="images/index2.jpg" style="background-attachment: fixed; background-size: 100% 100%;">
<?php require("include/menup.php"); ?>
<div class="span12">
		<div class="caption">
		<h4><?php echo $_SESSION['nombre']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2'] ?></h4>
		<table><tr><td><div class="well well-small">
		<hr class="soft"/>
	<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM cursos WHERE id='3'";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$semestre1=$row[1];
		    	$semestre2=$row[2];
		    	$semestre3=$row[3];
		    	$semestre4=$row[4];
		    	$semestre5=$row[5];
		    	$semestre6=$row[6];
		    }?>
		<form action="guardarcurso.php" method="POST">
			<div class="form-group">
      <label style="font-size: 14pt"><b>Curso del primer periodo:</b></label>
      <input type="text" name="curso1" class="form-control" placeholder="Nombre del curso" value="<?php echo $semestre1 ?>">
    </div><div class="form-group">
      <label style="font-size: 14pt"><b>Curso del segundo periodo:</b></label>
      <input type="text" name="curso2" class="form-control" placeholder="Nombre del curso" value="<?php echo $semestre2 ?>">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Curso del tercer periodo:</b></label>
      <input type="text" name="curso3" class="form-control" placeholder="Nombre del curso" value="<?php echo $semestre3 ?>">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Curso del cuarto periodo:</b></label>
      <input type="text" name="curso4" class="form-control" placeholder="Nombre del curso" value="<?php echo $semestre4 ?>">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Curso del quinto periodo:</b></label>
      <input type="text" name="curso5" class="form-control" placeholder="Nombre del curso" value="<?php echo $semestre5 ?>">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Curso del sexto periodo:</b></label>
      <input type="text" name="curso6" class="form-control" placeholder="Nombre del curso" value="<?php echo $semestre6 ?>">
    </div><div class="form-group">
      <input type="submit" class="btn btn-danger" value="Modificar"> <input type="reset" class="btn btn-danger" > 
    </div>
		</form></td><td><div class="span12">
		<div class="caption">
		<?php
				        require("connect_db.php");
                $consulta=("SELECT * FROM cursos ");
                $query=mysqli_query($conexion,$consulta);
  
                  
                  echo "<h2>Cursos</h2>";
                
                  echo "<table border='1'; class='';>";
                    echo "<tr class='normal'>";
                        echo "<td>Primer periodo</td>";
                        echo "<td>Segundo periodo</td>";
                        echo "<td>Tercer periodo</td>";
                        echo "<td>Cuarto periodo</td>";
                        echo "<td>Quinto periodo</td>";
                        echo "<td>Sexto periodo</td>";
                    echo "</tr>";
              
                
            ?>
              
            <?php 
                 while($lugar=mysqli_fetch_array($query)){  
                    echo "<tr class='efecto' valign='middle'  maxheight=''>";
                        echo "<td>$lugar[1]</td>";
                        echo "<td>$lugar[2]</td>";
                        echo "<td>$lugar[3]</td>";
                        echo "<td>$lugar[4]</td>";
                        echo "<td>$lugar[5]</td>";
                        echo "<td>$lugar[6]</td>";

             
                    echo "</tr>";
              
                
                echo "</table>";
                 }?>
                </div></div></td></tr>

</body>
</html>
