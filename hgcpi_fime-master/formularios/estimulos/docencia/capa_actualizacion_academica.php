																	<div class="modal-header">
                                                                        <h4 class="modal-title">Nueva capacitacion y actualizacion academica</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/docencia/produccion_academica_docencia_capa_actualizacion_academica" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="tipo_cap">Tipo:</label>
                                                                          <select id="tipo_cap" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="Curso de actualizacion disciplinaria">Curso de actualizacion disciplinaria</option>
                                                                            <option value="Curso de actualizacion pedagogica">Curso de actualizacion pedagogica</option>
                                                                            <option value="Diplomado de actualizcion disciplinaria">Diplomado de actualizcion disciplinaria</option>
                                                                            <option value="Diplomado de actualizcion pedagogica">Diplomado de actualizcion pedagogica</option>
                                                                            <option value="Diplomado en formacion basica de tutores">Diplomado en formacion basica de tutores</option>
                                                                            <option value="Diplomado basico en docencia universitaria">Diplomado basico en docencia universitaria</option>
                                                                            <option value="Curso en area administrativa">Curso en area administrativa</option>
                                                                            <option value="Diplomado en area administrativa">Diplomado en area administrativa</option>

                                                                           </select>
                                                                        </div>
                                                                        
                                                                          <div class="form-group">
                                                                          <label for="descripcion" required>Descripcion:</label>
                                                                          <input type="text" class="form-control inst_certi" id="descripcion" placeholder="" required>
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
                                                                            
                                                                        <div class="form-group">
                                                                          <label for="nom_inst" required>Nombre de la institucion:</label>
                                                                          <input type="text" class="form-control num_hrs" id="nom_inst" placeholder="" required>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                          <label for="num_hrs" required>Numero de horas:</label>
                                                                          <input type="text" class="form-control num_hrs" id="num_hrs" placeholder="" required>
                                                                        </div>

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
            dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
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