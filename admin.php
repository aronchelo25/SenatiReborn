<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['codigo']) {
    header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
    header("Location:index2.php");
}
?>
<head>
    <meta charset="utf-8">
    <title>SENATI REBORN</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body >
<?php require("include/menup2.php"); ?>

<div class="container">
    <h2> Registro de mis alumnos</h2>
    <h4>Seleccion de bloque</h4>

    <form action="" method="post">
    <select name="bloque" class="custom-select form-control-sm">
        <?php
            include("connect_db.php");
            $query="SELECT nombre FROM bloque";
            $resultado =$conexion->query($query);
            echo "<option value='*'>All</option>";
            while($row=$resultado->fetch_assoc()){
                if ($row['nombre']==$_POST['bloque']){
                    echo "<option selected>".$row['nombre']."</option>";
                } else {
                    echo "<option>".$row['nombre']."</option>";
                }
            }
        ?>
    </select>
    <input type="submit" class="btn btn-primary btn-sm" name="Solicitar">
    </form>

    <?php
        require("connect_db.php");
        @$bloque= $_POST['bloque'];
        if ($bloque == '*'){
            $consulta=("SELECT * FROM alumno ORDER BY apellido1 ASC");
        } else {
            $consulta=("SELECT * FROM alumno WHERE bloque='$bloque' ORDER BY apellido1 ASC");
        }
        $query=mysqli_query($conexion,$consulta);
        if ($bloque==0) {

            echo "<h2>Seleccione un bloque</h2>";
            echo "<table class='table table-bordered table-hover table-sm' >";
            echo "<thead>";
                echo "<tr style='background-color:lightgrey '>";
                echo "<th>Alumno</th>";
                echo "<th>Correo</th>";
                echo "<th>Codigo ID</th>";
                echo "<th>Fecha de nacimiento</th>";
                echo "<th>Notas</th>";
                echo "<th>Editar</th>";
                echo "<th>Borrar</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($lugar=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>$lugar[2] $lugar[3], $lugar[1]</td>";
                echo "<td>$lugar[4]</td>";
                echo "<td>$lugar[5]</td>";
                echo "<td>$lugar[10]</td>";

                echo "<td class='text-center'><a href='calificar.php?id=$lugar[0]'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></td>";
                echo "<td class='text-center'><a href='actualizar.php?id=$lugar[0]'><i class=\"fa fa-user\" aria-hidden=\"true\"></i></td>";
                echo "<td class='text-center'><a href='admin.php?id=$lugar[0]&eliminar=2'><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i></td>";
                echo "</tr>";
            }
            echo "</tbody>";

            echo "</table>";
        }

    extract($_GET);
    if(@$eliminar==2){
    $queryborrar="DELETE FROM alumno WHERE id=$id";
    $ejecutarborrar=mysqli_query($conexion,$queryborrar);
    echo '<script>alert("ALUMNO ELIMINADO DE LA BASE DE DATOS)</script> ';
    echo "<script>location.href='admin.php'</script>";
    }
    ?>

</div>
<?php require("include/footer2.php"); ?>
</body>
</html>