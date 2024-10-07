<?php
include_once('conexion-e.php');
$nam=$_REQUEST['Nombre'];
$ap=$_REQUEST['Apellido'];
$grupo=$_REQUEST['grupo'];
$materia=$_REQUEST['Materia'];
$genero=$_REQUEST['genero'];
$conexion->query("insert into profesor(nombre,apellido,lidergrupo,materia,genero) values('$nam','$ap','$grupo','$materia','$genero')");
include_once('consulta-p.php');
?>