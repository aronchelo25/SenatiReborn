<?php 
require("connect_db.php");
$salida = "";
$consulta = "SELECT * FROM alumno ORDER By apellido1";
if (isset($_POST['cosulta'])) {
	$q = $conevion-> real_escape_string($_POST['comsulta']);
	$consulta = "SELECT nombre, apellido1,apellido2,codigo FROM alumno
	WHERE nombre LIKE '%".$q."%' OR apellido1 LIKE '%".$q."%' OR apellido2 LIKE'%".$q."%'
	OR codigo LIKE'%".$q."%'";	
}

$resultado = $coneviom->query($consulta);

if ($resultado->num_rows > 0) {
	$salida = "<table class=''>
				<tr> 
				<td>Apellido"
} else {
	# code...
}



?>