<?php
include_once('conexion-e.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>
<body>
<nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="" class="col-6"><img src="OIP (1).jpg" style="width: 20%;" alt=""></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active icon-link icon-link-hover" aria-current="page"  style="text-decoration: none; color: #fff;" href="estudiantes.php">Estudiantes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link icon-link icon-link-hover" style="text-decoration: ; color: #fff;" href="profesores.php">Profesores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link icon-link icon-link-hover" style="text-decoration: none; color: #fff; --bs-icon-link-transform: translate3d(0, -.125rem, 0);"  href="grupo.php">Grupo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link icon-link icon-link-hover"  style="text-decoration: none; color: #fff; cursor: pointer;" href="materias.php" >Materias</a>
                </li>
              </ul>
        </div>
      </nav>
    <div class="registration-form">
    <form action="" method="POST">
        <select name="documento" class="form-control item">
        <?php
            $consulta=$conexion->query("SELECT * from estudiante");
            while($row=$consulta->fetch_array()){
                echo '<option name="dni" class="form-control item" value="',$row['documento'],'"selected>',$row['documento'],'</option>';
            }
        ?>
        </select>
        <button type="submit" class="btn btn-primary btn-block create-account">Consultar</button>
        <div class="social-icons d-flex justify-content-center">
                    <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                    <a href="#"><i class="icon-social-google" title="Google"></i></a>
                    <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                </div>
        </form>
        </div>
    <?php
    if(isset($_POST['documento'])){
        ?>
        <form action="">
        <?php
        $document=$_POST['documento'];
        $consulta=$conexion->query("SELECT * from estudiante where documento='$document'");
        while($row=$consulta->fetch_array()){
            $name= $row['nombre'];
            $last= $row['apellido'];
            $promedio= $row['promedio'];
            $estado=$row['estado'];
            echo '<div class="social-media">';
            echo '<p class="text-center" style="color:white;">',$name;
            echo '<br>';
            echo 'Apellido: ',$last;
            echo '<br>';
            echo 'Promedio: ',$promedio;
            echo '<br>';
            echo 'Estado: ',$estado;
            echo '</div>';
        }
    }
?>
    </form>
</body>
</html>