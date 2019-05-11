<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

$dependencia = $_POST["dependencia"];
$nivel = $_POST["nivel"];
$grado = $_POST["grado"];
$materia = $_POST["materia"];
$numgrupos = $_POST["num_grupos"];
$horas_semana = $_POST["horas_semana"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_carga_academica 
SET dependencia='$dependencia',nivel='$nivel',grado='$grado',materia='$materia',num_grupos='$numgrupos',num_horas_semana='$horas_semana',fecha_inicio='$fecha_inicio',fecha_fin='$fecha_fin'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>