<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$titulos = $_POST["titulo_proyecto"];
$fecha_ini = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$participacion = $_POST["tipo_participacion"];
$monto = $_POST["monto_apoyo"];
$tipo = $_POST["tipo_proyecto"];
$nombre = $_POST["nombre_patrocinador"];
$investigadores = $_POST["investigadores_participantes"];
$patro = $_POST["tipo_patrocinador"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_proyectos_investigacion 
SET 
titulo='$titulos',nombre_patrocinador='$nombre_patrocinador',fecha_inicio='$fecha_ini',fecha_fin='$fecha_fin',tipo_patrocinador='$patro',investigadores_participantes='$investigadores',tipo_proyecto='$tipo',tipo_participacion='$participacion',monto_apoyo='$monto'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>