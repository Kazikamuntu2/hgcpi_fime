 <div class="modal-header">
    <h4 class="modal-title">Gestion académica</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="#" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Tipo de gestion:</label>
   <input type="text" class="form-control inst_certi" name="tipo_gestion_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Cargo dentro de la comisión o cuerpo colegiado: </label>
   <input type="text" class="form-control inst_certi" name="cargo_gestion_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Función encomendada:</label>
   <input type="text" class="form-control inst_certi" name="funcion_gestion_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> (Mayúsculas) <br> Órgano colegiado al que fue presentado: </label>
   <input type="text" class="form-control inst_certi" name="organo_gestion_prodep" placeholder="" required>
   </div>                                                           



<div class="form-group">
  <label for="aprobado_gestion_prodep" required>Aprobado:</label>
  <select name="aprobado_gestion_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="si">Si</option>
  <option value="si">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" > (Puede ir vacio) <br> Resultados obtenidos: </label>
   <input type="text" class="form-control inst_certi" name="resultados_gestion_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" > (Puede ir vacio) <br> Estado: </label>
   <input type="text" class="form-control inst_certi" name="estado_gestion_prodep"placeholder="">
   </div>

<div class="form-group">
   <label for="descripcion" required> (31/12/9999) <br> Fecha de inicio: </label>
   <input type="text" class="form-control inst_certi" name="fecha_inicio_gestion_prodep"placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> (31/12/9999) <br> Fecha de fin: </label>
   <input type="text" class="form-control inst_certi" name="fecha_fin_gestion_prodep"placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> (31/12/9999) <br> Fecha de ultimo informe presentado: </label>
   <input type="text" class="form-control inst_certi" name="fecha_informe_gestion_prodep"placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> Horas dedicadas a la semana a la gestion: </label>
   <input type="text" class="form-control inst_certi" name="horas_semana_gestion_prodep"placeholder="" required>
   </div>

<br>
<center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
<br>
</form>
</div>