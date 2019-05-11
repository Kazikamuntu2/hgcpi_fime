																	<div class="modal-header">
                                                                        <h4 class="modal-title">Dirección nueva</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/tutorias/produccion_academica_tutorias_direccion_individualizada.php" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="tipo_dir">Tipo de dirección</label>
	                                                                          <input type="text" class="form-control" name="tipo_dir" required>
	                                                                        </div>	
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Título del proyecto dirigido</label>
	                                                                          <textarea class="form-control" name="titulo_proyecto" rows="3" required></textarea>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="nivel_acad">Nivel académico</label>
	                                                                          <input type="text" class="form-control" name="nivel_acad" required>
	                                                                        </div>	
	                                                                        <div class="form-group">
	                                                                          <label for="grado_acad">Grado académico</label>
	                                                                          <input type="text" class="form-control" name="grado_acad" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="ies_realiza_gestion">IES realiza gestión</label>
	                                                                          <input type="text" class="form-control" name="ies_realiza_gestion" required>
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
	                                                                          <label for="num_horas">Número de alumnos</label>
	                                                                          <input type="text" class="form-control" name="num_horas" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Estado de la dirección</label>
	                                                                          <select name="estado_direccion" class="custom-select" required>
					                                                              <option value="Concluida" selected>Concluida</option>
					                                                              <option value="En proceso">En proceso</option>
					                                                          </select>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="considera_cv_ca">Considera C.V. de C.A.</label>
	                                                                          <select name="considera_cv_ca"  class="custom-select" required>
					                                                              <option value="Si" selected>Si</option>
					                                                              <option value="No">No</option>
					                                                          </select>
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