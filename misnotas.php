<!DOCTYPE html>
	<?php
	session_start();
	if (@!$_SESSION['codigo']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html>
<head>
	<title>Mis notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index_stilo.css">
	<link rel="stylesheet" href="css/menustilos.css">
</head>
<body data-offset="40" background="images/index2.jpg" style="background-attachment: fixed; background-size: 100% 100%;">
<?php require("include/menu.php"); ?>
<div class="container">
<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2']; ?></h3>	
	<img src="imagenes/ofi-logo.png" />
	<div class="caption">
	<h5> Descrioción del Curso</h5>	
	<?php
				        require("connect_db.php");
                $consulta=("SELECT * FROM cursos ");
                $query=mysqli_query($conexion,$consulta);
                 while($lugar=mysqli_fetch_array($query)){  
                 	echo "<table>";
                    echo "<tr class='normal' valign='middle'  maxheight=''>";
                        echo "<td>$lugar[1]</td>";
                        echo "<td>$lugar[2]</td>";
                        echo "<td>$lugar[3]</td>";
                        echo "<td>$lugar[4]</td>";
                        echo "<td>$lugar[5]</td>";
                        echo "<td>$lugar[6]</td>";
                        echo "<td>Condición</td>";
                   		echo "</tr>";
                   		}?>
	<?php require("connect_db.php");
				$rcodigo = $_SESSION['codigo'];
                $consulta=("SELECT * FROM calificar WHERE codigo=$rcodigo");
                $query=mysqli_query($conexion,$consulta);                
            ?>
              
            <?php if ($query) {
                 while($lugar=mysqli_fetch_array($query)){  
                    echo "<tr class='efecto' valign='middle'  maxheight=''>";
                        echo "<td>$lugar[2]</td>";
                        echo "<td>$lugar[3]</td>";
                        echo "<td>$lugar[4]</td>";
                        echo "<td>$lugar[5]</td>";
                        echo "<td>$lugar[6]</td>";
                        echo "<td>$lugar[7]</td>";
                        if ($lugar[8]>10) {
                        	echo "<td>Aprobado</td></tr>";
                        }else{
                        echo "<td>Desaprobado</td></tr>"; }
                }}elseif($query){
                	echo "Aun no se han subido sus notas intentelo mas tarde.";
                	} ?></table>
	</div>
	</div>
	</div>
	</div>
</body>
</html>