<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$tipo_recon = $_POST["tipo_reconocimiento"];
$nivelo = $_POST["nivel"];
$anos = $_POST["ano"];
$monto_men = $_POST["monto_mensual"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_premios_y_distinciones 
SET tipo_distincion='$tipo_recon',nivel='$nivelo',ano='$anos',monto_mensual='$monto_men'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>