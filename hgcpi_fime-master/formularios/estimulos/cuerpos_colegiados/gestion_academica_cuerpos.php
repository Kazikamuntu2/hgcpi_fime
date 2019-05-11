																	<div class="modal-header">
                                                                        <h4 class="modal-title">Gestión nueva</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/cuerpos_colegialos/produccion_academica_cuerposcole_gestion_academica_cuerpos.php" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="tipo_gestion">Tipo de gestión</label>
	                                                                          <input type="text" class="form-control" name="tipo_gestion" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="clasificacion">Clasificación</label>
	                                                                          <input type="text" class="form-control" name="clasificacion" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="funcion">Funcion encomendada</label>
	                                                                          <input type="text" class="form-control" name="funcion" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="organo_presentado">Organo colegiado presentado</label>
	                                                                          <input type="text" class="form-control" name="organo_presentado" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de inicio</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_inicio" class="tuiker form-control" required>
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de fin</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_fin" class="tuiker form-control" required>
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de último reporte presentado</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_ultimo_reporte" class="tuiker form-control" required>
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="aprobado">¿Aprobado?</label>
	                                                                          	<select name="aprobado" class="form-control custom-select" required>
                                                                            		<option value="Si" selected>Si</option>
                                                                            		<option value="No">No</option>
																		  		</select>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="horas_semana">Horas a la semana</label>
	                                                                          <input type="text" class="form-control" name="horas_semana" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="resultados">Resultados obtenidos en la gestión</label>
	                                                                          <input type="text" class="form-control" name="resultados" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="estado_gestion">Estado de la gestion</label>
	                                                                          <input type="text" class="form-control" name="estado_gestion" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="ies_realiza_gestion">IES realiza gestión</label>
	                                                                          <input type="text" class="form-control" name="ies_realiza_gestion" required>
	                                                                        </div>
	                                                                    	<br>
	                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
	                                                                        <br>
	                                                                    </form>
                                                                	</div>
<script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "yy/mm/dd",
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