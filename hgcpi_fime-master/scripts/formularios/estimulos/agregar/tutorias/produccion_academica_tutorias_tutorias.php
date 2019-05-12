<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nivel = $_POST["nivel"];
$tipo_tutoria = $_POST["tipo_tutoria"];
$programa_edu = $_POST["pe_que_participa"];
$tipo_pe_e = $_POST["tipo_periodo_escolar"];
$pe_e = $_POST["periodo_escolar"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$area = $_POST["area_conocimiento_tutoria"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_tutoria /* tabla de destino */
(tipo_tutoria,nivel_academico,programa_educativo,tipo_periodo_escolar,periodo_escolar,fecha_de_inicio,fecha_de_fin,area_conocimiento,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_tutoria','$nivel','$programa_edu','$tipo_pe_e','$pe_e','$fecha_inicio','$fecha_fin','$area','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
