																	<div class="modal-header">
                                                                        <h4 class="modal-title">Libro nuevo</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    	<form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/docencia/produccion_academica_docencia_libro.php" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="titulo_art" required>Título del libro</label>
                                                                          <input type="text" name="titulo_libro" class="tuiker form-control" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_autor" required>Tipo de autor</label>
                                                                          <input type="text" name="tipo_autor" class="tuiker form-control" required>
                                                                        </div>
                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
                                                                        <br>
                                                                    	</form>
                                                                    </div>