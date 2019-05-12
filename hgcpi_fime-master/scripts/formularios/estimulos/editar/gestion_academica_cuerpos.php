<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$fecha = $_POST["fecha_ultimo_reporte"];
$tipo_gestion = $_POST["tipo_gestion"];
$clasificacion = $_POST["clasificacion"];
$horas = $_POST["horas_semana"];
$result = $_POST["resultados"];
$estado = $_POST["estado_gestion"];
$ies = $_POST["ies_realiza_gestion"];
$aprov = $_POST["aprobado"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$organo = $_POST["organo_presentado"];
$funcion_en = $_POST["funcion"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_gestion_cuerpos_colegiados 
SET tipo_gestion='$tipo_gestion',clasificacion='$clasificacion',funcion_encomendada='$funcion_en',organo_colegiado='$organo',fecha_inicio='$fecha_inicio',fecha_fin='$fecha_fin',fecha_ultimo_reporte='$fecha',aprobado='$aprov',horas_semana='$horas',resultado_obtenido='$result',estado_gestion='$estado',ies_realiza_gestion='$ies'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>