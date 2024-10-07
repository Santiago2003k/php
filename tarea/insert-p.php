<?php
include_once('conexion-e.php');
$nam=$_POST['Nombre'];
$ap=$_POST['Apellido'];
$grupo=$_POST['grupo'];
$materia=$_POST['Materia'];
$genero=$_POST['genero'];
$conexion->query("insert into profesor(nombre,apellido,lidergrupo,materia,genero) values('$nam','$ap','$grupo','$materia','$genero')");
include_once('consulta-p.php');
?>