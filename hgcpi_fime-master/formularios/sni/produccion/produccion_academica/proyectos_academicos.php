																	<div class="modal-header">
                                                                        <h4 class="modal-title">Nuevo capítulo</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="#" method="POST">


                                                                    <div class="form-group">
                                                                          <label for="nom_proy" required>Nombre del proyecto:</label>
                                                                          <input type="text" class="form-control nom_proy" name="nom_proy" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tipo_proy" required>Tipo de proyecto:</label>
                                                                          <input type="text" class="form-control tipo_proy" name="tipo_proy" placeholder="" required>
                                                                    </div>


                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_inicio" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>
                                                                     
                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de fin:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_fin" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="insti_proy" required>Institución:</label>
                                                                          <input type="text" class="form-control insti_proy" name="insti_proy" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area_proy" required>Área de conocimiento del proyecto:</label>
                                                                          <input type="text" class="form-control area_proy" name="area_proy" placeholder="" required>
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_proy" required>Campo del proyecto:</label>
                                                                            <input type="text_art" class="form-control campo_proy" name="campo_proy" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_proy" required>Disciplina del proyecto:</label>
                                                                            <input type="text" class="form-control disciplina_proy" name="disciplina_proy" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_proy" required>Subdisciplina del proyecto:</label>
                                                                            <input type="text" class="form-control subdisciplina_proy" name="subdisciplina_proy" placeholder="" required>
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