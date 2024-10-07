<?php
include_once ('conexion-e.php');
$nam=$_REQUEST['Nombre'];
$es=$_REQUEST['estudiantes'];
$lidergrupo=$_REQUEST['grupo'];
$conexion->query("Insert into grupo ( nombre, estudiantes, lidergrupo) values('$nam',$es,'$lidergrupo')");
include_once('consulta-g.php');
?>