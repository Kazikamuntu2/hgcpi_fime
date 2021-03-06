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
    <title>PDF SNI | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function imprimirSni()
    {
      window.print();
    };
    </script>
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
                    <h2><center>SNI</center></h2>
                    <hr><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col-4">Sección</th>
                        <th scope="col-8">Numero de registros</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Grados académicos y capacitación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Lenguas e idiomas</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Docencia</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Tesis y diplomados</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Experiencia laboral</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Estancias de investigación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Producción de artículos</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Producción de libros</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Producción de capítulos</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Reportes técnicos</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Memorias</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Documentos de trabajo</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Desarrollos tecnológicos</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Producción de proyectos académicos</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Innovación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Desarrollo de software</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Patentes</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Participación en congresos</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Divulgación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Redes temáticas CONACYT</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Redes de investigación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Grupos de investigación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Evaluaciones CONACYT</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Evaluaciones no CONACYT</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Distinciones CONACYT</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Distinciones no CONACYT</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Premios y distinciones</th>
                        <th class="col-8">#</th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Identificación del profesor</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Género</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">RFC</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">CURP</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título universitario</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nacido en</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número de CVU</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">ORCID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de nacimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Ciudad de nacimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado Civil</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Teléfono particular</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Teléfono móvil</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Correo electrónico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Correo institucional</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Calle de residencia</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número exterior</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número interior</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Colonia de residencia</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País donde reside</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado del país donde reside</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Código Postal</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Ciudad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">IES de adscripción</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Grados académicos y capacitación</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estatus</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Opciones de titulación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Púbica o privada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clasificación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de formación continua</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre de formación continua</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de formación continua</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de formación continua</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas totales de formación continua</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de formación continua</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio de estudios</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de fin de estudios</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de obtención del título o grado</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Lenguas e idiomas</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Idioma</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grado de dominio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel de dominio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel conferido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel de lectura</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Documento probatorio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Puntos / porcentaje</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Vigencia de</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">a</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de evaluación</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Docencia</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del programa educativo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del curso o asignatura</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre de institución en educación superior IES</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Pública o privada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País donde reside la institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clasificación de la institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas totales del curso o asignatura</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de fin</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Tesis y diplomados</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre de institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Pública o privada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País donde reside la institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clasificación de la institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Programa PNPC</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título de la tesis </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo de conocimiento de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina de conocimiento de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina de conocimiento de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País donde se realizó la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grado académico de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del diplomado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del curso o asignatura</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año del diplomado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de aprobación de la tesis</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de obtención de grado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas totales del diplomado</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Experiencia laboral</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">¿Es su empleo actual?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Puesto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Logros</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área del puesto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo del puesto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina del puesto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina del puesto</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Producción de artículos</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">ISSN del artículo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del artículo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre de la revista</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Volumen de la revista</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de edición</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Página inicial del artículo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Página final del artículo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Recibió ayuda del CONACYT?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fondo / programa</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Researcher ID Thomson</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Comisión de C.V. de C.A.</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-12 bg-dark text-light">Investigadores participantes</th>
                        <th class="col-12 bg-dark text-light"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Origen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Identificador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Researcher ID Thomson</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Producción de libros</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">ISBN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Idioma</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Volumen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tomo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tiraje</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número de página</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Editorial</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Edición</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Lugar de edición</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de edición</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento del libro</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo del libro</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina del libro</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina del libro</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Researcher ID Thomson</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Producción de capítulos</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">ISBN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Editorial</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número de edición</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de edición</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título del capítulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número del capítulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">De la página</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">A la página</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Resumen del capitulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento del capítulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo del capítulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina del capítulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina del capítulo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Researcher ID Thomson</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Reportes técnicos</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Institución a la que se presenta el reporte</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número de páginas</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Origen del reporte técnico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Descripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Objetivos</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Recibió apoyo del CONACYT?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento del reporte técnico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo del reporte técnico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina del reporte técnico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina del reporte técnico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Researcher ID Thomson</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Memorias</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Título de la memoria</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título de la obra</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título de la publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">De la página</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">A la página</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento de la memoria</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo de la memoria</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina de la memoria</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina de la memoria</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina de la memoria</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Documentos de trabajo</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Título del documento de trabajo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título de la obra</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título de la publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">De la página </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">A la página</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de la publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento del documento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo del documento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina del documento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina del documento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">arXiv ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">PubMed ID</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Open ID</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Desarrollos tecnológicos</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del desarrollo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de desarrollo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Documento de respaldo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Objetivos del desarrollo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Recibió ayuda del CONACYT?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Sector industrial del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subrama del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subsector del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Rama del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clase del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Sector industrial del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">División del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grupo del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clase del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Generación de valor y/o impacto para el beneficiario</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Formación de recursos u otros resultados</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Producción de proyectos académicos</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de fin</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Innovación</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de innovación OSLO</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de innovación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Aplicación de la innovación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Potencial de cobertura</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Mecanismo de protección de propiedad intelectual</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Recibió apoyo del CONACYT?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Sector industrial del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subrama del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subsector del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Rama del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clase del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Sector industrial del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">División del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grupo del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Monto de venta anuales</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Volumen de producción anuales</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">No. De empleados directos anuales</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">No. De empleados indirectos anuales</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Desarrollo de software</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de desarrollo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Cuenta con derechos de autor?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas hombre del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de fin</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Costo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Beneficiario</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Objetivo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Resumen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Contribución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Generación de valor y/o impacto para el beneficiario</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Formación de recursos u otros resultados</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Recibió apoyo del CONACYT?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Logros</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Patentes</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre o título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de patente</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado de la patente</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número del trámite</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de solicitud</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de ingreso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Expediente</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clasificación internacional de patentes</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Resumen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Explotación industrial?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de la publicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año de edición</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Participación en congresos</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del congreso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título del trabajo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de participación en el congreso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-12 bg-dark text-light">Investigadores participantes</th>
                        <th class="col-12 bg-dark text-light"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Género </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel de escolaridad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nacionalidad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de adscripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Pertenece a SNI?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tiempo en horas de colaboración</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de colaborador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Teléfono</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Móvil</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Correo</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Divulgación</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Título del trabajo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de participación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de evento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución organizadora</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Dirigido a </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de medio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Palabras clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Notas periodísticas</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Producto obtenido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tutorías</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Sector industrial del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subrama del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subsector del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Rama del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clase del SCIAN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Sector industrial del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">División del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grupo del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clase del OCDE</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-12 bg-dark text-light">Investigadores participantes</th>
                        <th class="col-12 bg-dark text-light"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Redes temáticas del CONACYT</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Red temática CONACYT</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de ingreso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-12 bg-dark text-light">Investigadores participantes</th>
                        <th class="col-12 bg-dark text-light"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Género </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel de escolaridad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nacionalidad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de adscripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Pertenece a SNI?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tiempo en horas de colaboración</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de colaborador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Teléfono</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Móvil</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Correo</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Redes de investigación</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre de red</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de creación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de ingreso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del responsable de la red</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido del responsable de la red</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido del responsable de la red</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución del responsable de la red</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Total de integrantes</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-12 bg-dark text-light">Investigadores participantes</th>
                        <th class="col-12 bg-dark text-light"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Género </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel de escolaridad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nacionalidad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de adscripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Pertenece a SNI?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tiempo en horas de colaboración</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de colaborador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Teléfono</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Móvil</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Correo</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Grupos de investigación</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del grupo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de creación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de ingreso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del responsable / líder de grupo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido del responsable / líder de grupo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido del responsable / líder de grupo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de adscripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Total de investigadores</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Impacto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Colaboración</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-12 bg-dark text-light">Investigadores participantes</th>
                        <th class="col-12 bg-dark text-light"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Primer apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Segundo apellido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Género </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel de escolaridad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nacionalidad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de adscripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Pertenece a SNI?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tiempo en horas de colaboración</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de colaborador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Teléfono</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Móvil</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Correo</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Evaluaciones CONACYT</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del fondo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Dictamen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Descripción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de asignación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de aceptación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de evaluación</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Evaluaciones no CONACYT</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre de la institución </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de fin</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Cargo desempeñado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de evaluación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Producto evaluado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del producto evaluado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Dictamen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Descripción de la actividad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Campo </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Subdisciplina</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Distinciones CONACYT</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre de la distinción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Distinciones no CONACYT</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre de la distinción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución que otorgó el premio o la distinción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año </th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Premios y distinciones</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de distinción o reconocimiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre de la distinción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución que otorgó el premio o distinción</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante no considerada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Pública o privada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País donde reside la institución</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Motivo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <center><input class="btn btn-secondary" type="button" value="Imprimir PDF" onclick="imprimirSni()"></center>
                  <br>
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
