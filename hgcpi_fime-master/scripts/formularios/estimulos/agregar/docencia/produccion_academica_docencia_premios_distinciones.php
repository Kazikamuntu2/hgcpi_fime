<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tipo_recon = $_POST["tipo_reconocimiento"];
$nivelo = $_POST["nivel"];
$anos = $_POST["ano"];
$monto_men = $_POST["monto_mensual"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_premios_y_distinciones /* tabla de destino */
(tipo_distincion,nivel,ano,monto_mensual,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_recon','$nivelo','$anos','$monto_men','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../estimulos.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
