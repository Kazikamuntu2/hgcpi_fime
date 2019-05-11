  																	
<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM detalle_usuario_produccion_libros WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>
																	<div class="modal-header">
                                                                        <h4 class="modal-title">Editar libro</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    	<form enctype="multipart/form-data" action="scripts/formularios/estimulos/editar/produccion_academica_docencia_libro.php?ident=<?php echo($ident)?>" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="titulo_art" required>Título del libro</label>
                                                                          <input type="text" name="titulo_libro" class="tuiker form-control" value="<?php echo $mostrar['titulo'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_autor" required>Tipo de autor</label>
                                                                          <input type="text" name="tipo_autor" class="tuiker form-control" value="<?php echo $mostrar['tipo_participacion'] ?>" required>
                                                                        </div>
                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Guardar cambios"></center>
                                                                        <br>
                                                                    	</form>
                                                                    </div>