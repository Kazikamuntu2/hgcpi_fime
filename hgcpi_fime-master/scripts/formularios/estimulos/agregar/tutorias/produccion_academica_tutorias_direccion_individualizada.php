<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$direccion = $_POST["tipo_dir"];
$titulo = $_POST["titulo_proyecto"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$ies = $_POST["ies_realiza_gestion"];
$horas = $_POST["num_horas"];
$estado = $_POST["estado_direccion"];
$cv = $_POST["considera_cv_ca"];
$nivel = $_POST["nivel_acad"];
$grado = $_POST["grado_acad"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_direccion_individualizada /* tabla de destino */
(tipo_de_direccion,titulo_proyecto_dirigido,estado_de_direccion,fecha_de_inicio,fecha_de_fin,nivel_academico,considera_cv_ca,numero_estudiantes,ies_realiza_gestion,grado_academico,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$direccion','$titulo','$estado','$fecha_inicio','$fecha_fin','$nivel','$cv','$horas','$ies','$grado','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
