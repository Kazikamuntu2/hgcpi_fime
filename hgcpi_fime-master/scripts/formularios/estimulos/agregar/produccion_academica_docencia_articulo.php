<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$issn = $_POST["issn"];
$nombre_art = $_POST["titulo_art"];
$pais = $_POST["pais"];
$nombre_revista = $_POST["nom_rev"];
$pag_ini = $_POST["pag_ini"];
$pag_fin = $_POST["pag_fin"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_prod_articulos /* tabla de destino */
(issn,nombre_art,pais,nombre_revista,pagina_inicial,pagina_final,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$issn','$nombre_art','$pais','$nombre_revista','$pag_ini','$pag_fin','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
