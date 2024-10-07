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
<section class="container">
    <div class="registration-form ">
        <form action="insert-g.php" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="Nombre"  placeholder="Nombre del grupo">
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" name="estudiantes" placeholder="Número de estudiantes">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="grupo" placeholder="Lider del grupo">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Enviar</button>
            </div>
        </form>
        <div class="social-media">        
            <form action="consulta-g.php">
                <button type="submit" class="btn btn-block create-account">Consultar</button>
                <div class="social-icons d-flex justify-content-center">
                    <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                    <a href="#"><i class="icon-social-google" title="Google"></i></a>
                    <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="js.js"></script>
</body>
</html>