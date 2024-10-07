<?php
include_once ('conexion-e.php');
$nam=$_REQUEST['Nombre'];
$ap=$_REQUEST['materia'];
$grupo=$_REQUEST['grupo'];
$conexion->query("Insert into materias ( nombre, materia, salon) values('$nam','$ap','$grupo')");
include_once('consulta-m.php');
?>