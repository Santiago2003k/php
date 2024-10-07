<?php
include_once ('conexion-e.php');
$nam=$_POST['Nombre'];
$ap=$_POST['materia'];
$grupo=$_POST['grupo'];
$conexion->query("Insert into materias ( nombre, materia, salon) values('$nam','$ap','$grupo')");
include_once('consulta-m.php');
?>