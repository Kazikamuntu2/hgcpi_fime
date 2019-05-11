<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$fecha = $_POST["fecha_servicio"];
$tipo_servicio = $_POST["tipo_servicio"];
$tipo_prestado = $_POST["servicio_prestado"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_servicios_prestados /* tabla de destino */
(tipo_servicio,servicio_prestado,fecha_servicio,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$fecha','$tipo_servicio','$tipo_prestado','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
