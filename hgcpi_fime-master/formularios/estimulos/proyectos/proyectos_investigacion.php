																	<div class="modal-header">
                                                                        <h4 class="modal-title">Proyecto de investigación nuevo</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/investigacion/produccion_academica_investigacion_proyectos_investigacion.php" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="">Título del proyecto</label>
	                                                                          <input type="text" class="form-control" name="titulo_proyecto" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de proyecto</label>
	                                                                          <input type="text" class="form-control" name="tipo_proyecto" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de participación</label>
	                                                                          <input type="text" class="form-control" name="tipo_participacion" required>
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
	                                                                          <label for="">Tipo de patrocinador</label>
	                                                                          <input type="text" class="form-control" name="tipo_patrocinador" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Nombre de patrocinador</label>
	                                                                          <input type="text" class="form-control" name="nombre_patrocinador" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Monto de apoyo</label>
	                                                                          <input type="text" class="form-control" name="monto_apoyo" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Investigadores participantes</label>
	                                                                          <textarea class="form-control" name="investigadores_participantes" rows="3" required></textarea>
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