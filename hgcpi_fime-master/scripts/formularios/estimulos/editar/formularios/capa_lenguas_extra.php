  																	
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
$sql="SELECT * FROM detalle_usuario_lenguas_e_idiomas WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>
																	<div class="modal-header">
                                                                        <h4 class="modal-title">Editar lengua o idioma</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/editar/capa_lenguas_extra.php?ident=<?php echo($ident)?>" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="idioma">Idioma</label>
                                                                          <select name="idioma" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['idioma']?>">"<?php echo $mostrar['idioma']?>"</option>
                                                                            <option>Seleccione...</option>
                                                                            <option value="Español">Español</option>
                                                                            <option value="Inglés">Inglés</option>
                                                                            <option value="Francés">Francés</option>
                                                                            <option value="Alemán">Alemán</option>
                                                                            <option value="Chino">Chino</option>
                                                                            <option value="Japonés">Japonés</option>
                                                                            <option value="Coreano">Coreano</option>
                                                                            <option value="Ruso">Ruso</option>
                                                                            <option value="Italiano">Italiano</option>

                                                                           </select>
                                                                        </div>
                                                                        
                                                                          <div class="form-group">
                                                                          <label for="inst_certi" required>Institución que certifica</label>
                                                                          <input type="text" class="form-control inst_certi" name="inst_certi" placeholder="" required value="<?php echo $mostrar['institucion_que_otorga'] ?>">
                                                                        </div>

                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Guardar cambios"></center>
                                                                        <br>
                                                                    </form>
                                                                    </div>
