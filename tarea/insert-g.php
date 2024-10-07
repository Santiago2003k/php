<?php
include_once ('conexion-e.php');
$nam=$_POST['Nombre'];
$es=$_POST['estudiantes'];
$lidergrupo=$_POST['grupo'];
$conexion->query("Insert into grupo ( nombre, estudiantes, lidergrupo) values('$nam',$es,'$lidergrupo')");
include_once('consulta-g.php');
?>