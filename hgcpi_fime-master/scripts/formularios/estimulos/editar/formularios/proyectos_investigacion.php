  																	
<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM detalle_usuario_proyectos_investigacion WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>
																	<div class="modal-header">
                                                                        <h4 class="modal-title">Editar proyecto de investigación</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/editar/proyectos_investigacion.php?ident=<?php echo($ident)?>" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="">Título del proyecto</label>
	                                                                          <input type="text" class="form-control" name="titulo_proyecto" required value="<?php echo $mostrar['titulo'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de proyecto</label>
	                                                                          <input type="text" class="form-control" name="tipo_proyecto" required value="<?php echo $mostrar['tipo_proyecto'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de participación</label>
	                                                                          <input type="text" class="form-control" name="tipo_participacion" required value="<?php echo $mostrar['tipo_participacion'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de inicio</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_inicio" class="tuiker form-control" required value="<?php echo $mostrar['fecha_inicio'] ?>">
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de fin</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_fin" class="tuiker form-control" required value="<?php echo $mostrar['fecha_fin'] ?>">
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de patrocinador</label>
	                                                                          <input type="text" class="form-control" name="tipo_patrocinador" required value="<?php echo $mostrar['tipo_patrocinador'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Nombre de patrocinador</label>
	                                                                          <input type="text" class="form-control" name="nombre_patrocinador" required value="<?php echo $mostrar['nombre_patrocinador'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Monto de apoyo</label>
	                                                                          <input type="text" class="form-control" name="monto_apoyo" required value="<?php echo $mostrar['monto_apoyo'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Investigadores participantes</label>
	                                                                          <textarea class="form-control" name="investigadores_participantes" rows="3" required><?php echo $mostrar['investigadores_participantes'] ?></textarea>
	                                                                        </div>
	                                                                    	<br>
	                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Guardar cambios"></center>
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