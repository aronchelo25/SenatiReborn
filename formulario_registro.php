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
	<title>REGISTRAR ALUMNO</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/menustilos.css">
</head>
<body data-offset="40" background="images/admin.jpeg" style="background-attachment: fixed; background-size: 100% 100%;">
<?php require("include/menup.php"); ?>
<center>
<form method="POST" action="registro.php">
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registrar Nuevo alumno</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Nombre:</b></label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre del alumno">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Apellido Paterno</b></label>
      <input type="text" name="apellido1" class="form-control"  required placeholder="Apellido Paterno">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Apelldio Materno:</b></label>
      <input type="text" name="apellido2" class="form-control"  placeholder="Apellido Materno">
      <div class="form-group">
      <label style="font-size: 14pt;"><b>Codigo:</b></label>
      <input type="text" name="codigo" class="form-control"  required placeholder="Codigo ID">
    </div>
    </div>
    <div class="form-group">
    <label style="font-size: 14pt;"><b>Bloque:</b></label>
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
    </div>
     <div class="form-group">
      <label style="font-size: 14pt;"><b>Fecha de nacimiento:</b></label>
      <input type="date" name="fec_nac" class="form-control" value="" required placeholder="Fecha de Nacimiento">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Sexo:</b></label>
     <select name="sexo">
       <option>M</option>
       <option>F</option>
     </select>
    </div>
    </div>
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"> <input  class="btn btn-danger" type="Reset" name="" value="Restablecer">

  </fieldset>
</form>
</center>
  <?php require("include/footer.php"); ?>
</body>
</html>