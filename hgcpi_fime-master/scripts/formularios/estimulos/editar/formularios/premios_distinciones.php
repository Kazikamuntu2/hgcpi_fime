  																	
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
$sql="SELECT * FROM detalle_usuario_premios_y_distinciones  WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>
<div class="modal-header">
                                                                        <h4 class="modal-title">Editar premio o distinción</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/docencia/produccion_academica_docencia_premios_distinciones.php" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="tipo_reconocimiento">Tipo de reconocimiento</label>
                                                                          <select name="tipo_reconocimiento" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['tipo_distincion']?>">"<?php echo $mostrar['tipo_distincion']?>"</option>
                                                                            <option>Seleccione...</option>
                                                                            <option value="">Sistema Nacional de Creadores</option>
                                                                            <option value="">ESDEPED</option>
                                                                            <option value="">Programa Repartición CONACYT</option>
                                                                            <option value="">Cátedras Patrimoniales CONACYT</option>
                                                                            <option value="">Otro</option>
                                                                            <option value="">Solicitud PRODEP</option>
                                                                            <option value="">Sistema Nacional de Investigadores</option>
                                                                            <option value="">Miembro de la Academia Nacional Acreditada</option>
                                                                            <option value="">Cuerpo Académico</option>
                                                                            <option value="">Miembro de la Academia Mexicana de Ciencias</option>
                                                                            <option value="">CERTIDENMS</option>
																		  </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="nivel">Nivel</label>
                                                                          <select name="nivel" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['nivel']?>">"<?php echo $mostrar['nivel']?>"</option>
                                                                            <option>Seleccione...</option>
                                                                            <option value="">Sistema Nacional de Creadores</option>
																		  </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="ano">Año</label>
                                                                          <input type="text" class="form-control" name="ano" required value="<?php echo $mostrar['ano'] ?>">
                                                                        </div>
                                                                         <div class="form-group">
                                                                          <label for="monto_mensual">Monto mensual</label>
                                                                          <input type="text" class="form-control" name="monto_mensual" required value="<?php echo $mostrar['monto_mensual'] ?>">
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
