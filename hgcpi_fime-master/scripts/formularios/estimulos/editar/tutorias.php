<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$nivel = $_POST["nivel"];
$area = $_POST["area_conocimiento_tutoria"];
$tipo_pe_e = $_POST["tipo_periodo_escolar"];
$pe_e = $_POST["periodo_escolar"];
$tipo_tutoria = $_POST["tipo_tutoria"];
$programa_edu = $_POST["pe_que_participa"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_tutoria 
SET 
tipo_tutoria='$tipo_tutoria',
nivel_academico='$nivel',
programa_educativo='$programa_edu',
tipo_periodo_escolar='$tipo_pe_e',
periodo_escolar='$pe_e',
fecha_de_inicio='$fecha_inicio',
fecha_de_fin='$fecha_fin',
area_conocimiento='$area'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>