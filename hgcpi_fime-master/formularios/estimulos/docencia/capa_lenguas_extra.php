  																	                               <div class="modal-header">
                                                                        <h4 class="modal-title">Nueva lengua o idioma</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/docencia/produccion_academica_docencia_capa_lenguas_extra.php" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="idioma">Idioma</label>
                                                                          <select name="idioma" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
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
                                                                          <input type="text" class="form-control inst_certi" name="inst_certi" placeholder="" required>
                                                                        </div>

                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
                                                                        <br>
                                                                    </form>
                                                                    </div>
