<?php

session_start();
$mysqli = new mysqli("localhost", "root", "", "hgcpi");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Fallo en la conexion: %s\n", mysqli_connect_error());
    exit();
}
else
{
	printf("Conexion realizada con exito.");
}
?>
