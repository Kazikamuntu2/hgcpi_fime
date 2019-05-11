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
$funcion = $_POST["funcion"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_gestion_cuerpos_colegiados 
SET tipo_gestion='$tipo_gestion',clasificacion='$clasificacion',funcion_encomendada='$funcion',fecha_ultimo_reporte='$fecha'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>