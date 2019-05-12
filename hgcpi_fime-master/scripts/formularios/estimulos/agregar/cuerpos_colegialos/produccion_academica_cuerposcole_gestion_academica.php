<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
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

$consulta = "INSERT INTO detalle_usuario_gestion_academica /* tabla de destino */
(tipo_gestion,calificacion,evento,tipo_evento,tipo_participacion,tipo_alcance,fecha_inicio,fecha_fin,estado_gestion,ies_realiza_gestion,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_gestion','$calificacion','$evento','$tipo_evento','$participacion','$alcance','$fecha_inicio','$fecha_fin','$estado','$ies','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
