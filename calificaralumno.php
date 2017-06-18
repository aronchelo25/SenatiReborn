<?php
  $alumno = $_POST['alumno'];
  $codigo=$_POST['codigo'];
  $cal1=$_POST['semestre1'];
  $cal2=$_POST['semestre2'];
  $cal3=$_POST['semestre3'];
  $cal4=$_POST['semestre4'];
  $cal5=$_POST['semestre5'];
  $cal6=$_POST['semestre6'];
  $promedio=(($cal1+$cal2+$cal3+$cal4+$cal5+$cal6)/6);

  require("connect_db.php");

  $checkemail=mysqli_query($conexion,"SELECT * FROM calificar WHERE alumno='$alumno'");
  $check_mail=mysqli_num_rows($checkemail);
      if($check_mail>0){
        echo ' <script language="javascript">alert("El usuario ya esta Calificado");</script> ';
         echo "<script>location.href='registrodenotas.php'</script>";
      }else{
        mysqli_query($conexion,"INSERT INTO calificar(alumno, curso1, curso2, curso3, curso4, curso5, curso6, promedio, codigo) VALUES('$alumno','$cal1','$cal2','$cal3','$cal4','$cal5','$cal6','$promedio','$codigo')");

        echo ' <script language="javascript">alert("Se mando las notas al registro");</script> ';
        echo "<script>location.href='registrodenotas.php'</script>";
        
  
      } 
?> 