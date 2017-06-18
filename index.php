<!DOCTYPE html>
<html>
<head>
	<title>Prinsipal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, inicial-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/estiloslaos.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<video src="video/portada2.mp4" autoplay loop poster="poster.jpg">
</video>
<main style="border-radius: 25pt; background-color: rgba(0,0,0,0.5);"> 
	 <form action="validar.php" method="POST">
		<h1 style="font-family: comic sans-serif">"Bienvenido Senatino"</h1><hr>
		<h2 style="font-family: arial">Codigo ID:</h2><br>
			 <input class="form-group has-success" style="border-radius:5px;" type="text" name="codigo"><br>
		<h2 style="font-family: arial">Contraseña:</h2><br>
			<input style="border-radius:5px;" type="password" name="clave"><br>
			<input class="btn btn-primary" type="submit" value="Aceptar"> <input class="btn btn-primary" type="reset" >

		</form>
</main>
</body>
</html>