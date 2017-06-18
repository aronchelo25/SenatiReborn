<header>
 
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"><img class="tam" src="icono-menu.png"></img>
  </label>

        <nav class="menu">
           <ul>
          <li><a href="admin.php"><?php echo "Bienvenido Instructor ".$_SESSION['nombre']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2'];?></a></li>
          <li><a href="formulario_registro.php">Registrar alumno</a></li>
          <li><a href="registrodenotas.php">Registro de Notas</a></li>
          <li><a href="desconectar.php">Cerrar Cesion</a></li>
      </ul>

        </nav>

</header>			