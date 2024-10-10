<?php
    include_once('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drogueria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section class="text-center">
<div class="container">
    <div class="row d-flex justify-content-center">
            <!-- Button trigger modal ingresar -->
        <div class="col-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ingresar">
            Ingresar
            </button>
        </div>
            <!-- button 2 -->
        <div class="col-4">
        <form action="consulta_general.php">
        <button type="submit" class="btn btn-primary">
            Consultar general
            </button>
        </form>
        </div>
        <div class="col-4">    
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Consultar">
            Consultar individual
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ingresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div>
                <form action="medicamento.php" method="POST">
                    <label for="">Nombre de medicamento</label>
                    <input type="text" name="name"  class="form-control">
                    <label for="">Tipo de medicamento</label>
                    <input type="text" name="tipo"  class="form-control">
                    <label for="">Precio de mediacamento</label>
                    <input type="text" name="price"  class="form-control">
                    <label for="">Fecha de vencimiento</label>
                    <input type="texto" name="data"  class="form-control">
                    <label for="">Concentración</label>
                    <input type="number" name="concentracion"  class="form-control">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-success">Save changes</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal2 -->
        <div class="modal fade" id="Consultar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Consultar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div>
                <form action="consulta.php" method="POST">
                <label for="">Nombre del mediacamento</label> 
            <select name="nombre">   
                <?php
            include_once('conexion.php');
            $consulta=$conexion->query("SELECT * from medicamento");
            while ($row=$consulta->fetch_array()){
                echo '<option  class="form-control item value="',$row['nombre_medicamento'],'"selected>',$row['nombre_medicamento'],'</option>';
            }
                ?>  
            </select>
            </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-success">Consultar</button>
                        </form>
                    </div>
                    </div>
        </div>
        </div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>