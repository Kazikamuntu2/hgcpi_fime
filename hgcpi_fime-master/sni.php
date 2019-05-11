<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema Nacional de Investigadores | HGCPI</title>
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
                    <h2><center>Convocatoria de Sistema Nacional de Investigadores</center></h2>
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
                                <a class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Formación académica</a>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader11">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse11" aria-expanded="true" aria-controls="subcollapse11">Grados académicos y capacitación</a>
                                            </div>
                                            <div id="subcollapse11" class="collapse" aria-labelledby="subheader11" data-parent="#subaccordion">
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
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario11" onclick="validarSNIGradAcadCapac()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario11" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario11">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioGradAcadCapac">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus grados académicos y capacitaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Título</th>
                                                                <th>Estatus</th>
                                                                <th>Institución otorgante</th>
                                                                <th>Fecha de inicio de estudios</th>
                                                                <th>Fecha de fin de estudios</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Ejemplo de título</td>
                                                                <td>Completado</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>02/03/2002</td>
                                                                <td>02/03/2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader12">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse12" aria-expanded="true" aria-controls="subcollapse12">Lenguas e idiomas</a>
                                            </div>
                                            <div id="subcollapse12" class="collapse" aria-labelledby="subheader12" data-parent="#subaccordion">
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
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario12" onclick="validarSNILenguaIdioma()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario12" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario12">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioLenguaIdioma">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                   <hr><br><center><h5>Sus lenguas e idiomas</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Idioma</th>
                                                                <th>Nivel de dominio</th>
                                                                <th>Nivel conferido</th>
                                                                <th>Nivel de lectura</th>
                                                                <th>Vigencia de</th>
                                                                <th>Vigencia a</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Francés</td>
                                                                <td>Avanzado</td>
                                                                <td>Intermedio</td>
                                                                <td>Avanzado</td>
                                                                <td>02/03/2017</td>
                                                                <td>03/03/2018</td>
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

                        <!--CARD#2-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header2">
                                <a class="btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Trayectoria profesional</a>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="header2" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader21">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse21" aria-expanded="true" aria-controls="subcollapse21">Experiencia laboral</a>
                                            </div>
                                            <div id="subcollapse21" class="collapse" aria-labelledby="subheader21" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Experiencia laboral</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario21" onclick="validarSNIExpLabor()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario21" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario21">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioExpLab">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus experiencias laborales</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Puesto</th>
                                                                <th>Institución</th>
                                                                <th>Fecha de inicio</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>12-03-2016</td>                                                            
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader22">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse22" aria-expanded="true" aria-controls="subcollapse22">Estancias de investigación</a>
                                            </div>
                                            <div id="subcollapse22" class="collapse" aria-labelledby="subheader22" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Estancias de investigación</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario22" onclick="validarSNIEstancInves()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario22" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario22">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaEstancInves">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus estancias de investigación</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre de la estancia</th>
                                                                <th>Nombre de la institución</th>
                                                                <th>Fecha de inicio</th>
                                                                <th>Fecha de fin</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>24/05/2018</td>
                                                                <td>23/06/2018</td>
                                                    </table>
                                                    <br><hr><br>
                                                   
                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>

                                            </div>
                                        </div>
                                            
                                            <div class="btn btn-secondary border-light" id="subheader23">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse23" aria-expanded="true" aria-controls="subcollapse23">Docencia</a>
                                            </div>
                                            <div id="subcollapse23" class="collapse" aria-labelledby="subheader23" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Docencia</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario23" onclick="validarSNIDocencia()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario23" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario23">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaDocencia">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Su docencia</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre del programa educativo</th>
                                                                <th>Nombre de la asignatura</th>
                                                                <th>Nombre de institución</th>
                                                                <th>Fecha de inicio</th>
                                                                <th>Fecha de fin</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Ingeniero en Tecnología de Software</td>
                                                                <td>Física 4</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>24/05/2018</td>
                                                                <td>23/06/2018</td>
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

                        <!--CARD#3-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header3">
                                <a class="btn" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Producción</a>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="header3" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader31">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse31" aria-expanded="true" aria-controls="subcollapse31">Producción científica</a>
                                            </div>
                                            <div id="subcollapse31" class="collapse" aria-labelledby="subheader31" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Producción científica</h4> 
                                                                </div>
                                                                <div class="col-3">
                                                                    <h5><right>Tipo de documento:</right></h5>
                                                                    <select name="seleccion_produccion_academica" id="produccion_cientifica" class="custom-select">
                                                                        <option value="seleccion">Seleccione...</option>
                                                                        <option value="articulo">Artículo</option>
                                                                        <option value="libro">Libro</option>
                                                                        <option value="capitulo_libro">Capítulo del libro</option>
                                                                        <option value="reporte">Reporte técnico</option>
                                                                        <option value="memoria">Memoria</option>
                                                                        <option value="documento_trabajo">Documento de trabajo</option>
                                                                    </select>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario31" onclick="validarSNISeleccionProduccionCientifica()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario31" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario31">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioProdCient">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <!--TABLA ARTICULOS -->
                                                    <hr><br><center><h5>Sus artículos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ISSN</th>
                                                                <th>Nombre del artículo</th>
                                                                <th>Año de publicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>0798-2259</td>
                                                                <td>Investigación de la presión atmósferica</td>
                                                                <td>2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA LIBROS -->
                                                    <hr><br><center><h5>Sus libros</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ISBN</th>
                                                                <th>Título</th>
                                                                <th>Año de publicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>0-7645-2641-3</td>
                                                                <td>Programación en páginas web</td>
                                                                <td>2012</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA CAPITULOS -->
                                                    <hr><br><center><h5>Sus capítulos de libro</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ISBN</th>
                                                                <th>Título del libro</th>
                                                                <th>Año de edición</th>
                                                                <th>Título del capitulo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>0-7635-2541-5</td>
                                                                <td>Redes neurológicas</td>
                                                                <td>1996</td>
                                                                <td>Funcionamiento de redes</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA REPORTES -->
                                                    <hr><br><center><h5>Sus reportes técnicos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Institución a la que se presenta el reporte</th>
                                                                <th>Fecha de publicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>25/06/2005</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA MEMORIAS -->
                                                    <hr><br><center><h5>Sus memorias</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Titulo de la memoria</th>
                                                                <th>Título de la obra</th>
                                                                <th>Título de la publicación</th>
                                                                <th>Año de publicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Memoria de ejemplo</td>
                                                                <td>Titulo de ejmplo</td>
                                                                <td>titulo de ejemplo</td>
                                                                <td>2005</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA DOCUMENTOS DE TRABAJO -->
                                                    <hr><br><center><h5>Sus documentos de trabajo</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Título del documento</th>
                                                                <th>Título de la obra</th>
                                                                <th>Título de la publicación</th>
                                                                <th>Año de la publicación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Título de ejemplo</td>
                                                                <td>Título de ejemplo</td>
                                                                <td>Título de ejemplo</td>
                                                                <td>2006</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader32">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse32" aria-expanded="true" aria-controls="subcollapse32">Producción tecnológica y de innovación</a>
                                            </div>
                                            <div id="subcollapse32" class="collapse" aria-labelledby="subheader32" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Producción tecnológica y de innovación</h4> 
                                                                </div>
                                                                <div class="col-3">
                                                                    <h5><right>Tipo de documento:</right></h5>
                                                                    <select name="seleccion_produccion_academica" id="produccion_tecnologica" class="custom-select">
                                                                        <option value="seleccion">Seleccione...</option>
                                                                        <option value="desarrollo_tecnologico">Desarrollos tecnológicos</option>
                                                                        <option value="innovacion">Innovación</option>
                                                                        <option value="desarrollo_software">Desarrollo de software</option>
                                                                        <option value="patente">Patentes</option>
                                                                    </select>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario32" onclick="validarSNISeleccionProduccionTecnologica()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario32" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario32">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioProdTec">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <!--TABLA DESARROLLOS TECNOLOGICOS -->
                                                    <hr><br><center><h5>Sus desarrollos tecnológicos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre del desarrollo</th>
                                                                <th>Tipo de desarrollo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Ejemplo del desarrollo</td>
                                                                <td>Ejemplo del tipo de desarrollo</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA INNOVACION -->
                                                    <hr><br><center><h5>Sus innovaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo de innovación OSLO</th>
                                                                <th>Tipo de innovación</th>
                                                                <th>Monto de ventas anuales</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Ejemplo de tipo</td>
                                                                <td>Ejemplo de tipo</td>
                                                                <td>15000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA DESARROLLO SOFTWARE -->
                                                    <hr><br><center><h5>Sus desarrollos de software</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Título</th>
                                                                <th>Horas hombre del proyecto</th>
                                                                <th>Fecha de inicio</th>
                                                                <th>Fecha de fin</th>
                                                                <th>Costo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LogicAid</td>
                                                                <td>120</td>
                                                                <td>25/05/1996</td>
                                                                <td>26/05/1996</td>
                                                                <td>15000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <!--TABLA PATENTES -->
                                                    <hr><br><center><h5>Sus patentes</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre o título</th>
                                                                <th>Tipo de patente</th>
                                                                <td>Estado de la patente</td>
                                                                <td>Fecha de solicitud</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Ejemplo del nombre de la patente</td>
                                                                <td>Ejemplo del tipo de patente</td>
                                                                <td>Pendiente</td>
                                                                <td>25/03/2019</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader33">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse33" aria-expanded="true" aria-controls="subcollapse33">Producción de proyectos académicos</a>
                                            </div>
                                            <div id="subcollapse33" class="collapse" aria-labelledby="subheader33" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Producción de proyectos académicos</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario33" onclick="validarSNIProduccionProyectosAcad()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario33" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario33">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaProdProyAcad">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus proyectos académicos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre del proyecto</th>
                                                                <th>Fecha de inicio</th>
                                                                <th>Fecha de fin</th>
                                                                <th>Institución</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>24/05/2018</td>
                                                                <td>23/06/2018</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
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
                        </div>


                    <!--CARD#4-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header4">
                                <a class="btn" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse1">Formación capital humano</a>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="header4" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader41">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse41" aria-expanded="true" aria-controls="subcollapse41">Tesis y diplomados</a>
                                            </div>
                                            <div id="subcollapse41" class="collapse" aria-labelledby="subheader41" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Tesis y diplomados</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario41" onclick="validarSNITesDip()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario41" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario41">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioTesDip">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus tesis y diplomados</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre de institución</th>
                                                                <th>Tipo de institución</th>
                                                                <th>Fecha de aprobación de la tesis</th>
                                                                <th>Fecha de obtención del grado</th>
                                                                <th>Horas totales del diplomado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>Nacional</td>
                                                                <td>02/03/2002</td>
                                                                <td>02/03/2002</td>
                                                                <td>40</td>
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

                    <!--CARD#5-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header5">
                                <a class="btn" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">Comunicación pública de la ciencia, tecnológica y de innovación</a>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="header5" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader51">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse51" aria-expanded="true" aria-controls="subcollapse51">Participación en congresos</a>
                                            </div>
                                            <div id="subcollapse51" class="collapse" aria-labelledby="subheader51" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Participación en congresos</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario51" onclick="validarSNIPartCong()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario51" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario51">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioPartCong">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus participaciones en congresos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre del congreso</th>
                                                                <th>Título del trabajo</th>
                                                                <th>Tipo de participación en el congreso</th>
                                                                <th>Fecha</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>02/03/2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader52">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse52" aria-expanded="true" aria-controls="subcollapse52">Divulgación</a>
                                            </div>
                                            <div id="subcollapse52" class="collapse" aria-labelledby="subheader52" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Divulgación</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario52" onclick="validarSNIDivulgacion()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario52" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario52">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioDivulgacion">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                   <hr><br><center><h5>Sus participaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Título del trabajo</th>
                                                                <th>Tipo de participación</th>
                                                                <th>Institución organizadora</th>
                                                                <th>Fecha</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>03/03/2018</td>
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

                  <!--CARD#6-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header6">
                                <a class="btn" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">Vinculación</a>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="header6" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader61">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse61" aria-expanded="true" aria-controls="subcollapse61">Redes temáticas CONACYT</a>
                                            </div>
                                            <div id="subcollapse61" class="collapse" aria-labelledby="subheader61" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Redes temáticas CONACYT</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario61" onclick="validarSNIRedTematica()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario61" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario61">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioRedTematica">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus participaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Red temática CONACYT</th>
                                                                <th>Fecha de ingreso</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>02/03/2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader62">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse62" aria-expanded="true" aria-controls="subcollapse62">Redes de investigación</a>
                                            </div>
                                            <div id="subcollapse62" class="collapse" aria-labelledby="subheader62" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Redes de investigación</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario62" onclick="validarSNIRedInvest()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario62" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario62">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioRedInvest">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                   <hr><br><center><h5>Sus participaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre de red</th>
                                                                <th>Fecha de ingreso</th>
                                                                <th>Institución del responsable de la red</th>
                                                                <th>Total de integrantes</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>03/03/2018</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>32</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                              </div>
                                             </div>

                                            <div class="btn btn-secondary border-light" id="subheader63">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse63" aria-expanded="true" aria-controls="subcollapse63">Grupos de investigación</a>
                                            </div>
                                            <div id="subcollapse63" class="collapse" aria-labelledby="subheader63" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Grupos de investigación</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario63" onclick="validarSNIGrupInvest()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario63" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario63">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioGrupInvest">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus grupos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre del grupo</th>
                                                                <th>Fecha de creación</th>
                                                                <th>Fecha de ingreso</th>
                                                                <th>Total de invetigadores</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>02/03/2002</td>
                                                                <td>02/03/2002</td>
                                                                <td>12</td>
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

                    <!--CARD#7-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header7">
                                <a class="btn" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">Evaluaciones</a>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="header7" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader71">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse71" aria-expanded="true" aria-controls="subcollapse71">Evaluaciones CONACYT</a>
                                            </div>
                                            <div id="subcollapse71" class="collapse" aria-labelledby="subheader71" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Evaluaciones CONACYT</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario71" onclick="validarSNIEvaluConacyt()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario71" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario71">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioEvaluConacyt">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus evaluaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre del fondo</th>
                                                                <th>Fecha de asignación</th>
                                                                <th>Fecha de aceptación</th>
                                                                <th>Fecha de evaluación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>12/05/2005</td>
                                                                <td>13/05/2005</td>
                                                                <td>14/05/2005</td>
                                                              </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader72">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse72" aria-expanded="true" aria-controls="subcollapse72">Evaluaciones no CONACYT</a>
                                            </div>
                                            <div id="subcollapse72" class="collapse" aria-labelledby="subheader72" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Evaluaciones no CONACYT</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario72" onclick="validarSNIEvaluNoConacyt()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario72" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario72">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioEvaluNoConacyt">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                   <hr><br><center><h5>Sus evaluaciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre de la institución</th>
                                                                <th>Fecha de inicio</th>
                                                                <th>Fecha de fin</th>
                                                                <th>Nombre del producto evaluado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>02/03/2002</td>
                                                                <td>02/03/2002</td>
                                                                <td>LLenado de ejemplo</td>
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

                    <!--CARD#8-->
                        <div class="card border-0">
                            <div class="btn btn-dark border-light" id="header8">
                                <a class="btn" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">Premios y distinciones</a>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="header8" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader81">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse81" aria-expanded="true" aria-controls="subcollapse81">Distinciones CONACYT</a>
                                            </div>
                                            <div id="subcollapse81" class="collapse" aria-labelledby="subheader81" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Distinciones CONACYT</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario81" onclick="validarSNIDistinConacyt()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario81" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario81">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioDistinConacyt">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus distinciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre de distinción</th>
                                                                <th>Año</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader82">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse82" aria-expanded="true" aria-controls="subcollapse82">Distinciones no CONACYT</a>
                                            </div>
                                            <div id="subcollapse82" class="collapse" aria-labelledby="subheader82" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Distinciones no CONACYT</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario82" onclick="validarSNIDistinNoConacyt()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario82" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario82">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioDistinNoConacyt">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                   <hr><br><center><h5>Sus distinciones</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre de la distinción</th>
                                                                <th>Institución que otorgó la distinción</th>
                                                                <th>Año</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>

                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                              </div>
                                             </div>

                                            <div class="btn btn-secondary border-light" id="subheader83">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse83" aria-expanded="true" aria-controls="subcollapse83">Premios y distinciones</a>
                                            </div>
                                            <div id="subcollapse83" class="collapse" aria-labelledby="subheader83" data-parent="#subaccordion">
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
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario83" onclick="validarSNIPremDistin()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                            <div class="modal fade" id="ventanaFormulario83" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario83">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioPremDistin">
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
                                                                <th>Nombre de la distinción</th>
                                                                <th>Institución que otorgó la distinción</th>
                                                                <th>Año</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>LLenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Universidad Autónoma de Nuevo León</td>
                                                                <td>2012</td>
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

        <?php include("scripts/formularios/sni/validadoresFormulariosSni.php");?>

    </script>
</body>
</html>
