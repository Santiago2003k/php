<?php
include_once('conexion.php');
$stock=$_POST['stock'];
$conexion->query("INSERT INTO inventario(cantidad) values($stock)");
?>

<form action="laboratorio.php" method="POST">
        <label for="">Nombre de laboratorio</label>
        <input type="text" name="lab">
        <input type="submit" value="Ingresar">
    </form>