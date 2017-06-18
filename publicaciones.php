<?php
session_start();
if (!@S_SESSION['codigo']) {
	header "location: index.php";
}elseif ($_SESSION['rol']==2) {
	header "location: index2.php";
}
?>