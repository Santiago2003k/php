<?php
include_once ('conexion-e.php');
$nam=$_REQUEST['Nombre'];
$ap=$_REQUEST['Apellido'];
$grupo=$_REQUEST['grupo'];
$mate=$_REQUEST['Mate'];
$ing=$_REQUEST['Ingles'];
$hi=$_REQUEST['Historia'];
$promedio=($ing+$hi+$mate)/3;
if($promedio>=3){
    $estado="Aprobado";
} else{
    $estado="Reprobado";
}
$conexion->query("Insert into estudiante ( nombre, apellido, grupo, matematicas, ingles, historia, promedio, estado) values('$nam','$ap','$grupo',$mate,$ing,$hi,$promedio,'$estado')");
include_once('consulta-e.php');
?>
