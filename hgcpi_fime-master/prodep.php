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
                      <li class="nav-item">
                      <a class="nav-link" href="perfil.php#convocatorias" tabindex="-1" aria-disabled="true">Imprimir Convocatorias</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="#">Dra. Mayra Deyanira Flores Guerrero</a></span>
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
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1" aria-expanded="true" aria-controls="subcollapse1">Estudios Realizados</a>
                                  </div>
                                  <div id="subcollapse1" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                      <div class="card-body">
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Estudios Realizados</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarEstudiosRealizados()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                 <div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
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
                                                      <th>Nivel de Estudios</th>
                                                      <th>Estudios en:</th>
                                                      <th>Área -> Disciplina</th>   <!-- Creo que el llenado debe ser Enfoque → Ciencias -->
                                                      <th>Institución otorgante</th>
                                                      <!--Instirución otorgante no considerada en el catálogo-->
                                                      <th>Paises donde ha estudiado</th>
                                                      <!-- En cada pais debe agregar la fecha de inicio de estudios y fin de estudios y fecha de obtencion de su título -->
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td> Licenciatura: IAS</td>
                                                      <td></td>
                                                      <td>Enfoque → Ciencias</td>
                                                      <td>Universidad Autónoma de Nuevo León</td>
                                                      <td></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-light" id="subheader2">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse2">Datos Laborales</a>
                                  </div>
                                  <div id="subcollapse2" class="collapse" aria-labelledby="subheader2" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Datos Laborales</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario2" onclick="validarDatosLaborales()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario2" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario2">
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
                                                      <th>Nombramiento</th> <!-- CAMPO EN MAYUSCULAS-->
                                                      <th>Tipo de nombramiento</th>
                                                      <th>Dedicación</th>
                                                      <th>Institución de Educación Superior</th>
                                                      <th>Dependencia de Educación Superior</th>
                                                      
                                                       <!--Unidad académica
                                                           Inicio del contrato
                                                           Fin del contrato
                                                           Cronología   -->
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>ASOCIADO A ...</td>
                                                      <td>Profesor</td>
                                                      <td>Tiempo Completo</td>
                                                      <td>UANL</td>
                                                      <td>FIME</td>
                                                      <td></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>


                                  <div class="btn btn-secondary border-light" id="subheader3">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse2">Premios y Distinciones</a>
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
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario3" onclick="validarPremiosProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario3" tabindex="-1" role="dialog" aria-labelledby="ventanaPremios">
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
                                                      <th>FECHA</th> <!--Formato 31/12/9999 -->
                                                      <th>Institución Otorgante</th>
                                                      <!--
                                                      Institución Otrogante no considerada en el Catálogo
                                                    -->
                                                      
                                                       
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Premio al mejor sistema</td>
                                                      <td>Por ganar el consurso al mejor sistema</td>
                                                      <td>24/09/2019</td>
                                                      <td>UANL</td>
                                                     
                                                    
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
                                  <div id="subcollapse3" class="collapse" aria-labelledby="subheader3" data-parent="#subaccordion">
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
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario4" onclick="validarDocenciaProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario4" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario3">
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
                                                  <tr>
                                                      <td>Matemáticas discretas</td>
                                                      <td>Universidad Autónoma de Nuevo León</td>
                                                      <td>FIME</td>
                                                      <td>IAS</td>
                                                      <td>Licenciatura</td>
                                          </table>
                                          <br><hr><br>



                                      </div>
                                  </div>
                                                                    <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_docencia" aria-expanded="true" aria-controls="subcollapse2_docencia">Tutoria</a>
                                  </div>
                                                                    <div id="subcollapse2_docencia" class="collapse" aria-labelledby="subheader2_docencia" data-parent="#subaccordion_docencia">
                                      <div class="card-body">
                                          <div class="form-group">
                                              <div class="row">
                                                  <div class="col-9">
                                                      <h4>Tutoria</h4>
                                                  </div>
                                           <div class="col-3">
                                              <h5><right>Tipo de tutoria:</right></h5>
                                              <select name="seleccion_tipo_tutoria" id="tipo_tutoria" class="custom-select">
                                              <option value="seleccion">Seleccione...</option>
                                              <option value="individual">Tutoria individual</option>
                                              <option value="grupal">Tutoria grupal</option>
                                              </select>
                                          </div>

                                                                                                    
                                                  <!--En individual va :
                                                          -Alumno
                                                          -Nivel
                                                          -Programa educativo (CARRERA)
                                                          -Inicio
                                                          -Término
                                                          -Tutelaje (puede ir vacio)
                                                          -Estado
                                                      En grupal va:
                                                          -Numero de alumnos
                                                          -Nivel
                                                          -Programa educativo
                                                          -Fecha de inicio

                                                      -->                                                  

                                              </div>
                                          </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario5" onclick="validarTutoriaProdep()">Agregar nuevo</button><br><br>
                                             
                                              <!-- VENTANA PARA LOS FORMULARIOS -->


                                                  <div class="modal fade" id="ventanaFormulario5" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario4">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioTutoria">
                                                      </div>
                                                  </div>  
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus tutorias</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Tipo de tutoria</th>
                                                      <th>Numero de Alumnos</th>
                                                      <th>Nivel</th>
                                                      <th>Programa educativo</th>
                                                      <th>Fecha de inicio</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Grupal</td>
                                                      <td>38</td>
                                                      <td>Licenciatura</td>
                                                      <td>IEA</td>
                                                      <td>27/09/2019</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-light" id="subheader2">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3_docencia" aria-expanded="true" aria-controls="subcollapse2">Dirección Individualizada</a>
                                  </div>
                                  <div id="subcollapse2" class="collapse" aria-labelledby="subheader2" data-parent="#subaccordion">
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
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario6" onclick="validarDireccionIndividualProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario6" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario5">
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
                                                      <th>No. Alumnos</th>
                                                      <!--Estado de la dirección individualizada:
                                                          Para considerar en curriculum de cuerpo academico? Y/N
                                                          Miembros:
                                                          LGAC:
                                                        --> 
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Mi SUPER tesis!!.</td>
                                                      <td>Doctorado</td>
                                                      <td>24/09/2019</td>
                                                      <td>25/09/2019</td>
                                                      <td>30</td>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>




                                  <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4_docencia" aria-expanded="true" aria-controls="subcollapse4_docencia">Gestión académica</a>
                                  </div>
                                  <div id="subcollapse4_docencia" class="collapse" aria-labelledby="subheader4_docencia" data-parent="#subaccordion">
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
                                              <div class="modal fade" id="ventanaGestion" tabindex="-1" role="dialog" aria-labelledby="ventanaGestion">
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
                                                      <th>Aprobado</th><!-- (Y/N) -->
                                                     
                                                      <!--
                                                      Resultados obtenidos (Puede ir vacio)
                                                      Estado               (Puede ir vacio)
                                                      Fecha inicio
                                                      Fecha Fin             (TODAS LAS FECHAS EN FORMATO 31/12/9999)
                                                      Fecha del ultimo informe presentado
                                                      Horas dedicadas a la semana a esta gestión
                                                      -->
                                                     
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Individual</td>
                                                      <td>Tesorero</td>
                                                      <td>Asesoramiento financiero</td>
                                                      <td>FIME</td>
                                                      <td>Si</td>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>


                          <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse5_docencia" aria-expanded="true" aria-controls="subcollapse5_docencia">Línea de generación y aplicación del conocimiento (LGAC)</a>
                                  </div>
                                  <div id="subcollapse5_docencia" class="collapse" aria-labelledby="subheader5_docencia" data-parent="#subaccordion">
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
                                              <div class="modal fade" id="ventanaLGAC" tabindex="-1" role="dialog" aria-labelledby="ventanaLGAC">
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
                                                      <th>Linea</th>
                                                      <th>Actividades que realiza</th>
                                                      <th>Horas de la semana dedicades a LGAC</th>
 
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>


                          <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse6_docencia" aria-expanded="true" aria-controls="subcollapse6_docencia">Cuerpo académico</a>
                                  </div>
                                  <div id="subcollapse6_docencia" class="collapse" aria-labelledby="subheader6_docencia" data-parent="#subaccordion">
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
                                              <div class="modal fade" id="ventanaCuerpo" tabindex="-1" role="dialog" aria-labelledby="ventanaCuerpo">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaCuerpoProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Cuerpo Académico</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Nombre del Cuerpo Académico</th>
                                                      <th>Clave</th>
                                                      <th>Grado de consolación</th>
                                                       <th>Línea(s) que cultiva el cuerpo académico</th> <!-- Como no tuvo entonces se pone la estructura, pero no se llena*
 -->
 
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Jesús</td>
                                                      <td>16!</td>
                                                      <td>Superior</td>
                                                      <td></td>
                                                      
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>



                            <div class="btn btn-secondary border-light" id="subheader_docencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse7_docencia" aria-expanded="true" aria-controls="subcollapse7_docencia">Programas Educativos Actualizados</a>
                                  </div>
                                  <div id="subcollapse7_docencia" class="collapse" aria-labelledby="subheader7_docencia" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Programas Educativos Actualizados</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaProgramaEducativo" onclick="validarProgramaEducativoProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaProgramaEducativo" tabindex="-1" role="dialog" aria-labelledby="ventanaProgramaEducativo">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaProgramaEducativoProdep">
                                                     </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Programas Educativos Actualizados</h5></center><br>
                                          <table class="table table-success m-2"
                                              <thead>
                                                  <tr>
                                                      <th>Programa Educativo</th>
                                                      <th>Fecha</th>
                                                      <th>Tipo de Actualización</th>
                                                   
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>ITS</td>
                                                      <td>24/09/2022</td>
                                                      <td>Asignarle una Red de Materias que tenga sentido</td>
                                                      
                                                      
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
                                  <div id="subcollapse1_produccion" class="collapse" aria-labelledby="subheader1_produccion" data-parent="#subaccordion">
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
                                              <div class="modal fade" id="ventanaArticulo" tabindex="-1" role="dialog" aria-labelledby="ventanaArticulo">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaArticuloProdep">
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Producción de articulos</h5></center><br>
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
                                                      <td>Rodolfo Navarro, José Maria Flores.</td>
                                                      <td>Como hacer un sistema de llenado de combocatorias</td>
                                                      <td>Publicado</td>
                                                      <td>México</td>
                                                      <td>México</td>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>




                                  <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_produccion" aria-expanded="true" aria-controls="subcollapse2_produccion">Libro</a>
                                  </div>
                                  <div id="subcollapse2_produccion" class="collapse" aria-labelledby="subheader2_produccion" data-parent="#subaccordion">
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
                                                  <tr>
                                                      <td>Rodolfo Navarro, José Maria Flores.</td>
                                                      <td>Como hacer un sistema de llenado de combocatorias</td>
                                                      <td>Publicado</td>
                                                      <td>México</td>
                                                      <td>México</td>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>



                          <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3_produccion" aria-expanded="true" aria-controls="subcollapse3_produccion">Memorias en extenso</a>
                                  </div>
                                  <div id="subcollapse3_produccion" class="collapse" aria-labelledby="subheader3_produccion" data-parent="#subaccordion">
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
                                              <div class="modal fade" id="ventanaMemorias" tabindex="-1" role="dialog" aria-labelledby="ventanaMemoriasProdep">
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
                                                      <th>PDF</th> <!--AQUI LITERALMENTE TIENE QUE SUBIR EL PDF-->
                                                     
                                                     
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
                                                      <td>Rodolfo Navarro, José Maria Flores.</td>
                                                      <td>Como hacer un sistema de llenado de combocatorias</td>
                                                      <td>Congreso de la Unión</td>
                                                      <td>México</td>
                                                      <td>Combocatorias.pdf</td>
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                </div>
                          </div>




                          <div class="btn btn-secondary border-light" id="subheader_produccion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4_produccion" aria-expanded="true" aria-controls="subcollapse4_produccion">Proyectos de investigación</a>
                                  </div>
                                  <div id="subcollapse4_produccion" class="collapse" aria-labelledby="subheader4_produccion" data-parent="#subaccordion">
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
                                                  <tr>
                                                      <td>Uso de colorante verde en las hamburguesas.</td>
                                                      <td>Mc. Dolands</td>
                                                      <td>Rodolfo Navarro, José Maria Flores</td>
                                                      <td>05/07/2016</td>
                                                      <td>07/23/2019</td>
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



<!-- 4 SECCIÓN BENEFICIOS -->
                                    <div class="btn btn-dark border-light" id="header4">
                      <a class="btn" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">Beneficios</a>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="header4" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_beneficios">
                              <div class="card">
                                  

                                  <div class="btn btn-secondary border-light" id="subheader_beneficios">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_beneficios" aria-expanded="true" aria-controls="subcollapse1_beneficios">Promep</a>
                                  </div>
                                  <div id="subcollapse1_beneficios" class="collapse" aria-labelledby="subheader1_beneficios" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Promep</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaPromep" onclick="validarPromepProdep()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaPromep" tabindex="-1" role="dialog" aria-labelledby="ventanaPromep">
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
                                                      <th> Solicitud</th>
                                                      <th>Vigencia</th>
                                                      <th>Estado</th>
                                                     
                                                     
                                                     
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      
                                                    </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>



                                    <div class="btn btn-secondary border-light" id="subheader_beneficios">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_beneficios" aria-expanded="true" aria-controls="subcollapse2_beneficios">Externo a Promep</a>
                                  </div>
                                  <div id="subcollapse2_beneficios" class="collapse" aria-labelledby="subheader2_beneficios" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Externo a Promep</h4>
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
                                                  <tr>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      
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
        </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "dd/mm/yy",
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

    </script>
</body>
</html>
