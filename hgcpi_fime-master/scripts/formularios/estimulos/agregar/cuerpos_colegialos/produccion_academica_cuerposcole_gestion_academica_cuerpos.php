<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$fecha = $_POST["fecha_ultimo_reporte"];
$tipo_gestion = $_POST["tipo_gestion"];
$clasificacion = $_POST["clasificacion"];
$funcion = $_POST["funcion"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_gestion_cuerpos_colegiados /* tabla de destino */
(tipo_gestion,clasificacion,funcion_encomendada,fecha_ultimo_reporte,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$fecha','$tipo_gestion','$clasificacion','$funcion','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
