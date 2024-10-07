
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Consulta</title>
</head>
<body style="background-color:black;">
<nav class="navbar bg-dark">se
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
    <section>
    <table class="table table-success mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Lider del grupo</th>
      <th scope="col">Materia</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include_once('conexion-e.php');
    $consulta=$conexion->query("SELECT * from profesor");
    while ($row=$consulta-> fetch_array()){
        $id=$row['id'];
        $name=$row['nombre'];
        $last=$row['apellido'];
        $groupe=$row['lidergrupo'];
        $materia=$row['materia'];
        $genero=$row['genero'];
        echo "<tr>";
        echo "<th scope='row'>$id</th>";
        echo "<td>$name</td>";
        echo "<td>$last</td>";
        echo "<td>$groupe</td>";
        echo "<td>$materia</td>";
        echo "<td>$genero</td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
    </section>
</body>
</html>
