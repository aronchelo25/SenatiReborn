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
	<title>Mis Notas</title>
	<link rel="stylesheet" type="text/css" href="css/index_stilo.css">
    <link rel="stylesheet" href="css/menustilos.css">
  </head>

</head>
<body data-offset="40" background="images/index2.jpg" style="background-attachment: fixed; background-size: 100% 100%;">
<div class="panal">
<table style="height: 100px; background: ><tr><td>
<?php require("include/menu.php"); ?></td></tr></table>
	<div class="contenedor" id="uno">
		<a href="software.php"><img class="icon" src="pictures/icon11.png"></a>
		<p class="texto">Software Aplicativo</p>
	</div>

	<div class="contenedor" id="dos">
		<a href="arquitectura.php"><img class="icon" src="pictures/icon10.png"></a>
		<p class="texto">Arquitectura de Computadoras</p>
	</div>

	<div class="contenedor" id="tres">
		<a href="fundamentos.php"><img class="icon" src="pictures/icon2.png"></a>
		<p class="texto">Fundamento de Programación</p>
	</div>

	<div class="contenedor" id="cuatro">
		<a href="tecnologias.php"><img class="icon" src="pictures/icon5.png"></a>
		<p class="texto">Tecnología web</p>
	</div>

	<div class="contenedor" id="cinco">
		<a href="base.php"><img class="icon" src="pictures/icon8.png"></a>
		<p class="texto">Base de datos1</p>
	</div>

	<div class="contenedor" id="seis">
		<a href="lenguaje.php"><img class="icon" src="pictures/icon6.png"></a>
		<p class="texto">Lenguaje de Programación</p>
	</div>

</div>


</body>
</html>