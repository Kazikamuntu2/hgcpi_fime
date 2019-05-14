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
    <title>PDF PRODEP | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function imprimirProdep(el)
    {
      var restorpage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorpage;
    }
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
      <div id="imprimir">
        <div class="container">
            <div class="row-mt-4">
                <div class="col-12">
                    <br><br>
                    <h2><center>PRODEP</center></h2>
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
                        <th class="col-4">Estudios realizados</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Datos laborales</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Área y disciplina a la que se dedica</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Docencia</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Tutoría</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Dirección individualizada</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Producción académica</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Proyectos de investigación</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Líneas de generación o aplicación innovadora del conocimiento</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Cuerpo académico</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Participación en la actualización de PE de licenciatura</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Beneficios Promep</th>
                        <th class="col-8">#</th>
                      </tr>
                      <tr>
                        <th class="col-4">Premios o distinciones</th>
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
                        <th class="col-4">Nacido en</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de nacimiento</th>
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
                        <th class="col-4">Estudios realizados</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nivel de estudios</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estudios en</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Área -> Disciplina</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante no considerada en el catalogo</th>
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
                        <th class="col-4">Datos laborales</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombramiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de nombramiento</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Asociado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Dedicación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución de Educación Superior</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Dependencia de Educación Superior</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Unidad Académica</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Inicio de contrato</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fin del contrato</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Cronología</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Área y disciplina a la que se dedica</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Área</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Disciplina</th>
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
                        <th class="col-4">Nombre del curso</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución en educación superior (IES)</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Dependencia de educación superior</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Programa educativo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de inicio de estudios</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Número de alumnos</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Duración de semanas</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas de asesorías al mes</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas semanales dedicadas a este curso</th>
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
                        <th class="col-4">Tutoría</th>
                        <th class="col-8">Tutoría individual</th>
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
                        <th class="col-4">Fecha de inicio</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha de término:</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de tutelaje</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado de tutelaje</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tutoría</th>
                        <th class="col-8">Tutoría grupal</th>
                      </tr>
                      <tr>
                        <th class="col-4">Número de Estudiantes</th>
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
                        <th class="col-4">Fecha de inicio</th>
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
                        <th class="col-4">Título de la tesis o proyecto individual</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grado académico</th>
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
                        <th class="col-4">Para considerar en el currículum de cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Miembros</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">LGACs</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Producción</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo</th>
                        <th class="col-8">Artículo arbitrado</th>
                      </tr>
                      <tr>
                        <th class="col-4">Autor(es)</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado actual</th>
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
                        <th class="col-4">Editorial</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Volumen</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">ISSN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Propósito</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Para considerar en el curriculum de cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Miembros</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">LGACs</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo</th>
                        <th class="col-8">Libro</th>
                      </tr>
                      <tr>
                        <th class="col-4">Autor(es)</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de participación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado actual</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Editorial</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Páginas</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">No. Ediciones</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Total de ejemplares</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">ISBN</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Propósito</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Para considerar en el curriculum de cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Miembros</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">LGACs</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo</th>
                        <th class="col-8">Memorias en extenso</th>
                      </tr>
                      <tr>
                        <th class="col-4">Autor(es)</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Título de la presentación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del congreso donde se presentó</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">País</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Ciudad</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Año</th>
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
                        <th class="col-4">Archivo PDF</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado actual</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Propósito</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Para considerar en el curriculum de cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Miembros</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">LGACs</th>
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
                        <th class="col-4">Título de proyecto</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nombre del patrocinador</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Alumnos participantes</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Actividades realizadas</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Para considerar el curriculum del cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Miembros</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">LGACs</th>
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
                        <th class="col-4">Tipo de patrocinador</th>
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
                        <th class="col-4">Cargo dentro de la comisión o cuerpo colegiado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Función encomendada</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Órgano colegiado al que fue presentado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Aprobado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Resultados obtenidos</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado</th>
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
                        <th class="col-4">Fecha de último informe presentado</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas dedicadas a la semana a esta gestión</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Línea de generación y aplicación del conocimiento (LGAC)</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Línea</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Actividades que realiza</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Horas a la semana dedicadas a esta LGAC</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Nombre del cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Clave</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Grado de consolación</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Línea(s) que cultiva el cuerpo académico</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Programas Educativos Actualizados</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Programa educativo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Tipo de actualización</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Beneficios PROMEP</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">IES de la solicitud</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Solicitud</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Vigencia</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Estado</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="col-4">Beneficios externos a PROMEP</th>
                        <th class="col-8"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="col-4">Tipo de apoyo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Nivel</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha inicial</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha final</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Monto</th>
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
                        <th class="col-4">Nombre</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Motivo</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Fecha</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante</th>
                        <th class="col-8"></th>
                      </tr>
                      <tr>
                        <th class="col-4">Institución otorgante no considerada en el catálogo</th>
                        <th class="col-8"></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
          <br>
          <center><input class="btn btn-secondary" type="button" value="Imprimir PDF" onclick="imprimirProdep('imprimir')"></center>
          <br>
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
