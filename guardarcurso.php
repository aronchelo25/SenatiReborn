<?php 
include("connect_db.php");
      $curso1 = $_POST['curso1'];
      $curso2 = $_POST['curso2'];
      $curso3 = $_POST['curso3'];
      $curso4 = $_POST['curso4'];
      $curso5 = $_POST['curso5'];
      $curso6 = $_POST['curso6'];

$query = "UPDATE cursos SET nombre='$curso1', nombre2='$curso2', nombre3='$curso3', nombre4='$curso4', nombre5='$curso5', nombre6='$curso6' WHERE  id='3'";
$resultado= mysqli_query($conexion,$query);
      if ($resultado) {
      	echo '<script>alert("Cursos añadidos a la BD")</script>';
      	header("Location: cursos.php");
      } else {
      	
      	echo '<script>alert("No se ha establecido la opeacion")</script>';
      }
      
      ?>