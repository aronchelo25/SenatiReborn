<header>
 
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"><img class="tam" src="imagenes/icon-logo.png"></img>
  </label>

        <nav class="menu">
           <ul>
           <li><a href="index2.php">Principal</a></li>
          <li><a href="miperfil.php"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2'];?></a></li>
          <li><a href="misnotas.php">Mis notas</a></li>
          <li><a href="desconectar.php">Cerrar Cesion</a></li>  
      </ul>

        </nav>

</header>