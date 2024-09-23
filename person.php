<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid align-items-center bg-primary-subtle text-primary-emphasis">
        <div class="row ">
            <form action="result.php" method="POST">
                <input type="text" class="col-3  mt-4" placeholder="Número de id" name="id">
                    
                <input type="text" class="col-3  mt-4" placeholder="Nombre" name="nombre">
                
                <input type="text" class="col-3  mt-4" placeholder="Apellido" name="apellido">
                
                <input type="text" class="col-3  mt-4" placeholder="Correo" name="email">
                
                <input type="text" class="col-3  mt-4" placeholder="Télefono" name="telefono">
                
                <input type="text" class="col-3  mt-4" placeholder="Dirección" name="direccion">
                
                <input type="text" class="col-3  mt-4" placeholder="Fecha de nacimiento" name="fecha_nacimiento">
                
                <input type="text" class="col-3 mb-4 mt-4" placeholder="Genero" name="genero">
                    
                <input type="text" class="col-3 mb-4 mt-4" placeholder="Estado cívil" name="estado_civil">
                    <br>
                    <div class="end">
                        <select name="select" class="col-3">
                            <option value="value1">Ingeniero</option>
                            <option value="value2">Tecnologo</option>
                        </select>
                        <select name="select_city" class="col-3">
                            <option value="1">Bogota</option>
                            <option value="2">Cali</option>
                            <option value="3">Medellín</option>
                        </select>
                        <input type="text" class="col-3" style="margin-left:1px;" placeholder="Horas Mensuales" name="horas">
                        <input type="text" class="col-6 mt-2" style="margin-left:5px;" placeholder="Aux de transporte" name="aux">
                    </div>
                    <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 