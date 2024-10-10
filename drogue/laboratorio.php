<?php
include_once('conexion.php');
$laboratorio=$_POST["lab"];
$estado='Activo';
$conexion->query("INSERT INTO laboratorio (nombre, estado) values ('$laboratorio', '$estado')");
include_once('consulta_general.php');
?>