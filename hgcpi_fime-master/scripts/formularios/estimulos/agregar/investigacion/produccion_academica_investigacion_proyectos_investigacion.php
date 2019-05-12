<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$titulos = $_POST["titulo_proyecto"];
$fecha_ini = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$participacion = $_POST["tipo_participacion"];
$monto = $_POST["monto_apoyo"];
$tipo = $_POST["tipo_proyecto"];
$nombre = $_POST["nombre_patrocinador"];
$investigadores = $_POST["investigadores_participantes"];
$patro = $_POST["tipo_patrocinador"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_proyectos_investigacion /* tabla de destino */
(titulo,nombre_patrocinador,fecha_inicio,fecha_fin,tipo_patrocinador,investigadores_participantes,tipo_proyecto,tipo_participacion,monto_apoyo,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$titulos','$nombre','$fecha_ini','$fecha_fin','$patro','$investigadores','$tipo','$participacion','$monto','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
