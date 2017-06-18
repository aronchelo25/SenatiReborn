<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['codigo']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

  <head>
    <meta charset="utf-8">
    <title>SENATI-REBORN</title>
    <link rel="stylesheet" href="css/menustilos.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/index2.jpg" style="background-attachment: fixed; background-size: 100% 100%;">
<?php
include("include/menu.php");
?>
<div class="container">

<div><img src=""></div>

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="http://www.senati.edu.pe/files/admision-2017-II/images/img-rap2.png" alt="java.php" style="height: 500px; width: 1000px;"/>
			<div class="carousel-caption">
				  <h4>Publicidad</h4>
			</div>
		  </div>
		  <div class="item">
			<img src="http://www.senati.edu.pe/files/admision-2017-II/images/img-rap1.png" alt="funda.php" style="height: 500px; width: 1000px;"/>
			<div class="carousel-caption">
				  <h4>Publicidad</h4>
			</div>
		  </div>
		  <div class="item">
			<img src="http://www.senati.edu.pe/files/admision-2017-II/images/img-rap3.png" alt="php.php" style="height: 500px; width: 1000px;"/>
			<div class="carousel-caption">
				  <h4>Publicidad</h4>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Todos nuestros cursos</h3>
<a href="#">Publicaciones del Profesor</a>
<div class="row" style="text-align:center">
			<div class="span2">
			<div class="well well-small">	
</div>
</div>
<h3>INFO cursos mas sobresalientes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Lenguaje de Programacion PHP</h3>	
	<img src="imagenes/detalles/clase_php.png" alt="#"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
El lenguaje PHP es un lenguaje de programación de estilo clásico, es decir que es un lenguaje de programación con variables, sentencias condicionales, bucles, funciones, etc. No es un lenguaje de etiquetas como podría ser HTML, XML o WML. Está mas cercano a JavaScript o a C, para aquellos que conocen estos lenguajes.
Pero a diferencia de Java o JavaScript que se ejecutan en el navegador, PHP se ejecuta en el servidor, por eso nos permite acceder a los recursos que tenga el servidor como por ejemplo podría ser una base de datos. El programa PHP es ejecutado en el servidor y el resultado enviado al navegador. El resultado es normalmente una página HTML pero igualmente podría ser una pagina WML.
	</p>

	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Base de Datos I</h3>	
	<img src="imagenes/detalles/base_de_datos.jpg" />
	<div class="caption">
	<h5> Descrioción del Curso</h5>	
	<p align="justify">
	
MySQL es un sistema gestor de bases de datos muy conocido y ampliamente usado por su simplicidad y notable rendimiento. Es una opción atractiva tanto para aplicaciones comerciales, como de entretenimiento precisamente por su facilidad de uso y tiempo reducido de puesta en marcha.

	</p>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Arquitectura de Computadoras</h3>	
	<img src="imagenes/detalles/computacion.jpg"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
La informática es una ciencia  que en la actualidad ha generalizado su uso en las diferentes ramas del conocimiento,  por la capacidad de optimizar procesos así como de brindar soluciones y excelentes herramientas para realizar las tareas de manera sencilla y ágil.
De ahí que el estudio de ésta asignatura proporciona los conocimientos y habilidades necesarias para manejar la computadora, organizar y manipular la información en la realización de sus actividades cotidianas como estudiante y de manera general en el ámbito en el que se desenvuelva
	</p>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
		@Copyright <br><br></b></b>
		Institucion encargada: SENATI<br>
		Instructor encargado : Simon Choque del Pozo <br>
		Alumnos: <br>
		<a href="https://www.facebook.com/aronchelo.basalduabarrenechrea">Basaldua Barrenechea Aaron Arantes</a>
		<a href="https://www.facebook.com/profile.php?id=100010613797984">Laos Llana Jhosselyn</a>
		<a href="https://www.facebook.com/carlithos.rosaleschalco">Rosales Chalco Carlos Aaron</a>
		++++++
		</p>
	</div>
	</div>	
</div>
<?php require("include/footer.php"); ?>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>