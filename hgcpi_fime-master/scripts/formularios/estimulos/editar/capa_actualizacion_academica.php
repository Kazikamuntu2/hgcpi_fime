<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

$descripcion = $_POST["descripcion"];
$tipo = $_POST["tipo_capac"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$nom_inst = $_POST["nom_institucion"];
$num_hrs = $_POST["num_horas"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_grados_acad 
SET tipo_capacitacion='$tipo',descripcion='$descripcion',fecha_inicio='$fecha_inicio',fecha_fin='$fecha_fin',nombre_institucion='$nom_inst',numero_de_horas='$num_hrs'
WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>