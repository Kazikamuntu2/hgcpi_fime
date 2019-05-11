<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$id = $_POST['id'];

$consulta = "DELETE FROM detalle_usuario_prod_articulos WHERE id='$id'"; //borrar el registro en la tabla

if ($resultado = $mysqli->query($consulta)) { //borrado exitoso
}
else
{
    echo "Error en el proceso de borrado: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
