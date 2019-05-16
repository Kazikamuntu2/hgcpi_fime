<?php 
  
  $conexion=mysqli_connect('localhost','root','','hgcpi');

  /*scripts de sesion*/

  session_start();

  if(!isset($_SESSION['usuario'])) { header("Location: index.php"); }
  
  $usuario = $_SESSION['usuario'];

  $sql="SELECT * FROM usuario WHERE idusuario='$usuario'";
  $result=mysqli_query($conexion,$sql);
  $mostrar=mysqli_fetch_array($result);

  /*scripts de sesion*/

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>PRODEP | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <header>
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120" height="40" class="d-inline-block align-top"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Convocatorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="estimulos.php">Estímulos UANL</a>
                          <a class="dropdown-item" href="prodep.php">PRODEP</a>
                          <a class="dropdown-item" href="sni.php">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="perfil.php#datos">Datos Personales</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="perfil.php"><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></a></span>
                  </div>
            </nav>
    </header>

        <div class="container">
            <div class="row-mt-4">
                <div class="col-12">
                    <br><br>
                    <h2><center>Convocatoria de PRODEP</center></h2>
                    <hr><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <div id="accordion">
                <!--CARD#1-->
                <div class="card border-0">
                  <div class="btn btn-dark border-light" id="header1">
                      <a class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Curriculum</a>
                  </div>
                  <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1" aria-expanded="true" aria-controls="subcollapse1">Estudios realizados</a>
                                  </div>
                                  <div id="subcollapse1" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                      <div class="card-body">
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Estudios realizados</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaEst" onclick="validarEstudiosRealizados()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                 <div class="modal fade" id="ventanaEst" tabindex="-1" role="dialog" aria-labelledby="ventanaEstudios">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaEstudios">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Estudios</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Nivel de estudios</th>
                                                      <th>Estudios en</th>
                                                      <th>Área -> Disciplina</th>   <!-- Creo que el llenado debe ser Enfoque → Ciencias -->
                                                      <th>Institución otorgante</th>
                                                      <!--Instirución otorgante no considerada en el catálogo-->
                                                      <th>Paises donde ha estudiado</th>
                                                      <!-- En cada pais debe agregar la fecha de inicio de estudios y fin de estudios y fecha de obtencion de su título -->
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_grados_acad WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['nivel_estudios'] ?></td>
                                                    <td><?php echo $mostrar['titulo'] ?></td>
                                                    <td><?php echo $mostrar['disciplina'] ?></td>
                                                    <td><?php echo $mostrar['nombre_institucion'] ?></td>
                                                    <td><?php echo $mostrar['pais_institucion'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaEst" onclick="editarEstudios(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                     <td><center><button class="btn btn-danger" onclick="borrarEstudios(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-light" id="subheader2">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse2">Datos laborales</a>
                                  </div>
                                  <div id="subcollapse2" class="collapse" aria-labelledby="subheader2" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Datos laborales</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaLaborales" onclick="validarDatosLaborales()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaLaborales" tabindex="-1" role="dialog" aria-labelledby="ventanaDatosLaborales">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaDatosLaborales">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus datos laborales</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Dedicación</th>
                                                      <th>Institución de educación superior</th>
                                                      <th>Dependencia de educación superior</th>
                                                      <th>Cronología</th>
                                                      
                                                       <!--Unidad académica
                                                           Inicio del contrato
                                                           Fin del contrato
                                                           Cronología   -->
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_experiencia_laboral WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['empleo_actual'] ?></td>
                                                    <td><?php echo $mostrar['institucion'] ?></td>
                                                    <td><?php echo $mostrar['dependencia'] ?></td>
                                                    <td><?php echo $mostrar['cronologia'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaLaborales" onclick="editarDatosLaborales(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarDatosLaborales(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>


                                  <div class="btn btn-secondary border-light" id="subheader3">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse2">Premios y distinciones</a>
                                  </div>
                                  <div id="subcollapse3" class="collapse" aria-labelledby="subheader3" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Premios y distinciones</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana_Premios" onclick="validarPremiosProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventana_Premios" tabindex="-1" role="dialog" aria-labelledby="ventanaPremios">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaPremios">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Premios y distinciones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Nombre</th> 
                                                      <th>Motivo</th>
                                                      <th>Fecha</th> <!--Formato 31-12-9999 -->
                                                      <th>Institución otorgante</th>
                                                      <!--
                                                      Institución Otrogante no considerada en el Catálogo
                                                    -->
                                                      
                                                       
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_premios_y_distinciones WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['nombre_distincion'] ?></td>
                                                    <td><?php echo $mostrar['motivo'] ?></td>
                                                    <td><?php echo $mostrar['fecha'] ?></td>
                                                    <td><?php echo $mostrar['institucion_que_otorga'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                     <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventana_Premios" onclick="editarPremios(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarPremios(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                                    <!-- SEGUNDA SECCIÓN docencia -->
                                    <div class="btn btn-dark border-light" id="header2">
                      <a class="btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Docencia</a>
                  </div>
                  <div id="collapse2" class="collapse" aria-labelledby="header2" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_docencia">
                              <div class="card">
                                
                                  <div class="btn btn-secondary border-light" id="subheader3">
                                     <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse3">Clases docentes</a>
                                  </div>
                                  <div id="subcollapse3" class="collapse" aria-labelledby="subheader3" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                          <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Clases impartidas</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaDocencia" onclick="validarDocenciaProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaDocencia" tabindex="-1" role="dialog" aria-labelledby="ventanaDocenciaProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaDocenciaProdep">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Clases docentes</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Materia</th>
                                                      <th>Institución</th>
                                                      <th>Dependencia</th>
                                                      <th>Programa educativo</th>
                                                      <th>Nivel</th>
                                                    <!-- Fecha de inicio de estudios
                                                        Numero de alumnos
                                                        Duración en semanas
                                                        Horas de asesoria al mes
                                                        Horas semanales dedicadas al curso-->
                                              </thead>
                                              <tbody>
                                                 <?php 
                                                  $sql="SELECT * FROM detalle_usuario_docencia WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['nombre_curso'] ?></td>
                                                    <td><?php echo $mostrar['nombre_institucion_ies'] ?></td>
                                                    <td><?php echo $mostrar['dependencia'] ?></td>
                                                    <td><?php echo $mostrar['nombre_programa_educativo'] ?></td>
                                                    <td><?php echo $mostrar['nivel'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaDocencia" onclick="editarDocencia(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                     <td><center><button class="btn btn-danger" onclick="borrarClases(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>



                                      </div>
                                  </div>
                                  

                                     <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_docencia" aria-expanded="true" aria-controls="subcollapse2_docencia">Tutoría</a>
                                  </div>
                                 <div id="subcollapse2_docencia" class="collapse" aria-labelledby="subheader2_docencia" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                          <div class="form-group">
                                              <div class="row">
                                                  <div class="col-9">
                                                      <h4>Tutoría</h4>
                                                  </div>
                                           <div class="col-3">
                                              <h5><right>Tipo de tutoria:</right></h5>
                                              <select name="seleccion_tipo_tutoria" id="tipo_tutoria" class="custom-select">
                                              <option value="seleccion">Seleccione...</option>
                                              <option value="individual">Tutoría individual</option>
                                              <option value="grupal">Tutoria grupal</option>
                                              </select>
                                          </div>
                                              </div>
                                          </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario5" onclick="validarTutoriaProdep()">Agregar nuevo</button><br><br>
                                             
                                              <!-- VENTANA PARA LOS FORMULARIOS -->


                                                  <div class="modal fade" id="ventanaFormulario5" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario5">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioTutoria">
                                                      </div>
                                                  </div>  
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          

                                          <hr><br><center><h5>Sus tutorías individuales</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                      
                                                      <th>Nivel</th>
                                                      <th>Programa educativo</th>
                                                      <th>Fecha de inicio</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_tutoria WHERE usuario_idusuario='$usuario' AND tipo_tutoria='individual'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    
                                                    <td><?php echo $mostrar['nivel_academico'] ?></td>
                                                    <td><?php echo $mostrar['programa_educativo'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_inicio'] ?></td>
                                                
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario5" onclick="editarIndividual(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarIndividual(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>

                                          <br>
                                          <hr><br><center><h5>Sus tutorías grupales</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Número de Alumnos</th>
                                                      <th>Nivel</th>
                                                      <th>Programa educativo</th>
                                                      <th>Fecha de inicio</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                   <?php 
                                                  $sql="SELECT * FROM detalle_usuario_tutoria WHERE usuario_idusuario='$usuario' AND tipo_tutoria='grupal'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['numero_estudiantes'] ?></td>
                                                    <td><?php echo $mostrar['nivel_academico'] ?></td>
                                                    <td><?php echo $mostrar['programa_educativo'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_inicio'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario5" onclick="editarGrupal(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                      <td><center><button class="btn btn-danger" onclick="borrarGrupal(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                                    
                                              </tbody>
                                          </table>
                                          <br><hr><br>




                                      </div>
                                  </div>

                                 <div class="btn btn-secondary border-light" id="subheader3">
                                     <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse_dir_ind" aria-expanded="true" aria-controls="subcollapse3">Dirección individualizada</a>
                                  </div>
                                  <div id="subcollapse_dir_ind" class="collapse" aria-labelledby="subheader3" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Dirección individualizada</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaDireccion" onclick="validarDireccionIndividualProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaDireccion" tabindex="-1" role="dialog" aria-labelledby="ventanaDireccionIndividualProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaDireccionIndividualProdep">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Dirección indivudalizada</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Título de tesis</th> 
                                                      <th>Grado Académico</th>
                                                      <th>Fecha inicio</th>
                                                      <th>Fecha fin</th>
                                                      
                                                      <!--Estado de la dirección individualizada:
                                                          Para considerar en curriculum de cuerpo academico? Y/N
                                                          Miembros:
                                                          LGAC:
                                                        --> 
                                                      
                                                  </tr>
                                              </thead>
                                             <tbody>
                                                  
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_direccion_individualizada WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['titulo_proyecto_dirigido'] ?></td>
                                                    <td><?php echo $mostrar['grado_academico'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_fin'] ?></td>
                                                   
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaDireccion" onclick="editarDireccion(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarDireccion(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>




                                  <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4_docencia" aria-expanded="true" aria-controls="subcollapse4_docencia">Gestión académica</a>
                                  </div>
                                  <div id="subcollapse4_docencia" class="collapse" aria-labelledby="subheader4_docencia" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Gestión académica</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaGestion" onclick="validarGestionProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaGestion" tabindex="-1" role="dialog"                                  aria-labelledby="ventanaGestionProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaGestionProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Gestión académica</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Tipo de gestión</th> <!--Colectivo o individual-->
                                                      <th>Cargo dentro de la comisión</th>
                                                      <th>Función</th>
                                                      <th>Órgano colegiado</th>
                                                      <th>¿Aprobado?</th><!-- (Y/N) -->
                                                     
                                                      <!--
                                                      Resultados obtenidos (Puede ir vacio)
                                                      Estado               (Puede ir vacio)
                                                      Fecha inicio
                                                      Fecha Fin             (TODAS LAS FECHAS EN FORMATO 31-12-9999)
                                                      Fecha del ultimo informe presentado
                                                      Horas dedicadas a la semana a esta gestión
                                                      -->
                                                     
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                   <?php 
                                                  $sql="SELECT * FROM detalle_usuario_gestion_academica WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['tipo_gestion'] ?></td>
                                                    <td><?php echo $mostrar['cargo_comision'] ?></td>
                                                    <td><?php echo $mostrar['funcion_encomendada'] ?></td>
                                                    <td><?php echo $mostrar['organo_colegiado'] ?></td>
                                                    <td><?php echo $mostrar['aprobado'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaGestion" onclick="editarGestion(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                     <td><center><button class="btn btn-danger" onclick="borrarGestion(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>


                          <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse5_docencia" aria-expanded="true" aria-controls="subcollapse5_docencia">Línea de generación y aplicación del conocimiento (LGAC)</a>
                                  </div>
                                  <div id="subcollapse5_docencia" class="collapse" aria-labelledby="subheader5_docencia" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Línea de generación y aplicación del conocimiento (LGAC)</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaLGAC" onclick="validarLGACProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaLGAC" tabindex="-1" role="dialog" aria-labelledby="ventanaLGACProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaLGACProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Línea de generación y aplicación del conocimiento (LGAC)</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Línea</th>
                                                      <th>Actividades que realiza</th>
                                                      <th>Horas de la semana dedicades a LGAC</th>
 
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_lgac WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['linea'] ?></td>
                                                    <td><?php echo $mostrar['actividades_que_realiza'] ?></td>
                                                    <td><?php echo $mostrar['horas_semana_dedicadas'] ?></td>
                                                   
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                     <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaLGAC" onclick="editarlgac(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarLGAC(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>


                          <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse6_docencia" aria-expanded="true" aria-controls="subcollapse6_docencia">Cuerpo académico</a>
                                  </div>
                                  <div id="subcollapse6_docencia" class="collapse" aria-labelledby="subheader6_docencia" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Cuerpo académico</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaCuerpo" onclick="validarCuerpoProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaCuerpo" tabindex="-1" role="dialog" aria-labelledby="ventanaCuerpoProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaCuerpoProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Cuerpo académico</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Nombre del cuerpo académico</th>
                                                      <th>Clave</th>
                                                      <th>Grado de consolación</th>
                                                      <th>Línea(s) que cultiva el cuerpo académico</th> <!-- Como no tuvo entonces se pone la estructura, pero no se llena*
 -->
 
                                                      
                                                  </tr>
                                              </thead>
                                               <?php 
                                                  $sql="SELECT * FROM detalle_usuario_cuerpo_academico WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['nombre_cuerpo_academico'] ?></td>
                                                    <td><?php echo $mostrar['cuerpo_academico_clave'] ?></td>
                                                    <td><?php echo $mostrar['grado_consolacion'] ?></td>
                                                    <td><?php echo $mostrar['linea_cultiva_cuerpo_academico'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaCuerpo" onclick="editarCuerpo(<?php echo $mostrar['id']?>)">Editar</button></center></td>

                                                    <td><center><button class="btn btn-danger" onclick="borrarCuerpo(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>



                            <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse7_docencia" aria-expanded="true" aria-controls="subcollapse7_docencia">Actualización de programas educativos</a>
                                  </div>
                                  <div id="subcollapse7_docencia" class="collapse" aria-labelledby="subheader7_docencia" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Programas educativos actualizados</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaProgramaEducativo" onclick="validarProgramaEducativoProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaProgramaEducativo" tabindex="-1" role="dialog" aria-labelledby="ventanaProgramaEducativoProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaProgramaEducativoProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Programas educativos actualizados</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Programa educativo</th>
                                                      <th>Fecha</th>
                                                      <th>Tipo de actualización</th>
                                                   
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                    <!--
                                                      <td>ITS</td>
                                                      <td>29/02/2017</td>
                                                      <td>Asignarle una Red de Materias que tenga sentido</td>
                                                      -->

                                                       <?php 
                                                  $sql="SELECT * FROM detalle_usuario_actualizacion_pe WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['nombre_pe'] ?></td>
                                                    <td><?php echo $mostrar['fecha_implementacion_cambio'] ?></td>
                                                    <td><?php echo $mostrar['en_que_consiste_actualizacion'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                     <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaProgramaEducativo" onclick="editarprogramas(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarPrograma(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                                      
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>



                              </div>
                          </div>
                      </div>
                  </div>
                                    <!-- TERCERA SECCIÓN PRODUCCION -->
                                    <div class="btn btn-dark border-light" id="header3">
                      <a class="btn" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Producción</a>
                  </div>
                  <div id="collapse3" class="collapse" aria-labelledby="header3" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_produccion">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_produccion" aria-expanded="true" aria-controls="subcollapse1_produccion">Artículo</a>
                                  </div>
                                  <div id="subcollapse1_produccion" class="collapse" aria-labelledby="subheader1_produccion" data-parent="#subaccordion_produccion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Artículo</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaArticulo" onclick="validarArticuloProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaArticulo" tabindex="-1" role="dialog" aria-labelledby="ventanaArticuloProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaArticuloProdep">
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Producción de artículos</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Autores</th> <!--Separados por ","-->
                                                      <th>Título</th>
                                                      <th>Estado</th>
                                                      <th>Nombre de la revista</th>
                                                      <th>País</th>
                                                     
                                                      <!--
                                                      Editorial
                                                      Volumen
                                                      ISSN
                                                      Año
                                                      Propósito
                                                      Para considerar para el curriculum de cuerpo académico (Y/N)
                                                      Miembros
                                                      LGACs
                                                      -->
                                                     
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <?php 
                                                  $sql="SELECT * FROM detalle_usuario_prod_articulos WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['autores'] ?></td>
                                                    <td><?php echo $mostrar['nombre_art'] ?></td>
                                                    <td><?php echo $mostrar['estado_art'] ?></td>
                                                    <td><?php echo $mostrar['nombre_revista'] ?></td>
                                                    <td><?php echo $mostrar['pais'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                       <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaArticulo" onclick="editarArticulo(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarArticulo(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>




                                  <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_produccion" aria-expanded="true" aria-controls="subcollapse2_produccion">Libro</a>
                                  </div>
                                  <div id="subcollapse2_produccion" class="collapse" aria-labelledby="subheader2_produccion" data-parent="#subaccordion_produccion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Libro</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaLibro" onclick="validarLibroProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaLibro" tabindex="-1" role="dialog" aria-labelledby="ventanaLibro">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaLibroProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Producción de libros</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Autores</th> <!--Separados por ","-->
                                                      <th>Título</th>
                                                      <th>Estado</th>
                                                      <th>Editorial</th>
                                                      <th>País</th>
                                                     
                                                      <!--
                                                      Tipo de Particupación
                                                      Paginas
                                                      No.Ediciones
                                                      Total de ejemplares
                                                      ISBN
                                                      Año
                                                      Propósito
                                                      Para considerar en curriculum de cuerpo académico (Y/N)
                                                      Miembros
                                                      LGACs
                                                      -->
                                                     
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                 <?php 
                                                  $sql="SELECT * FROM detalle_usuario_produccion_libros WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['autores'] ?></td>
                                                    <td><?php echo $mostrar['titulo'] ?></td>
                                                    <td><?php echo $mostrar['estado_actual'] ?></td>
                                                    <td><?php echo $mostrar['editorial'] ?></td>
                                                    <td><?php echo $mostrar['pais'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaLibro" onclick="editarLibros(<?php echo $mostrar['id']?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarLibro(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>



                          <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3_produccion" aria-expanded="true" aria-controls="subcollapse3_produccion">Memorias en extenso</a>
                                  </div>
                                  <div id="subcollapse3_produccion" class="collapse" aria-labelledby="subheader3_produccion" data-parent="#subaccordion_produccion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Memorias en extenso</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaMemorias" onclick="validarMemoriasProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaMemorias" tabindex="-1" role="dialog" aria-labelledby="ventanaMemorias">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaMemoriasProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Producción de Memorias en extenso</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Autores</th> <!--Separados por ","-->
                                                      <th>Título</th>                                                      
                                                      <th>Congreso</th>
                                                      <th>Pais</th>
                                                     
                                                     
                                                      <!--
                                                      Ciudad
                                                      Año
                                                      De la pagina :  a la pagina: 
                                                      Estado actual:
                                                      Propósito
                                                      Para considerar en curriculum de cuerpo académico (Y/N)
                                                      Miembros
                                                      LGACs
                                                      -->
                                                     
                                                    </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                     <?php 
                                                  $sql="SELECT * FROM detalle_usuario_memorias WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['autores_colaboradores'] ?></td>
                                                    <td><?php echo $mostrar['titulo_de_obra'] ?></td>
                                                    <td><?php echo $mostrar['congreso_donde_se_presento'] ?></td>
                                                     <td><?php echo $mostrar['pais'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaMemorias" onclick="editarMemorias(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                   <td><center><button class="btn btn-danger" onclick="borrarMemorias(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                <?php 
                                                }
                                                ?>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>




                          <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4_produccion" aria-expanded="true" aria-controls="subcollapse4_produccion">Proyectos de investigación</a>
                                  </div>
                                  <div id="subcollapse4_produccion" class="collapse" aria-labelledby="subheader4_produccion" data-parent="#subaccordion_produccion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Proyectos de investigación</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaInvestigacion" onclick="validarInvestigacionProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaInvestigacion" tabindex="-1" role="dialog" aria-labelledby="ventanaInvestigacionProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaInvestigacionProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Producción de proyectos de investigación</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>                                                      
                                                      <th>Título</th>                                                      
                                                      <th>Nombre del patrocinador</th>
                                                      <th>Alumnos participantes</th>
                                                      <th>Fecha de inicio</th>  
                                                      <th>Fecha de Fin</th>
                                                     
                                                      <!--     
                                                      Actividades REalizadas
                                                      Fecha de Fin
                                                      Miembros                                                 
                                                      Para considerar en curriculum de cuerpo académico (Y/N)
                                                      Miembros
                                                      LGACs
                                                      Tipo de patrocinador
                                                      Investigadores participantes
                                                      -->
                                                     
                                                    </tr>
                                              </thead>
                                              <tbody>
                                                   <?php 
                                                  $sql="SELECT * FROM detalle_usuario_proyectos_investigacion WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['titulo'] ?></td>
                                                    <td><?php echo $mostrar['nombre_patrocinador'] ?></td>
                                                    <td><?php echo $mostrar['nombre_alumnos_participantes'] ?></td>
                                                   <td><?php echo $mostrar['fecha_inicio'] ?></td>
                                                     <td><?php echo $mostrar['fecha_fin'] ?></td>
                                                    
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaInvestigacion" onclick="editarInvestigacion(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                     <td><center><button class="btn btn-danger" onclick="borrarProyectos(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>

                      </div>
                  </div>
              </div>
                  </div>



<!-- 4 SECCIÓN BENEFICIOS -->
                                    <div class="btn btn-dark border-light" id="header4">
                      <a class="btn" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">Beneficios</a>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="header4" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_beneficios">
                              <div class="card">
                                  

                                  <div class="btn btn-secondary border-light" id="subheader_beneficios">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_beneficios" aria-expanded="true" aria-controls="subcollapse1_beneficios">PROMEP</a>
                                  </div>
                                  <div id="subcollapse1_beneficios" class="collapse" aria-labelledby="subheader1_beneficios" data-parent="#subaccordion_beneficios">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>PROMEP</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana_Promep" onclick="validarPromepProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventana_Promep" tabindex="-1" role="dialog" aria-labelledby="ventanaPromepProdep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaPromepProdep">
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Beneficios de PROMEP</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>IES de la solicitud  </th>                                                      
                                                      <th>Solicitud</th>
                                                      <th>Vigencia</th>
                                                      <th>Estado</th>
                                                     
                                                     
                                                     
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_beneficios_promep WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?> <!--ies_solicitud,solicitud,vigencia,estado-->
                                                  <tr>
                                                    <td><?php echo $mostrar['ies_solicitud'] ?></td>
                                                    <td><?php echo $mostrar['solicitud'] ?></td>
                                                    <td><?php echo $mostrar['vigencia'] ?></td>
                                                    <td><?php echo $mostrar['estado'] ?></td>
                                                 
                                                    <!-- BOTONES EDITAR Y BORRAR -->

                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventana_Promep" onclick="editarPromep(<?php echo $mostrar['id']?>)">Editar</button></center></td>

                                                   <td><center><button class="btn btn-danger" onclick="borrarPromep(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>






                                    <div class="btn btn-secondary border-light" id="subheader_beneficios">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_beneficios" aria-expanded="true" aria-controls="subcollapse2_beneficios">Externo a PROMEP</a>
                                  </div>
                                  <div id="subcollapse2_beneficios" class="collapse" aria-labelledby="subheader2_beneficios" data-parent="#subaccordion_beneficios">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Externo a PROMEP</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaExternoPromep" onclick="validarExternoPromepProdep()">Agregar nuevo</button><br><br>





                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaExternoPromep" tabindex="-1" role="dialog" aria-labelledby="ventanaExternoPromep">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaExternoPromepProdep">
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>


                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Beneficios externos a PROMEP</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Tipo de Apoyo </th>                                                      
                                                      <th>Nivel</th>
                                                      <th>Fecha inicial</th>
                                                      <th>Fecha final</th>
                                                      <th>Monto</th>

                                                  </tr>
                                              </thead>
                                              <tbody>
                                                   <?php 
                                                  $sql="SELECT * FROM detalle_usuario_beneficios_externos_promep WHERE usuario_idusuario='$usuario'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['tipo_apoyo'] ?></td>
                                                    <td><?php echo $mostrar['nivel'] ?></td>
                                                    <td><?php echo $mostrar['fecha_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_fin'] ?></td>
                                                    <td><?php echo $mostrar['monto'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaExternoPromep" onclick="editarExternos(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarExternos(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>
                </div>
              </div>
                </div>
            </div>
        </div>

            <br>
            <center><h6><b>* NOTA: </b>Si encuentra registros con campos vacíos, se puede deber a que ese registro en concreto fue llenado en otra convocatoria y falta llenar unos pocos datos en esta.</h6></center>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
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

        <?php include("scripts/formularios/prodep/validadoresFormulariosProdep.php");?>
        <?php include("scripts/formularios/prodep/validadoresBorrarProdep.php");?>
        <?php include("scripts/formularios/prodep/validadoresEditarProdep.php");?>

    </script>
</body>
</html>
