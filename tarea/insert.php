<?php
include_once ('conexion-e.php');
$dni=$_POST['dni'];
$nam=$_POST['Nombre'];
$ap=$_POST['Apellido'];
$grupo=$_POST['grupo'];
$mate=$_POST['Mate'];
$ing=$_POST['Ingles'];
$hi=$_POST['Historia'];
$profe=$_POST['profesor'];
$promedio=($ing+$hi+$mate)/3;
if($promedio>=3){
    $estado="Aprobado";
} else{
    $estado="Reprobado";
}
$conexion->query("Insert into estudiante ( documento, nombre, apellido, grupo, lidergrupo, matematicas, ingles, historia, promedio, estado) values($dni, '$nam','$ap','$grupo','$profe',$mate,$ing,$hi,$promedio,'$estado')");
include_once('consulta-e.php');
?>
