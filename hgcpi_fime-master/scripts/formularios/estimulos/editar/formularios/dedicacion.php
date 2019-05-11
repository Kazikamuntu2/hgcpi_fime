  																	
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
$sql="SELECT * FROM detalle_usuario_carga_academica  WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>
<div class="modal-header">
                                                                        <h4 class="modal-title">Editar carga</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/editar/dedicacion.php?ident=<?php echo($ident)?>" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="dependencia">Dependencia</label>
	                                                                          <input type="text" class="form-control" name="dependencia" required value="<?php echo $mostrar['dependencia'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="nivel">Nivel</label>
	                                                                          <input type="text" class="form-control" name="nivel" required value="<?php echo $mostrar['nivel'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="grado">Grado</label>
	                                                                          <input type="text" class="form-control" name="grado" required value="<?php echo $mostrar['grado'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="materia">Materia</label>
	                                                                          <input type="text" class="form-control" name="materia" required value="<?php echo $mostrar['materia'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="num_grupos">Número de grupos</label>
	                                                                          <input type="text" class="form-control" name="num_grupos" required value="<?php echo $mostrar['num_grupos'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="horas_semana">Número de horas a la semana</label>
	                                                                          <input type="text" class="form-control" name="horas_semana" required value="<?php echo $mostrar['num_horas_semana'] ?>">
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