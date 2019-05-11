<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "hgcpi");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$user = $_POST['usuario'];
$passw = $_POST['pass'];

/* buscar si el usuario existe */
$consulta = "SELECT idusuario FROM usuario WHERE idusuario='$user' AND clave='$passw'";

if ($resultado = $mysqli->query($consulta)) {

$row_cnt = $resultado->num_rows;
if($row_cnt == 0) {

    echo 'El usuario no existe.'; header('Location: ../index.php'); exit;
    $resultado->close();
}
}

/* comprobar si es la primera vez que entra para que llene sus datos personales */
$consulta = "SELECT cantidad_de_ingresos FROM usuario WHERE idusuario='$user' AND clave='$passw'";

if ($resultado = $mysqli->query($consulta)) {

$row_cnt = $resultado->num_rows;
if($row_cnt == 0) {echo 'El usuario no existe.'; header('Location: ../index.php'); exit;}
 
 while ($fila = $resultado->fetch_row()) {
        if($fila[0] == 0)
        {
            header('Location: ../datos_personales.php');
        }
        else
        {
            header('Location: ../estimulos.php');
        }
    }
     $resultado->close();
}
$mysqli->close();
?>

