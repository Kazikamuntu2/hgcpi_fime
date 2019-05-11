<?php 

  $conexion=mysqli_connect('localhost','root','','hgcpi');

 ?>

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
    <script src="jquery-3.3.1.min.js"></script>
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
                      <a class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Docencia</a>
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
                                                              <option value="libro">Libro</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">
                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                <div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioProdAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus artículos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Titulo del artículo</th>
                                                      <th>ISSN</th>
                                                      <th>País</th>
                                                      <th>Nombre de la revista</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_prod_articulos WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['nombre_art'] ?></td>
                                                    <td><?php echo $mostrar['issn'] ?></td>
                                                    <td><?php echo $mostrar['pais'] ?></td>
                                                    <td><?php echo $mostrar['nombre_revista'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario" onclick="editarRegistroProdArt(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroProdArt(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          <center><h5>Sus libros</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Titulo del libro</th>
                                                      <th>Tipo de autor</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_produccion_libros WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['titulo'] ?></td>
                                                    <td><?php echo $mostrar['tipo_participacion'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario" onclick="editarRegistroProdLibro(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroProdLibro(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>

                                          
                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-white" id="subheader2">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse4">Grados académicos y capacitación</a>
                                  </div>
                                  <div id="subcollapse2" class="collapse" aria-labelledby="subheader2" data-parent="#subaccordion">
                                      <div class="card-body">
                                          <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Grados académicos y capacitación</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario2" onclick="validarGradosAcad()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario2" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario2">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioGradosAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus grados y capacitaciones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Tipo de capacitacion</th>
                                                      <th>Descripción</th>
                                                      <th>Fecha inicio</th>
                                                      <th>Fecha fin</th>
                                                      <th>Numero de horas</th>
                                                      <th>Nombre de la Institucion</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_grados_acad WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['tipo_capacitacion'] ?></td>
                                                    <td><?php echo $mostrar['descripcion'] ?></td>
                                                    <td><?php echo $mostrar['fecha_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_fin'] ?></td>
                                                    <td><?php echo $mostrar['numero_de_horas'] ?></td>
                                                    <td><?php echo $mostrar['nombre_institucion'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario2" onclick="editarRegistroGradosCapa(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroGradosCapa(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
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
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse3">Lenguas e idiomas</a>
                                  </div>
                                  <div id="subcollapse3" class="collapse" aria-labelledby="subheader3" data-parent="#subaccordion">
                                      <div class="card-body">
                                          <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Lenguas e idiomas</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario3" onclick="validarCapaActa()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
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
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_lenguas_e_idiomas WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['idioma'] ?></td>
                                                    <td><?php echo $mostrar['institucion_que_otorga'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario3" onclick="editarRegistroLenguas(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroLenguas(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>



                                      </div>
                                  </div>

                                  <div class="btn btn-secondary border-white" id="subheader4">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4" aria-expanded="true" aria-controls="subcollapse4">Gestion Académica Individualizada</a>
                                  </div>
                                  <div id="subcollapse4" class="collapse" aria-labelledby="subheader4" data-parent="#subaccordion">
                                      <div class="card-body">
                                          <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Gestion Académica Individualizada</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario4" onclick="validarDirIndividualizada()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario4" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario4">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioDivIndiv">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus direcciones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha de termino</th>
                                                      <th>Evento</th>
                                                      <th>Tipo de participación</th>
                                                      <th>Alcance</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <<?php 
                                                  $sql="SELECT * FROM detalle_usuario_direccion_individualizada WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['fecha_de_fin'] ?></td>
                                                    <td><?php echo $mostrar['institucion_que_otorga'] ?></td>
                                                    <td><?php echo $mostrar['idioma'] ?></td>
                                                    <td><?php echo $mostrar['institucion_que_otorga'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario4" onclick="editarRegistroDireccionInvi(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroDireccionInvi(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


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

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                              <div class="modal fade" id="ventanaFormulario5" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario5">
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
                                                      <th>Año</th>
                                                      <th>Monto mensual</th>

                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_premios_y_distinciones WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['tipo_distincion'] ?></td>
                                                    <td><?php echo $mostrar['nivel'] ?></td>
                                                    <td><?php echo $mostrar['ano'] ?></td>
                                                    <td><?php echo $mostrar['monto_mensual'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaFormulario" onclick="editarRegistroPremios(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroPremios(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
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
                                    <!-- SEGUNDA SECCIÓN INVESTIGACIÓN -->
                                    <div class="btn btn-dark border-light" id="header2">
                      <a class="btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Investigación</a>
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
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaProyInv" onclick="validarProyInvestigacion()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                <div class="modal fade" id="ventanaProyInv" tabindex="-1" role="dialog" aria-labelledby="ventanaProyInv">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaProyInvestigacion">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus proyectos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha de inicio</th>
                                                      <th>Fecha de fin</th>
                                                      <th>Titulo</th>
                                                      <th>Participación</th>
                                                      <th>Monto</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_proyectos_investigacion WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['fecha_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_fin'] ?></td>
                                                    <td><?php echo $mostrar['titulo'] ?></td>
                                                    <td><?php echo $mostrar['tipo_participacion'] ?></td>
                                                    <td><?php echo $mostrar['monto_apoyo'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaProyInv" onclick="editarRegistroProInv(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroProInv(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
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
                                    <!-- TERCERA SECCIÓN TUTORÍAS -->
                                    <div class="btn btn-dark border-light" id="header3">
                      <a class="btn" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Tutorías</a>
                  </div>
                  <div id="collapse3" class="collapse" aria-labelledby="header3" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_tutorias">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader_tutorias">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_tutorias" aria-expanded="true" aria-controls="subcollapse1_tutorias">Tutoría</a>
                                  </div>
                                  <div id="subcollapse1_tutorias" class="collapse" aria-labelledby="subheader_tutorias" data-parent="#subaccordion_tutorias">
                                      <div class="card-body">
                                          <div class="form-group">
                                                                                            <div class="row">
                                                                                                    <div class="col-9">
                                                                                                            <h4>Tutoría</h4>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                <div class="col-2">

                                                                                <!-- BOTON AGREGAR -->
                                                                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaTuto" onclick="validarTutoria()">Agregar nuevo</button><br><br>

                                                                                <!-- VENTANA PARA LOS FORMULARIOS -->
                                                                                <div class="modal fade" id="ventanaTuto" tabindex="-1" role="dialog" aria-labelledby="ventanaTuto">
                                                                                        <div class="modal-dialog">
                                                                                                <div class="modal-content" id="ventanaFormularioTutoria">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                        </div>

                                                                        <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                                        <hr><br><center><h5>Sus tutorías</h5></center><br>
                                                                        <table class="table table-success m-2">
                                                                                <thead>
                                                                                        <tr>
                                                                                                <th>Tipo Tutoria</th>
                                                                                                <th>Nivel</th>
                                                                                                <th>Programa Educativo</th>
                                                                                                <th>Fecha inicio</th>
                                                                                                <th>Fecha fin</th>
                                                                                        </tr>
                                                                                </thead>
                                                                                <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_tutoria WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['tipo_tutoria'] ?></td>
                                                    <td><?php echo $mostrar['nivel_academico'] ?></td>
                                                    <td><?php echo $mostrar['programa_educativo'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_fin'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaTuto" onclick="editarRegistroTutorias(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroTutorias(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                                                                </tbody>
                                                                        </table>
                                                                        <br><hr><br>
                                      </div>
                                  </div>
                                <div class="btn btn-secondary border-light" id="subheader3_tutorias">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3_tutorias" aria-expanded="true" aria-controls="subcollapse3_tutorias">Dirección individualizada</a>
                                  </div>
                                  <div id="subcollapse3_tutorias" class="collapse" aria-labelledby="subheader3_tutorias" data-parent="#subaccordion_tutorias">
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
                                                                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaDireccion" onclick="validarDireccionInvi()">Agregar nuevo</button><br><br>

                                                                                <!-- VENTANA PARA LOS FORMULARIOS -->
                                                                                <div class="modal fade" id="ventanaDireccion" tabindex="-1" role="dialog" aria-labelledby="ventanaDireccion">
                                                                                        <div class="modal-dialog">
                                                                                                <div class="modal-content" id="ventanaFormularioDireccion">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                        </div>

                                                                        <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                                        <hr><br><center><h5>Sus servicios</h5></center><br>
                                                                        <table class="table table-success m-2">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th>Fecha inicio</th>
                                                                                    <th>Fecha fin</th>
                                                                                    <th>Tipo Dirección Individualizada</th>
                                                                                    <th>Titulo de Proyecto Dirigido</th>
                                                                                  </tr>
                                                                                </thead>
                                                                              <tbody>
                                                                                        <?php 
                                                  $sql="SELECT * FROM detalle_usuario_direccion_individualizada WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['fecha_de_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_de_fin'] ?></td>
                                                    <td><?php echo $mostrar['tipo_de_direccion'] ?></td>
                                                    <td><?php echo $mostrar['titulo_proyecto_dirigido'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaDireccion" onclick="editarRegistroDireccionInvi(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroDireccionInvi(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                                                                </tbody>
                                                                        </table>
                                                                        <br><hr><br>
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
                                                                                                            <h4>Servicios prestados a la comunidad</h4>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                <div class="col-2">

                                                                                <!-- BOTON AGREGAR -->
                                                                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaServicios" onclick="validarServicio()">Agregar nuevo</button><br><br>

                                                                                <!-- VENTANA PARA LOS FORMULARIOS -->
                                                                                <div class="modal fade" id="ventanaServicios" tabindex="-1" role="dialog" aria-labelledby="ventanaServicios">
                                                                                        <div class="modal-dialog">
                                                                                                <div class="modal-content" id="ventanaFormularioServicios">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                        </div>

                                                                        <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                                        <hr><br><center><h5>Sus servicios</h5></center><br>
                                                                        <table class="table table-success m-2">
                                                                                <thead>
                                                                                        <tr>
                                                                                                <th>Fecha servicio</th>
                                                                                                <th>Tipo de servicio</th>
                                                                                                <th>Servicio prestado</th>
                                                                                        </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                        <?php 
                                                  $sql="SELECT * FROM detalle_usuario_servicios_prestados WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['fecha_servicio'] ?></td>
                                                    <td><?php echo $mostrar['tipo_servicio'] ?></td>
                                                    <td><?php echo $mostrar['servicio_prestado'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaServicios" onclick="editarRegistroServicios(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroServicios(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
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
                                    <!-- CUARTA SECCIÓN CUERPOS COLEGIADOS -->
                                    <div class="btn btn-dark border-light" id="header4">
                      <a class="btn" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">Cuerpos Colegiados</a>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="header4" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_cuerposcolegialos">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1_cuerposcolegialos">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_cuerposcolegialos" aria-expanded="true" aria-controls="subcollapse1_cuerposcolegialos">Gestión Académica de Cuerpos Colegiados</a>
                                  </div>

                                  <div id="subcollapse1_cuerposcolegialos" class="collapse" aria-labelledby="subheader1_cuerposcolegialos" data-parent="#subaccordion_cuerposcolegialos">
                                      <div class="card-body">
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Gestión Académica de Cuerpos Colegiados</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaCuerpos" onclick="validarGestionAcadCuerposColegiados()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                <div class="modal fade" id="ventanaCuerpos" tabindex="-1" role="dialog" aria-labelledby="ventanaCuerpos">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioCuerposColeg">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus gestiones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Fecha de ultimo reporte</th>
                                                      <th>Tipo de gestión</th>
                                                      <th>Clasificación</th>
                                                      <th>Función encomendada</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_gestion_cuerpos_colegiados WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['fecha_ultimo_reporte'] ?></td>
                                                    <td><?php echo $mostrar['tipo_gestion'] ?></td>
                                                    <td><?php echo $mostrar['clasificacion'] ?></td>
                                                    <td><?php echo $mostrar['funcion_encomendada'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaCuerpos" onclick="editarRegistroCuerposCole(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroCuerposCole(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>
                                              </tbody>
                                          </table>
                                          <br><hr><br>


                                      </div>
                                  </div>

                            <div class="btn btn-secondary border-light" id="subheader2_cuerposcolegialos">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2_cuerposcolegialos" aria-expanded="true" aria-controls="subcollapse2_cuerposcolegialos">Gestión Académica</a>
                                  </div>
                                <div id="subcollapse2_cuerposcolegialos" class="collapse" aria-labelledby="subheader2_cuerposcolegialos" data-parent="#subaccordion_cuerposcolegialos">
                                      <div class="card-body">
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Gestión Académica</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaGestionAcad" onclick="validarGestionAcad()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                <div class="modal fade" id="ventanaGestionAcad" tabindex="-1" role="dialog" aria-labelledby="ventanaGestionAcad">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioGestAcad">
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>

                                          <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                          <hr><br><center><h5>Sus gestiones</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Evento</th>
                                                      <th>Tipo de gestión</th>
                                                      <th>Calificación</th>
                                                      <th>Fecha de inicio</th>
                                                      <th>Fecha de fin</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_gestion_academica WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['evento'] ?></td>
                                                    <td><?php echo $mostrar['tipo_gestion'] ?></td>
                                                    <td><?php echo $mostrar['calificacion'] ?></td>
                                                    <td><?php echo $mostrar['fecha_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_fin'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaGestionAcad" onclick="editarRegistroGestionAcad(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroGestionAcad((<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
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
                                    <!-- QUINTA SECCIÓN DEDICACIÓN -->
                                    <div class="btn btn-dark border-light" id="header5">
                      <a class="btn" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">Dedicación</a>
                  </div>
                  <div id="collapse5" class="collapse" aria-labelledby="header5" data-parent="#accordion">
                      <div class="card-body">
                          <div id="subaccordion_dedicacion">
                              <div class="card">
                                  <div class="btn btn-secondary border-light" id="subheader1_dedicacion">
                                      <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1_dedicacion" aria-expanded="true" aria-controls="subcollapse1_dedicacion">Carga Académica</a>
                                  </div>
                                  <div id="subcollapse1_dedicacion" class="collapse" aria-labelledby="subheader1_dedicacion" data-parent="#subaccordion_dedicacion">
                                    <div class="card-body">

                                        <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-9">
                                                          <h4>Carga Académica</h4>
                                                      </div>
                                                  </div>
                                              </div>

                                          <div class="col-2">

                                              <!-- BOTON AGREGAR -->
                                              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaCargaAcad" onclick="validarCargaAcad()">Agregar nuevo</button><br><br>

                                              <!-- VENTANA PARA LOS FORMULARIOS -->
                                                <div class="modal fade" id="ventanaCargaAcad" tabindex="-1" role="dialog" aria-labelledby="ventanaCargaAcad">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content" id="ventanaFormularioCargaAcad">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                        <hr><br><center><h5>Sus grupos</h5></center><br>
                                          <table class="table table-success m-2">
                                              <thead>
                                                  <tr>
                                                      <th>Dependencia</th>
                                                      <th>Nivel</th>
                                                      <th>Grado</th>
                                                      <th>Materia</th>
                                                      <th>No. grupos</th>
                                                      <th>No. horas por semana</th>
                                                      <th>Fecha de inicio</th>
                                                      <th>Fecha de térmnino</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php 
                                                  $sql="SELECT * FROM detalle_usuario_carga_academica WHERE usuario_idusuario='1815906'";
                                                  $result=mysqli_query($conexion,$sql);
                                                  while($mostrar=mysqli_fetch_array($result)){
                                                   ?>
                                                  <tr>
                                                    <td><?php echo $mostrar['dependencia'] ?></td>
                                                    <td><?php echo $mostrar['nivel'] ?></td>
                                                    <td><?php echo $mostrar['grado'] ?></td>
                                                    <td><?php echo $mostrar['materia'] ?></td>
                                                    <td><?php echo $mostrar['num_grupos'] ?></td>
                                                    <td><?php echo $mostrar['num_horas_semana'] ?></td>
                                                    <td><?php echo $mostrar['fecha_inicio'] ?></td>
                                                    <td><?php echo $mostrar['fecha_fin'] ?></td>
                                                    <!-- BOTONES EDITAR Y BORRAR -->
                                                    <td><center><button class="btn btn-warning" data-toggle="modal" data-target="#ventanaCargaAcad" onclick="editarRegistroCargaAcad(<?php echo $mostrar['id'] ?>)">Editar</button></center></td>
                                                    <td><center><button class="btn btn-danger" onclick="borrarRegistroCargaAcad(<?php echo $mostrar['id'] ?>)">Eliminar</button></center></td>
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

        <?php include("scripts/formularios/estimulos/validadoresFormulariosEstimulos.php");?>
        
        <?php include("scripts/formularios/estimulos/validadoresBorrarEstimulos.php");?>

        <?php include("scripts/formularios/estimulos/validadoresEditarEstimulos.php");?>

    </script>

</body>
</html>
