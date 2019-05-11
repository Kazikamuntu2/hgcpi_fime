<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tipo_gest = $_POST["tipo_capac"];
$clasificacion = $_POST["descripcion"];
$evento = $_POST["fecha_inicio"];
$tipo_evento = $_POST["fecha_fin"];
$fecha_ini = $_POST["num_horas"];
$fecha_fin = $_POST["nom_institucion"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_grados_acad /* tabla de destino */
(tipo_capacitacion,descripcion,fecha_inicio,fecha_fin,numero_de_horas,nombre_institucion,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_cap','$descripcion','$fecha_ini','$fecha_fin','$numero_horas','$nombre_institucion','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
