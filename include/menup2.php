<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="admin.php"><?php echo "Bienvenido Instructor ".$_SESSION['nombre']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2'];?></a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="formulario_registro.php">Registrar alumno</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registrodenotas.php">Registro de Notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="desconectar.php">Cerrar Cesion</a>
            </li>
        </ul>
    </div>
</nav>
<br><br><br>
