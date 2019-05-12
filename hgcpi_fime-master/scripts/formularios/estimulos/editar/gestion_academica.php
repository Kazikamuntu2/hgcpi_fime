<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$evento = $_POST["evento"];
$tipo_gestion = $_POST["tipo_gestion"];
$calificacion = $_POST["calificacion"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$tipo_evento = $_POST["tipo_evento"];
$participacion = $_POST["tipo_participacion"];
$alcance = $_POST["tipo_alcance"];
$ies = $_POST["ies_realiza_gestion"];
$estado = $_POST["estado_gestion"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_gestion_academica 
SET tipo_gestion='$tipo_gestion',calificacion='$calificacion' ,evento='$evento' ,tipo_evento='$tipo_evento' ,tipo_participacion='$participacion' ,tipo_alcance='$alcance' ,fecha_inicio='$fecha_inicio' ,fecha_fin='$fecha_fin' ,estado_gestion='$estado' ,ies_realiza_gestion='$ies' 
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>