<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$dependencia = $_POST["dependencia"];
$nivel = $_POST["nivel"];
$grado = $_POST["grado"];
$materia = $_POST["materia"];
$numgrupos = $_POST["num_grupos"];
$horas_semana = $_POST["horas_semana"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_carga_academica /* tabla de destino */
(dependencia,nivel,grado,materia,num_grupos,num_horas_semana,fecha_inicio,fecha_fin,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$dependencia','$nivel','$grado','$materia','$numgrupos','$horas_semana','$fecha_inicio','$fecha_fin','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
