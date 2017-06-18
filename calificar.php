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
    <meta charset="UTF-8">
    <title>Calificar</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php require("include/menup2.php"); ?>
<?php
extract($_GET);
require("connect_db.php");

$sql="SELECT * FROM alumno WHERE id=$id";
$ressql=mysqli_query($conexion,$sql);
while ($row=mysqli_fetch_row ($ressql)){
    $nombre=$row[1];
    $apellido1=$row[2];
    $apellido2=$row[3];
    $codigo=$row[5];
}
?>
    <form action="calificaralumno.php" method="POST">
        <div class="container">
            <h3>Calificar a <?php echo $apellido2.' '.$apellido1.' '.$nombre; ?></h3>

            <div class="row">
                <div class="col-5">
                  <input type="text" name="alumno" value="<?php echo $apellido2.' '.$apellido1.' '.$nombre; ?>" readonly="readonly" class="form-control form-control-sm"  >
                </div>
                <div class="col-1">
                    con id
                </div>
                <div class="col-3">
                    <input type="text" name="codigo" value="<?php echo $codigo;?>" readonly="readonly"  class="form-control form-control-sm" >
                </div>
            </div>
            <br>

            <div class="row" style="text-align:center">
                <?php
                include("connect_db.php");
                $query="SELECT*FROM cursos";
                $resultado =$conexion->query($query);
                while($row=$resultado->fetch_assoc()){
                    ?>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr style="background-color: lightgrey;">
                            <th width="16%"><?php echo $row['nombre'];?></th>
                            <th width="16%"><?php echo $row['nombre2'];?></th>
                            <th width="16%"><?php echo $row['nombre3'];?></th>
                            <th width="16%"><?php echo $row['nombre4'];?></th>
                            <th width="16%"><?php echo $row['nombre5'];?></th>
                            <th width="16%"><?php echo $row['nombre6'];?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="semestre1">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="semestre2">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="semestre3">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="semestre4">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="semestre5">
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="semestre6">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
                <div class="btn-group">
                    <input type="submit" name="Enviar" class="btn btn-primary btn-sm">
                    <input type="Reset" name="" class="btn btn-success btn-sm">
                </div>
            </div>
        </div>

    </form>
    <?php require("include/footer2.php"); ?>
</body>
</html>