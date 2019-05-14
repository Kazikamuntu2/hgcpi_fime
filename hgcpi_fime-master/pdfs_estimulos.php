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
    <title>PDF Estímulos UANL | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function imprimirEstimulos()
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
                    <h2><center>Estimulos UANL</center></h2>
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
                        <th class="col-4">Tutorías</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Carga académica</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">individualizada</th>
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
                        <th class="col-4">Proyectos de investigación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Gestión académica</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Gestión académica de cuerpos colegiados</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Premios y distinciones</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Servicios prestados a la comunidad</th>
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
                        <th class="col-4">Tipo de capacitación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Descripción</th>
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
                        <th class="col-4">Número de horas</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre de la institución</th>
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
                        <th class="col-4">Institución que otorgó el certificado</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Tutorías</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de tutoría</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Programa educativo en el que participa</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de periodo escolar</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Periodo escolar</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de término:</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área de conocimiento de la tutoría</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Carga académica</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Dependencia</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Materia</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">No. De grupos</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">No. De horas a la semana</th>
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
                        <th class="col-4">Dirección individualizada</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de dirección</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título del proyecto dirigido</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grado académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">IES realiza gestión</th>
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
                        <th class="col-4">No. Alumnos</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado de la dirección individualizada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Considera C.V. de C.A.</th>
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
                        <th class="col-4">Estado del artículo</th>
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
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de autor</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Proyectos de investigación</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Título del proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de participación</th>
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
                        <th class="col-4">Tipo de patrocinador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre de patrocinador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Monto de apoyo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Investigadores participantes</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Gestión académica</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de gestión</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Evento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de evento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de participación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de alcance</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">IES realiza gestión</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de termino</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado de la gestión</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Calificación</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Gestión académica de cuerpos colegiados</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de gestión académica</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clasificación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Función encomendada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Órgano colegiado presentado</th>
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
                        <th class="col-4">Fecha de último reporte presentado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">¿Aprobado?</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas a la semana</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Resultados obtenidos en la gestión</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado de la gestión</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">IES realiza gestión</th>
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
                        <th class="col-4">Año</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Monto mensual</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Servicios prestados a la comunidad</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de servicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Servicio prestado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución solicitante</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de servicio</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <center><input class="btn btn-secondary" type="button" value="Imprimir PDF" onclick="imprimirEstimulos()"></center>
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
