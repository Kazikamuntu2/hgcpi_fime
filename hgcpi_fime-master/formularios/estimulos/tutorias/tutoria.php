																	<div class="modal-header">
                                                                        <h4 class="modal-title">Tutoría nueva</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/tutorias/produccion_academica_tutorias_tutorias.php" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="">Nivel</label>
	                                                                          <input type="text" class="form-control" name="nivel" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de tutoría</label>
	                                                                          <input type="text" class="form-control" name="tipo_tutoria" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Programa educativo en el que participa</label>
	                                                                          <input type="text" class="form-control" name="pe_que_participa" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de periodo escolar</label>
	                                                                          <input type="text" class="form-control" name="tipo_periodo_escolar" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Periodo escolar</label>
	                                                                          <input type="text" class="form-control" name="periodo_escolar" required>
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
	                                                                          <label for="">Area del conocimiento de la tutoría</label>
	                                                                          <input type="text" class="form-control" name="area_conocimiento_tutoria" required>
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