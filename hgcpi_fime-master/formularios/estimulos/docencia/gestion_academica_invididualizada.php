  																	                               <div class="modal-header">
                                                                        <h4 class="modal-title">Nueva gestión</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/docencia/produccion_academica_docencia_gestion_academica_invididualizada.php" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="tipo_gest_aca">Tipo de Gestión Académica:</label>
                                                                          <select id="tipo_gest_aca" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="dimension_social ">Dimensión social</option>
                                                                            <option value="dimension_politico-institucional">Dimensión político-institucional</option>
                                                                            <option value="dimension_administrativa">Dimensión administrativa</option>
                                                                            <option value="dimension_tecnico-pedagogica">Dimensión técnico-pedagógica</option>
                                                                            <option value="dimension_directiva">Dimensión directiva</option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="clasificacion" required>Clasificación</label>
                                                                          <select id="clasificacion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                <option value=""></option>    
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="evento">Evento:</label>
                                                                          <input type="text" class="form-control" id="evento" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_evento" required>Tipo de evento:</label>
                                                                          <select id="tipo_evento" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_participacion" required>Tipo de participación:</label>
                                                                          <select id="tipo_participacion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_alcance" required>Tipo de alcance:</label>
                                                                          <select id="tipo_alcance" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                <option value="local">Local</option>
                                                                                <option value="regional">Regional</option>
                                                                                <option value="estatal">Estatal</option>
                                                                                <option value="nacional">Nacional</option>
                                                                                <option value="internacional">Internacional</option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha_inicio" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha fin:</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha_fin" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="estado_gestion" required>Estado de la gestión:</label>
                                                                          <select id="estado_gestion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                
                                                                          </select>
                                                                        </div>
                                                                        <fieldset class="form-group">
                                                                        <div class="row">
                                                                            <legend class="col-form-label col-8">IES realiza gestión</legend>
                                                                                <div class="col-sm-10">
                                                                                    <div class="form-check">
                                                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                                                      <label class="form-check-label" for="exampleRadios1">
                                                                                        Sí
                                                                                      </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                                                      <label class="form-check-label" for="exampleRadios2">
                                                                                        No
                                                                                      </label>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                        </fieldset>
                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
                                                                        <br>
                                                                    </form>
                                                                    </div>
<script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "dd/mm/yy",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            //Abreviatura de los dias largos
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            //Escribir los meses
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            //Abreviatura de los meses
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
                $('#fecha').val(dateText);
            }
        });
</script>