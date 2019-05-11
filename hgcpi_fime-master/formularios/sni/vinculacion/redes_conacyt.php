																	<div class="modal-header">
                                                                        <h4 class="modal-title">Nueva red temática CONACYT</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="#" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="red_conacyt" required>Red temática CONACYT:</label>
                                                                          <input type="text" class="form-control red_conacyt" name="red_conacyt" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de ingreso:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_ingreso" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <hr>
                                                                    INVESTIGADORES PARTICIPANTES <br>
                                                                    <em>(Los siguientes datos van en mayúsculas y si existe más de uno separarlos con una coma ",").</em>
                                                                       
                                                                    <div class="form-group">
                                                                          <label for="nom_colab_red_conacyt" required>Nombre(s):</label>
                                                                          <input type="text" class="form-control nom_colab_red_conacyt" name="nom_colab_red_conacyt" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="prim_ap_red_conacyt" required>Primer apellido:</label>
                                                                          <input type="text" class="form-control prim_ap_red_conacyt" name="prim_ap_red_conacyt" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="seg_ap_red_conacyt" required>Segundo apellido:</label>
                                                                          <input type="text" class="form-control seg_ap_red_conacyt" name="seg_ap_red_conacyt" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="genero_red_conacyt" required>Género:</label>
                                                                          <input type="text" class="form-control genero_red_conacyt" name="genero_red_conacyt" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="nivel_escol">Nivel del escolaridad:</label>
                                                                          <select name="nivel_escol" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="Licenciatura">Licenciatura</option>
                                                                            <option value="Maestría">Maestría</option>
                                                                            <option value="Doctorado">Doctorado</option>
                                                                            </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="nacionalidad" required>Nacionalidad:</label>
                                                                          <input type="text" class="form-control nacionalidad" name="nacionalidad" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="inst_adscrip" required>Institución de adscripción:</label>
                                                                          <input type="text" class="form-control inst_adscrip" name="inst_adscrip" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area_red_conacyt" required>Área:</label>
                                                                          <input type="text" class="form-control area_red_conacyt" name="area_red_conacyt" placeholder="" required>
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_red_conacyt" required>Campo:</label>
                                                                            <input type="text_art" class="form-control campo_red_conacyt" name="campo_red_conacyt" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_red_conacyt" required>Disciplina:</label>
                                                                            <input type="text" class="form-control disciplina_red_conacyt" name="disciplina_red_conacyt" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_red_conacyt" required>Subdisciplina:</label>
                                                                            <input type="text" class="form-control subdisciplina_red_conacyt" name="subdisciplina_red_conacyt" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="pertenece_sni">¿Pertenece a SNI?:</label>
                                                                          <select name="pertenece_sni" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="Sí">Sí</option>
                                                                            <option value="No">No</option>
                                                                             </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="hrs_colab" required>Tiempo en horas de colaboración:</label>
                                                                            <input type="text" class="form-control hrs_colab" name="hrs_colab" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tipo_colab">Tipo de colaborador:</label>
                                                                          <select name="tipo_colab" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="Asistente SNI">Asistente SNI</option>
                                                                            <option value="Asistente no SNI">Asistente no SNI</option>
                                                                            <option value="Becario SNI">Becario SNI</option>
                                                                            <option value="Becario no SNI">Becario no SNI</option>
                                                                            <option value="Catedrárico CONACYT">Catedrárico CONACYT</option>
                                                                            <option value="Catedrático no CONACYT">Catedrático no CONACYT</option>
                                                                            <option value="Empresario">Empresario</option>
                                                                            <option value="Funcionario público">Funcionario público</option>
                                                                            <option value="Investigador SNI">Investigador SNI</option>
                                                                            <option value="Investigador no SNI">Investigador no SNI</option>
                                                                            <option value="Posdoctorado SNI">Posdoctorado SNI</option>
                                                                            <option value="Posdoctorado no SNI">Posdoctorado no SNI</option>
                                                                            <option value="Servicio Social">Servicio Social</option>
                                                                            <option value="Otro">Otro</option>
                                                                             </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tel" required>Teléfono:</label>
                                                                          <input type="text" class="form-control tel" name="tel" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="movil" required>Móvil:</label>
                                                                          <input type="text" class="form-control movil" name="movil" placeholder="" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="correo" required>Correo:</label>
                                                                          <input type="text" class="form-control correo" name="correo" placeholder="" required>
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