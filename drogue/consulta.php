<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre del medicamento</th>
      <th scope="col">Tipo</th>
      <th scope="col">Precio</th>
      <th scope="col">Fecha de vencimiento</th>
      <th scope="col">Concentración</th>
      <th scope="col">Stock</th>
      <th scope="col">laboratorio</th>
      <th scope="col">estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $counter=0;
      echo'<th scope=row>',$counter+1,'</th>';
    $nombre=$_POST['nombre'];
    include_once('conexion.php');
    $consulta=$conexion->query("SELECT * from medicamento where nombre_medicamento='$nombre'");
    while ($row=$consulta->fetch_array()){
        $nombre_medicamento=$row['nombre_medicamento'];
        $tipo=$row['tipo'];
        $precio=$row['precio'];
        $fecha=$row['fecha'];
        $concentracion=$row['concentracion'];
        echo "<td>",$nombre_medicamento,"</>";
        echo "<td>",$tipo,"</td>";
        echo "<td>",$precio,"</td>";
        echo "<td>",$fecha,"</td>";
        echo "<td>",$concentracion,"</td>";
        $counter=$row['id'];
    }
    $cons=$conexion->query("SELECT * from inventario where id=$counter");
    while ($row=$cons->fetch_array()){
        $stock=$row['cantidad'];
        echo "<td>",$stock,"</td>";
    }
    $co=$conexion->query("SELECT * from laboratorio where id=$counter");
    while ($row=$co->fetch_array()){
        $nombre=$row['nombre'];
        $estado=$row['estado'];
        echo "<td>",$nombre,"</td>";
        echo "<td>",$estado,"</td>";
    }
    ?>
    </tr>
  </tbody>
</table>    
</body>
</html>
