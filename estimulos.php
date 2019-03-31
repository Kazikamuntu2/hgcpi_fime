<!DOCTYPE html>
<html lang="es">
<head>
	<title>Estímulos UANL | HGCPI</title>
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
                          <a class="dropdown-item" href="#">PRODEP</a>
                          <a class="dropdown-item" href="#">Sistema Nacional de Investigadores</a>
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
                    <h2><center>Convocatoria de Estímulos UANL</center></h2>
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
                      <a class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">DOCENCIA</a>
                  </div>
                  <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1" aria-expanded="true" aria-controls="subcollapse1">Producción Académica Docencia</a>
                                  </div>
                                  <div id="subcollapse1" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                      <div class="card-body">
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Producción Académica Docencia</h4>
                                                      </div>
                                                      <div class="col-3">
                                                          <h5><right>Tipo de documento:</right></h5>
                                                          <select name="seleccion_produccion_academica" id="produccion_academica" class="custom-select">
                                                              <option value="seleccion">Seleccione...</option>
                                                              <option value="articulo">Artículo</option>
                                                              <option value="capitulo_libro">Capítulo del libro</option>
                                                              <option value="libro">Libro</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																							<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioProdAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus trabajos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Titulo del artículo</th>
                                                      <th>ISSN</th>
                                                      <th>Fecha de publicación</th>
                                                      <th>Editorial</th>
                                                      <th>Nombre de la revista</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Artículo de ejemplo</td>
                                                      <td>1234-5678-91011</td>
                                                      <td>12-03-2016</td>
                                                      <td>Editores Mexicanos Unidos</td>
                                                      <td>Ciencia y Tecnología</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-light" id="subheader2">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse2">Capacitación y Actualización Académica</a>
                                  </div>
                                  <div id="subcollapse2" class="collapse" aria-labelledby="subheader2" data-parent="#subaccordion">
                                      <div class="card-body">
                                       <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Capacitación y Actualización Académica</h4>
                                                      </div>
                                                      </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario2" onclick="validarCapacitActuali()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                              <div class="modal fade" id="ventanaFormulario2" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario2">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaCapaYActuali">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus capacitaciones y actualizaciones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Tipo</th>
                                                      <th colspan="2">Descripción</th>
                                                      <th>Fecha de inicio</th>
                                                      <th>Fecha de fin</th>
                                                      <th>Nombre de la institución</th>
                                                      <th>No. de horas</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Tipo de ejemplo</td>
                                                      <td colspan="2">Mejora en el grado para calificar diferentes medidas de trabajo</td>
                                                      <td>12-03-2016</td>
                                                      <td>13-03-2016</td>
                                                      <td>Universidad Autonóma de Nuevo León</td>
                                                      <td>35</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-light" id="subheader3">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse3">Capacitación y Actualización en Lenguas Extranjeras</a>
                                  </div>
                                  <div id="subcollapse3" class="collapse" aria-labelledby="subheader3" data-parent="#subaccordion">
                                      <div class="card-body">
                                          <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Capacitación y Actualización en Lenguas Extranjeras</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario3" onclick="validarCapaActa()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                              <div class="modal fade" id="ventanaFormulario3" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario3">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaCapaActa">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus lenguas e idiomas</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Lengua o idioma</th>
                                                      <th>Institución que certifica</th>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>Llenado de ejemplo</td>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>

                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-white" id="subheader4">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4" aria-expanded="true" aria-controls="subcollapse4">Gestión Académica Invididualizada</a>
                                  </div>
                                  <div id="subcollapse4" class="collapse" aria-labelledby="subheader4" data-parent="#subaccordion">
                                      <div class="card-body">
                                          <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Gestión Académica Individualizada</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario4" onclick="validarSeleccionGestionAcademica()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                              <div class="modal fade" id="ventanaFormulario4" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario2">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioGestionAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus trabajos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Tipo de gestión</th>
                                                      <th>Clasificación</th>
                                                      <th>Evento</th>
                                                      <th>Tipo de Evento</th>
                                                      <th>Fecha inicio</th>
                                                      <th>Fecha fin</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>12-03-2016</td>
                                                      <td>12-03-2016</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-light" id="subheader5">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse5" aria-expanded="true" aria-controls="subcollapse5">Premios y distinciones</a>
                                  </div>
                                  <div id="subcollapse5" class="collapse" aria-labelledby="subheader5" data-parent="#subaccordion">
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
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario5" onclick="validarPremiosDist()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                              <div class="modal fade" id="ventanaFormulario5" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario3">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaPremiosDist">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus premios y distinciones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Tipo de reconocimiento</th>
                                                      <th>Nivel</th>
                                                      <th>Fecha inicio</th>
                                                      <th>Fecha fin</th>
                                                      <th>Monto mensual</th>

                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>Llenado de ejemplo</td>
                                                      <td>12-03-2016</td>
                                                      <td>12-03-2016</td>
                                                      <td>Llenado de ejemplo</td>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>

                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
									<!-- SEGUNDA SECCIÓN INVESTIGACIÓN -->
									<div class="btn btn-dark border-light" id="header2">
                      <a class="btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">INVESTIGACIÓN</a>
                  </div>
                  <div id="collapse2" class="collapse" aria-labelledby="header2" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_investigacion">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader_investigacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_investigacion" aria-expanded="true" aria-controls="subcollapse1_investigacion">Proyectos de investigación</a>
                                  </div>
                                  <div id="subcollapse1_investigacion" class="collapse" aria-labelledby="subheader_investigacion" data-parent="#subaccordion_investigacion">
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
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																							<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioProdAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus trabajos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha de inicio</th>
                                                      <th>Fecha de termino</th>
                                                      <th>Titulo</th>
                                                      <th>Participación</th>
                                                      <th>Monto</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12-03-2016</td>
                                                      <td>13-03-2016</td>
                                                      <td>Ciencia y Tecnología</td>
                                                      <td>CEMEX</td>
                                                      <td>199.85</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>
																	<div class="btn btn-secondary border-light" id="subheader_investigacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_investigacion" aria-expanded="true" aria-controls="subcollapse2_investigacion">Producción Académica Investigaciónn</a>
                                  </div>
																	<div id="subcollapse2_investigacion" class="collapse" aria-labelledby="subheader2_investigacion" data-parent="#subaccordion_investigacion">
                                      <div class="card-body">
                                          <div class="form-group">
                                              <div class="row">
                                                  <div class="col-9">
                                                      <h4>Producción Académica Investigación</h4>
                                                  </div>
																									<div class="col-3">
																											<h5><right>Tipo de documento:</right></h5>
																											<select name="seleccion_produccion_academica_investigacion" id="produccion_academica_investigacion" class="custom-select">
																													<option value="seleccion">Seleccione...</option>
																													<option value="articulo">Artículo arbitrado</option>
																													<option value="libro">Libro</option>
																											</select>
																									</div>
                                              </div>
                                          </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>
                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																							<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioProdAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus trabajos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha de publicación</th>
                                                      <th>Editorial</th>
                                                      <th>Nombre de la referencia</th>
                                                      <th>Editorial</th>
                                                      <th>Nombre de la revista</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12-03-2016</td>
                                                      <td>valor</td>
                                                      <td>NEXUS</td>
                                                      <td>Editores Mexicanos Unidos</td>
                                                      <td>Ciencia y Tecnología</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
									<!-- TERCERA SECCIÓN TUTORÍAS -->
									<div class="btn btn-dark border-light" id="header3">
                      <a class="btn" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">TUTORÍAS</a>
                  </div>
                  <div id="collapse3" class="collapse" aria-labelledby="header3" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_tutorias">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader_tutorias">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_tutorias" aria-expanded="true" aria-controls="subcollapse1_tutorias">Tutoria</a>
                                  </div>
                                  <div id="subcollapse1_tutorias" class="collapse" aria-labelledby="subheader_tutorias" data-parent="#subaccordion_tutorias">
                                      <div class="card-body">
                                          <!-- FALTA DE INFORMACIÓN DEL PDFS PENDIENTE (31/03/2019) -->
                                      </div>
                                  </div>
																	<div class="btn btn-secondary border-light" id="subheader2_investigacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_tutorias" aria-expanded="true" aria-controls="subcollapse2_tutorias">Asesoria</a>
                                  </div>
																	<div id="subcollapse2_tutorias" class="collapse" aria-labelledby="subheader_tutorias" data-parent="#subaccordion_tutorias">
                                      <div class="card-body">
																				<div class="form-group">
																						<div class="row">
																								<div class="col-9">
																										<h4>Asesoria</h4>
																								</div>
																						</div>
																				</div>
																		<div class="col-2">

																				<!-- BOTON AGREGAR -->
																				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

																				<!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																				<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
																						<div class="modal-dialog">
																								<div class="modal-content" id="ventanaFormularioProdAcad">
																								</div>
																						</div>
																				</div>
																		</div>
																		<!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
																		<hr><br><center><h5>Sus trabajos</h5></center><br>
																		<table class="table table-success m-2">
																				<thead>
																						<tr>
																								<th>Tipo de asesoria</th>
																								<th>Área de conocimiento</th>
																								<th>Nivel</th>
																								<th>Alumnos</th>
																						</tr>
																				</thead>
																				<tbody>
																						<tr>
																								<td>Apoyo metodológico en su doctrina esp o área de conocimiento</td>
																								<td>Informatica</td>
																								<td>POSGRADO</td>
																								<td><a href="#">Alumnos</a></td>
																						</tr>
																				</tbody>
																		</table>
																		<br><hr><br>
																		<center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
																		<center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>
																	<div class="btn btn-secondary border-light" id="subheader2_investigacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3_tutorias" aria-expanded="true" aria-controls="subcollapse3_tutorias">Dirección Invididualizada</a>
                                  </div>
																	<div id="subcollapse3_tutorias" class="collapse" aria-labelledby="subheader_tutorias" data-parent="#subaccordion_tutorias">
                                      <div class="card-body">
																				<div class="form-group">
																						<div class="row">
																								<div class="col-9">
																										<h4>Dirección Individualizada</h4>
																								</div>
																						</div>
																				</div>
																				<div class="col-2">

																				<!-- BOTON AGREGAR -->
																				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

																				<!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																				<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
																						<div class="modal-dialog">
																								<div class="modal-content" id="ventanaFormularioProdAcad">
																								</div>
																						</div>
																				</div>

																				</div>

																				<!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
																				<hr><br><center><h5>Sus trabajos</h5></center><br>
																				<table class="table table-success m-2">
																					<thead>
																							<tr>
																									<th>Fecha inicio</th>
																									<th>Fecha fin</th>
																									<th>Tipo Dirección Individualizada</th>
																									<th>Tipo de Proyecto Dirigido</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td>12-03-2016</td>
																									<td>13-03-2016</td>
																									<td>...</td>
																									<td>...</td>
																								</tr>
																							</tbody>
																						</table>
																						<br><hr><br>

																					<center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
																					<center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>
																	<div class="btn btn-secondary border-light" id="subheader2_investigacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4_tutorias" aria-expanded="true" aria-controls="subcollapse4_tutorias">Servicios prestados a la comunidad</a>
                                  </div>
																	<div id="subcollapse4_tutorias" class="collapse" aria-labelledby="subheader_tutorias" data-parent="#subaccordion_tutorias">
                                    		<div class="card-body">
																					<div class="form-group">
																							<div class="row">
																									<div class="col-9">
																											<h4>Producción Académica Docencia</h4>
																									</div>
																							</div>
																					</div>
																				<div class="col-2">

																				<!-- BOTON AGREGAR -->
																				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

																				<!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																				<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
																						<div class="modal-dialog">
																								<div class="modal-content" id="ventanaFormularioProdAcad">
																								</div>
																						</div>
																				</div>

																		</div>

																		<!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
																		<hr><br><center><h5>Sus trabajos</h5></center><br>
																		<table class="table table-success m-2">
																				<thead>
																						<tr>
																								<th>Fecha servicio</th>
																								<th>Tipo de servicio</th>
																								<th>Servicio prestado</th>
																						</tr>
																				</thead>
																				<tbody>
																						<tr>
																								<td>12-03-2016</td>
																								<td>...</td>
																								<td>...</td>
																						</tr>
																				</tbody>
																		</table>
																		<br><hr><br>

																		<center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
																		<center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
									<!-- CUARTA SECCIÓN CUERPOS COLEGIALOS -->
									<div class="btn btn-dark border-light" id="header4">
                      <a class="btn" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">CUERPOS COLEGIALOS</a>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="header4" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_cuerposcolegialos">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1_cuerposcolegialos">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_cuerposcolegialos" aria-expanded="true" aria-controls="subcollapse1_cuerposcolegialos">Gestión Académica de Cuerpos Colegialos</a>
                                  </div>
                                  <div id="subcollapse1_cuerposcolegialos" class="collapse" aria-labelledby="subheader1_cuerposcolegialos" data-parent="#subaccordion_cuerposcolegialos">
                                      <div class="card-body">
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Gestión Académica de Cuerpos Colegialos</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
																							<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioProdAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus trabajos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha Ult. Rep.</th>
                                                      <th>Tipo Gestión</th>
                                                      <th>Clasificación</th>
                                                      <th>Función Encomendada</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12-03-2016</td>
                                                      <td>...</td>
                                                      <td>...</td>
                                                      <td>...</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
									<!-- QUINTA SECCIÓN DEDICACIÓN -->
									<div class="btn btn-dark border-light" id="header5">
                      <a class="btn" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">DEDICACIÓN</a>
                  </div>
                  <div id="collapse5" class="collapse" aria-labelledby="header5" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_dedicacion">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1_dedicacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_dedicacion" aria-expanded="true" aria-controls="subcollapse1_dedicacion">Carga Académica</a>
                                  </div>
                                  <div id="subcollapse1_dedicacion" class="collapse" aria-labelledby="subheader1_dedicacion" data-parent="#subaccordion_dedicacion">
																		<!-- Es la carga docente impartida por el academico -->
																			<div class="card-body">
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha inicio</th>
                                                      <th>Fecha termnino</th>
                                                      <th>Dependencia</th>
                                                      <th>Nivel</th>
                                                      <th>Grado</th>
																											<th>Materia</th>
																											<th>No. Grupos</th>
																											<th>No. Hrs. Semana Mes</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>18-01-2016</td>
                                                      <td>14-07-2016</td>
                                                      <td>FACULTAD DE CIENCIAS DE LA COMUNICACIÓN</td>
                                                      <td>SUPERIOR</td>
                                                      <td>LICENCIATURA</td>
																											<td>PSICOLOGÍA SOCIAL</td>
																											<td>2</td>
																											<td>6</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                          <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
									<!-- SEXTA SECCIÓN PERMAMENCIA -->
									<div class="btn btn-dark border-light" id="header6">
                      <a class="btn" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">PERMAMENCIA</a>
                  </div>
                  <div id="collapse6" class="collapse" aria-labelledby="header6" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_permamencia">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1_permamencia">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_permamencia" aria-expanded="true" aria-controls="subcollapse1_permamencia">Antigüedad</a>
                                  </div>
                                  <div id="subcollapse1_permamencia" class="collapse" aria-labelledby="subheader1_permamencia" data-parent="#subaccordion_permamencia">
                                      <div class="card-body">
																				<!-- FALTA DE INFORMACIÓN EN EL PDF -->
                                  </div>

                              	</div>
                          </div>
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

        <?php include("scripts/formularios/estimulos/validadoresFormulariosEstimulos.php");?>

    </script>
</body>
</html>
