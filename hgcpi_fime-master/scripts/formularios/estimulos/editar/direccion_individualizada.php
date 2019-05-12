<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$direccion = $_POST["tipo_dir"];
$titulo = $_POST["titulo_proyecto"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$ies = $_POST["ies_realiza_gestion"];
$horas = $_POST["num_horas"];
$estado = $_POST["estado_direccion"];
$cv = $_POST["considera_cv_ca"];
$nivel = $_POST["nivel_acad"];
$grado = $_POST["grado_acad"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_direccion_individualizada 
SET 
tipo_de_direccion='$direccion',titulo_proyecto_dirigido='$titulo',estado_de_direccion='$estado',fecha_de_inicio='$fecha_inicio',fecha_de_fin='$fecha_fin',nivel_academico='$nivel',considera_cv_ca='$cv',numero_estudiantes='$horas',ies_realiza_gestion='$ies',grado_academico='$grado'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>