<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perfil personal | HGCPI FIME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=egde">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
                      <a class="nav-link " href="perfil.php#datos">Datos Personales</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="perfil.php#convocatorias" tabindex="-1" aria-disabled="false">Imprimir Convocatorias</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="#">Dra. Mayra Deyanira Flores Guerrero</a></span>
                  </div>
            </nav>
    </header>

        <div class="row-mt-4">
          <br><hr>
          <center><h4>Perfil Personal del Usuario</h4></center><br>
          <center><h5 style="font-weight: normal; font-size: 26px;"><b>Mayra Deyanira Flores Guerrero</b></h5></center>
          <center><h5 style="font-weight: normal; font-size: 18px;"><i>Facultad de Ingeniería Mecánica y Eléctrica</i></h5></center>
        <br><hr><br>

        <div class="container" id="convocatorias">
          <h5><b>Estatus de convocatorias al momento</b></h5></center><br>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="bg-dark"><a href="" style="display: block; color: #f2f2f2; text-decoration: none; text-align: center;">PRODEP</a></td>
                <td class="bg-light"><a href="" style="display: block; color: #111; text-decoration: none; text-align: center;">Estatus de convocatoria: <b><font color="darkred">INACTIVA / En revisión</font></b></a></td>
                <td class="bg-danger"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Ir al llenado</a></td>
                <td class="bg-danger"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Imprimir formato</a></td>
              </tr>
              <tr>
                <td class="bg-dark"><a href="" style="display: block; color: #f2f2f2; text-decoration: none; text-align: center;">Sistema Nacional de Investigadores</a></td>
                <td class="bg-light"><a href="" style="display: block; color: #111; text-decoration: none; text-align: center;">Estatus de convocatoria: <b><font color="darkred">INACTIVA hasta 21 Mayo 2019</font></b></a></td>
                <td class="bg-danger"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Ir al llenado</a></td>
                <td class="bg-danger"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Imprimir formato</a></td>
              </tr>
              <tr>
                <td class="bg-dark"><a href="" style="display: block; color: #f2f2f2; text-decoration: none; text-align: center;">Estímulos UANL</a></td>
                <td class="bg-light"><a href="" style="display: block; color: #111; text-decoration: none; text-align: center;">Estatus de convocatoria: <b><font color="green">ACTIVA hasta 2 Mayo 2019</font></b></a></td>
                <td class="bg-success"><a href="estimulos.php" style="display: block; color: white; text-decoration: none; text-align: center;">Ir al llenado</a></td>
                <td class="bg-success"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Imprimir formato</a></td>
              </tr>
            </tbody>
          </table><br>
          <h6><center>El estatus de las convocatorias puede cambiar <b>en cualquier momento</b> cercano a la apertura o cierre de las mismas.</center>
        </div>

        <div class="container" id="datos"><br><br>
            
            <h5><b>Datos generales del afiliado</b></h5>
            <table class="table">
          <tbody class="">
            <tr>
              <td>Nombre</td>
              <td>Primer Apellido</td>
              <td>Segundo Apellido</td>
            </tr>
            <tr>
              <td>RFC</td>
              <td>ORCID</td>
              <td>CURP</td>
            </tr>
            <tr>
              <td>Fecha Nacimiento</td>
              <td>CVU</td>
              <td>Sexo</td>
            </tr>
          </tbody>
        </table>

        <br>

         <h5><b>Domicilio y contacto personal</b></h5>
            <table class="table">
          <tbody class="">
            <tr>
              <td>País de nacimiento</td>
              <td>Ciudad de nacimiento</td>
              <td>Estado civil</td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td>Teléfono móvil particular</td>
              <td>Correo electrónico personal</td>
            </tr>
            <tr>
              <td>Calle de residencia</td>
              <td>Número</td>
              <td>Colonia</td>
            </tr>
            <tr>
              <td>Ciudad de residencia</td>
              <td>Estado de residencia</td>
              <td>País de residencia</td>
            </tr>
          </tbody>
        </table> 
        <br><hr><br>
        </div>

        <div class="container">
         <h6><center>Si desea hacer un cambio en sus datos personales, por favor póngase en contacto con <a href="#">la administración de la plataforma</a>.</center></h6><br>

        </div>

        </div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>