<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['codigo']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
  <head>
    <meta charset="utf-8">
    <title>SENATI REBORN</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="cuerpo.css">
    <link rel="stylesheet" href="css/menustilos.css">
  </head>
<body data-offset="40" background="images/admin.jpeg" style="background-attachment: fixed; background-size: 100% 100%;">
<?php require("include/menup.php"); ?>
	<div class="span12">

		<div class="caption">
		<h2> Registro de mis alumnos</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Seleccion de bloque</h4>
		<div class="row-fluid">
		

         	<form action="" method="post">

			<select name="bloque" class="form-group has-success" style="border-radius:5px;">
			 <?php
         include("connect_db.php");

         $query="SELECT nombre FROM bloque";
         $resultado =$conexion->query($query);
         while($row=$resultado->fetch_assoc()){
          ?>
						 <option><?php echo $row['nombre'];?></option>	
            <?php
         }
         ?> 	  
		</select>  			  
		<input type="submit" name="Solicitar">
		</form>

		<?php
				        require("connect_db.php");
                @$bloque= $_POST['bloque'];
                $consulta=("SELECT * FROM alumno WHERE bloque='$bloque' ORDER BY apellido1 ASC");
                $query=mysqli_query($conexion,$consulta);
                if ($bloque==0) {
                  
                  echo "<h2>Seleccione un bloque</h2>";
                
                  echo "<table border='1'; class='';>";
                    echo "<tr class='normal'>";
                        echo "<td>Alumno</td>";
                        echo "<td>Correo</td>";
                        echo "<td>Codigo ID</td>";
                        echo "<td>Fecha de nacimiento</td>";
                        echo "<td>Notas</td>";
                        echo "<td>Editar</td>";
                        echo "<td>Borrar</td>";
                    echo "</tr>";
              
                
            ?>
              
            <?php 
                 while($lugar=mysqli_fetch_array($query)){  
                    echo "<tr class='efecto' valign='middle'  maxheight=''>";
                        echo "<td>$lugar[2] $lugar[3], $lugar[1]</td>";
                        echo "<td>$lugar[4]</td>";
                        echo "<td>$lugar[5]</td>";
                        echo "<td>$lugar[10]</td>";

                        echo "<td><a href='calificar.php?id=$lugar[0]'><img src='images/notas.png' class='img-rounded'></td>";
                        echo "<td><a href='actualizar.php?id=$lugar[0]'><img src='images/modificar.gif' class='img-rounded'></td>";
                        echo "<td><a href='admin.php?id=$lugar[0]&eliminar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
                        

                        
                    echo "</tr>";
                }
                }
                echo "</table>";
                 
                
                

                    extract($_GET);
                    if(@$eliminar==2){
        
                        $queryborrar="DELETE FROM alumno WHERE id=$id";
                        $ejecutarborrar=mysqli_query($conexion,$queryborrar);
                        echo '<script>alert("ALUMNO ELIMINADO DE LA BASE DE DATOS)</script> ';
                        echo "<script>location.href='admin.php'</script>";
                    }

            ?>
		<?php require("include/footer.php"); ?>
  </body>
</html>