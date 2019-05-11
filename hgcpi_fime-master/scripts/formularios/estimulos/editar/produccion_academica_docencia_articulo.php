<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$issn = $_POST["issn"];
$nombre_art = $_POST["titulo_art"];
$pais = $_POST["pais"];
$nombre_revista = $_POST["nom_rev"];
$pag_ini = $_POST["pag_ini"];
$pag_fin = $_POST["pag_fin"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_prod_articulos SET issn='$issn',nombre_art='$nombre_art',pais='$pais',nombre_revista='$nombre_revista',pagina_inicial='$pag_ini',pagina_final='$pag_fin' WHERE id='$ident' AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
	header("Location: ../../../../estimulos.php");
}

?>