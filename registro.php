<?php

  $nombre=$_POST['nombre'];
  $apellido1=$_POST['apellido1'];
  $apellido2= $_POST['apellido2'];
  $codigo=$_POST['codigo'];
  $bloque=$_POST['bloque'];
  $fec_nac=$_POST['fec_nac'];
  $sexo=$_POST['sexo'];
  $correo= $codigo."@senati.pe";
  $clave=$fec_nac;


  require("connect_db.php");

  $checkemail=mysqli_query($conexion,"SELECT * FROM alumno WHERE codigo='$codigo'");
  $check_mail=mysqli_num_rows($checkemail);
      if($check_mail>0){
        echo ' <script language="javascript">alert("El codigo ya existe en la base de datos");</script> ';
      }else{
        
        
        mysqli_query($conexion,"INSERT INTO alumno (nombre, apellido1, apellido2, correo, codigo, clave, bloque, foto, dato, fec_nac, sexo, rol) VALUES('$nombre','$apellido1','$apellido2','$correo','$codigo','$clave','$bloque','foto.png','Estudiante del Senati','$fec_nac','$sexo','2')");

        echo ' <script language="javascript">alert("AlUMNO REGISTRADO CON EXITO");</script> ';
        echo "<script>location.href='admin.php'</script>";
        
      } 
?>