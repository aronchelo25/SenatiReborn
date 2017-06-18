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
    <title>REGISTRO DE NOTAS</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="cuerpo.css">
    <link rel="stylesheet" href="css/menustilos.css">
  </head>
<body data-offset="40" background="images/admin.jpeg" style="background-attachment: fixed; background-size: 100% 100%;"><?php require("include/menup.php"); ?>
	<div class="span12">

		<div class="caption">
		<h2> Registro de mis alumnos</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Buscar</h4>
		<div class="row-fluid">
<?php
         include("connect_db.php");

         $query="SELECT*FROM cursos";
         $resultado =$conexion->query($query);
         while($row=$resultado->fetch_assoc()){
          
          ?>

		 <h2>Registro de Notas</h2>
                
                  <table border='1'; class='';>
                   <tr class='normal'>
                        <td>Alumno</td>
                        <td><?php echo $row['nombre'];?></td>
  						<td><?php echo $row['nombre2'];?></td>
  						<td><?php echo $row['nombre3'];?></td>
  						<td><?php echo $row['nombre4'];?></td>
  						<td><?php echo $row['nombre5'];?></td>
  						<td><?php echo $row['nombre6'];?></td>
  						<td>Promedio</td>
              <td>Borrar Registro</td>
                    </tr>
             <?php } ?>
		<?php
				require("connect_db.php");
                $consulta=("SELECT * FROM calificar ORDER BY alumno ASC");
                $query=mysqli_query($conexion,$consulta);                
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
                        echo "<td>$lugar[7]</td>";
                        echo "<td>$lugar[8]</td>";
                        echo "<td><a href='registrodenotas.php?id=$lugar[0]&eliminar=2'>Eliminar</a> ";
                        echo "</tr>";
                      }
                        extract($_GET);
                    if(@$eliminar==2){
        
                        $queryborrar="DELETE FROM calificar WHERE id=$id";
                        $ejecutarborrar=mysqli_query($conexion,$queryborrar);
                        echo '<script>alert("REGISTRO ELIMINADO DE LA BASE DE DATOS)</script> ';
                        echo "<script>location.href='registrodenotas.php'</script>";
                }?>
		<?php require("include/footer.php"); ?>
  </body>
</html>