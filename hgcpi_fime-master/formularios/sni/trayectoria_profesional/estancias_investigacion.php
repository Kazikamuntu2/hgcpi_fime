																	<div class="modal-header">
                                                                        <h4 class="modal-title">Nueva estancia de investigación</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="#" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="institucion" required>Institución:</label>
                                                                          <input type="text" class="form-control institucion" name="institucion" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="nom_estanc" required>Nombre de la estancia:</label>
                                                                          <input type="text" class="form-control nom_estanc" name="nom_estanc" placeholder="" required>
                                                                    </div>


                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_inicio" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de fin:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_fin" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tipo_estanc" required>Tipo de estancia:</label>
                                                                          <input type="text" class="form-control tipo_estanc" name="tipo_estanc" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area" required>Área de la estancia:</label>
                                                                          <input type="text" class="form-control area" name="area" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="campo" required>Campo de la estancia:</label>
                                                                          <input type="text" class="form-control campo" name="campo" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="disciplina" required>Disciplina de la estancia:</label>
                                                                          <input type="text" class="form-control disciplina" name="disciplina" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="subdisciplina" required>Subdisciplina de la estancia:</label>
                                                                          <input type="text" class="form-control subdisciplina" name="subdisciplina" placeholder="" required>
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