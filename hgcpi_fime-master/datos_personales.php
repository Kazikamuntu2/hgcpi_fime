<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datos Personales | HGCPI FIME</title>
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
                          <a class="dropdown-item" href="#">PRODEP</a>
                          <a class="dropdown-item" href="#">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="datos_personales.php">Datos Personales</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Imprimir Convocatorias</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="#">Dra. Mayra Deyanira Flores Guerrero</a></span>
                  </div>
            </nav>
    </header>

        <div class="container">
        	<div class="col-md-10 offset-md-1">
        		<br><br>
        		<h2><center>Datos Personales</center></h2><br>
                <p style="text-align: justify;">Por favor, llene la información cuidadosamente. Para dudas y aclaraciones sobre la información y su llenado <a href="#">consulte aquí.</a> O en su caso, acuda personalmente a la Coordinación de Sistemas de la FIME.</p>
        		<br><hr>
        		<form enctype="multipart/form-data" action="#" method="POST">
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nombre(s)</label>
				    <input type="text" class="form-control" id="nombre" placeholder="Roberto" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Apellido Paterno</label>
				    <input type="text" class="form-control" id="ap_paterno" placeholder="Pérez" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Apellido Materno</label>
				    <input type="text" class="form-control" id="ap_materno" placeholder="López" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
				    <input type="text" class="form-control" id="fecha_nacimiento" placeholder="26-09-1968" required="true">
				  </div>
				  <div class="form-group">
				  <label for="exampleFormControlInput1">Sexo</label>
				  <select id="sexo" class="form-control custom-select" required>
					  <option value="soltero">Masculino</option>
					  <option value="casado">Femenino</option>
				  </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nacionalidad</label>
				    <input type="text" class="form-control" id="nacionalidad" placeholder="Mexicana" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Ciudad de Nacimiento</label>
				    <input type="text" class="form-control" id="ciudad_nacimiento" placeholder="Monterrey" required="true">
				  </div>
				  <div class="form-group">
				  <label for="exampleFormControlInput1">Estado civil</label>
				  <select id="estado_civil" class="form-control custom-select" required>
					  <option value="soltero">Soltero/a</option>
					  <option value="casado">Casado/a</option>
					  <option value="divorciado">Divorciado/a</option>
				  </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Teléfono (8 dígitos sin LADA)</label>
				    <input type="text" class="form-control" id="telefono" placeholder="80164072" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Teléfono móvil particular (10 dígitos sin LADA)</label>
				    <input type="text" class="form-control" id="telefono_particular" placeholder="8117426670" required="true">
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Correo electronico personal</label>
				    <input type="email" class="form-control" id="correo_personal" placeholder="alguien@gmail.com" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Calle de residencia</label>
				    <input type="text" class="form-control" id="calle_dom" placeholder="Golfo de México" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número de residencia exterior</label>
				    <input type="text" class="form-control" id="numero_exterior_dom" placeholder="310" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número de residencia interior</label>
				    <input type="text" class="form-control" id="numero_interior_dom" placeholder="205" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Colonia de residencia</label>
				    <input type="text" class="form-control" id="colonia_residencia" placeholder="Cumbres Segundo Sector" required="true">
				  </div>
				  <div class="form-group">
                                                                          <label for="pais_residencia" required>País de residencia</label>
                                                                          <select id="pais_residencia" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="AF">Afganistán</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DE">Alemania</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antártida</option>
                                                                            <option value="AG">Antigua y Barbuda</option>
                                                                            <option value="AN">Antillas Holandesas</option>
                                                                            <option value="SA">Arabia Saudí</option>
                                                                            <option value="DZ">Argelia</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaiyán</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrein</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BE">Bélgica</option>
                                                                            <option value="BZ">Belice</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermudas</option>
                                                                            <option value="BY">Bielorrusia</option>
                                                                            <option value="MM">Birmania</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BA">Bosnia y Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BR">Brasil</option>
                                                                            <option value="BN">Brunei</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="BT">Bután</option>
                                                                            <option value="CV">Cabo Verde</option>
                                                                            <option value="KH">Camboya</option>
                                                                            <option value="CM">Camerún</option>
                                                                            <option value="CA">Canadá</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CY">Chipre</option>
                                                                            <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comores</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, República Democrática del</option>
                                                                            <option value="KR">Corea</option>
                                                                            <option value="KP">Corea del Norte</option>
                                                                            <option value="CI">Costa de Marfíl</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="HR">Croacia (Hrvatska)</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="DK">Dinamarca</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egipto</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="AE">Emiratos Árabes Unidos</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="SI">Eslovenia</option>
                                                                            <option value="ES" selected>España</option>
                                                                            <option value="US">Estados Unidos</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Etiopía</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="PH">Filipinas</option>
                                                                            <option value="FI">Finlandia</option>
                                                                            <option value="FR">Francia</option>
                                                                            <option value="GA">Gabón</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GD">Granada</option>
                                                                            <option value="GR">Grecia</option>
                                                                            <option value="GL">Groenlandia</option>
                                                                            <option value="GP">Guadalupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GY">Guayana</option>
                                                                            <option value="GF">Guayana Francesa</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GQ">Guinea Ecuatorial</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="HT">Haití</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HU">Hungría</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IQ">Irak</option>
                                                                            <option value="IR">Irán</option>
                                                                            <option value="IE">Irlanda</option>
                                                                            <option value="BV">Isla Bouvet</option>
                                                                            <option value="CX">Isla de Christmas</option>
                                                                            <option value="IS">Islandia</option>
                                                                            <option value="KY">Islas Caimán</option>
                                                                            <option value="CK">Islas Cook</option>
                                                                            <option value="CC">Islas de Cocos o Keeling</option>
                                                                            <option value="FO">Islas Faroe</option>
                                                                            <option value="HM">Islas Heard y McDonald</option>
                                                                            <option value="FK">Islas Malvinas</option>
                                                                            <option value="MP">Islas Marianas del Norte</option>
                                                                            <option value="MH">Islas Marshall</option>
                                                                            <option value="UM">Islas menores de Estados Unidos</option>
                                                                            <option value="PW">Islas Palau</option>
                                                                            <option value="SB">Islas Salomón</option>
                                                                            <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                                                            <option value="TK">Islas Tokelau</option>
                                                                            <option value="TC">Islas Turks y Caicos</option>
                                                                            <option value="VI">Islas Vírgenes (EEUU)</option>
                                                                            <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                                                            <option value="WF">Islas Wallis y Futuna</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italia</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japón</option>
                                                                            <option value="JO">Jordania</option>
                                                                            <option value="KZ">Kazajistán</option>
                                                                            <option value="KE">Kenia</option>
                                                                            <option value="KG">Kirguizistán</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="LA">Laos</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LV">Letonia</option>
                                                                            <option value="LB">Líbano</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libia</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lituania</option>
                                                                            <option value="LU">Luxemburgo</option>
                                                                            <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MY">Malasia</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MV">Maldivas</option>
                                                                            <option value="ML">Malí</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MA">Marruecos</option>
                                                                            <option value="MQ">Martinica</option>
                                                                            <option value="MU">Mauricio</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">México</option>
                                                                            <option value="FM">Micronesia</option>
                                                                            <option value="MD">Moldavia</option>
                                                                            <option value="MC">Mónaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Níger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk</option>
                                                                            <option value="NO">Noruega</option>
                                                                            <option value="NC">Nueva Caledonia</option>
                                                                            <option value="NZ">Nueva Zelanda</option>
                                                                            <option value="OM">Omán</option>
                                                                            <option value="NL">Países Bajos</option>
                                                                            <option value="PA">Panamá</option>
                                                                            <option value="PG">Papúa Nueva Guinea</option>
                                                                            <option value="PK">Paquistán</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Perú</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PF">Polinesia Francesa</option>
                                                                            <option value="PL">Polonia</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="UK">Reino Unido</option>
                                                                            <option value="CF">República Centroafricana</option>
                                                                            <option value="CZ">República Checa</option>
                                                                            <option value="ZA">República de Sudáfrica</option>
                                                                            <option value="DO">República Dominicana</option>
                                                                            <option value="SK">República Eslovaca</option>
                                                                            <option value="RE">Reunión</option>
                                                                            <option value="RW">Ruanda</option>
                                                                            <option value="RO">Rumania</option>
                                                                            <option value="RU">Rusia</option>
                                                                            <option value="EH">Sahara Occidental</option>
                                                                            <option value="KN">Saint Kitts y Nevis</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="AS">Samoa Americana</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="VC">San Vicente y Granadinas</option>
                                                                            <option value="SH">Santa Helena</option>
                                                                            <option value="LC">Santa Lucía</option>
                                                                            <option value="ST">Santo Tomé y Príncipe</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leona</option>
                                                                            <option value="SG">Singapur</option>
                                                                            <option value="SY">Siria</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="PM">St Pierre y Miquelon</option>
                                                                            <option value="SZ">Suazilandia</option>
                                                                            <option value="SD">Sudán</option>
                                                                            <option value="SE">Suecia</option>
                                                                            <option value="CH">Suiza</option>
                                                                            <option value="SR">Surinam</option>
                                                                            <option value="TH">Tailandia</option>
                                                                            <option value="TW">Taiwán</option>
                                                                            <option value="TZ">Tanzania</option>
                                                                            <option value="TJ">Tayikistán</option>
                                                                            <option value="TF">Territorios franceses del Sur</option>
                                                                            <option value="TP">Timor Oriental</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad y Tobago</option>
                                                                            <option value="TN">Túnez</option>
                                                                            <option value="TM">Turkmenistán</option>
                                                                            <option value="TR">Turquía</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UA">Ucrania</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistán</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="VN">Vietnam</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="YU">Yugoslavia</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabue</option>
                                                                          </select>
                                                                        </div>
				  													<div class="form-group">
                                                                          <label for="estado_residencia">Estado de residencia</label>
                                                                          <select id="estado_residencia" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="aguascalientes">Aguascalientes</option>
                                                                            <option value="Baja California">Baja California</option>
                                                                            <option value="Baja California Sur">Baja California Sur</option>
                                                                            <option value="Campeche">Campeche</option>
                                                                            <option value="Chiapas">Chiapas</option>
                                                                            <option value="Chihuahua">Chihuahua</option>
                                                                            <option value="coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                                            <option value="Colima">Colima</option>
                                                                            <option value="Durango">Durango</option>
                                                                            <option value="Estado de México">Estado de México</option>
                                                                            <option value="Guanajuato">Guanajuato</option>
                                                                            <option value="Guerrero">Guerrero</option>
                                                                            <option value="Hidalgo">Hidalgo</option>
                                                                            <option value="Jalisco">Jalisco</option>
                                                                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                                            <option value="Morelos">Morelos</option>
                                                                            <option value="Nayarit">Nayarit</option>
                                                                            <option value="Nuevo León">Nuevo León</option>
                                                                            <option value="Oaxaca">Oaxaca</option>
                                                                            <option value="Puebla">Puebla</option>
                                                                            <option value="Querétaro">Querétaro</option>
                                                                            <option value="Quintana Roo">Quintana Roo</option>
                                                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                                                            <option value="Sinaloa">Sinaloa</option>
                                                                            <option value="Sonora">Sonora</option>
                                                                            <option value="Tabasco">Tabasco</option>
                                                                            <option value="Tamaulipas">Tamaulipas</option>
                                                                            <option value="Tlaxcala">Tlaxcala</option>
                                                                            <option value="Veracruz de Ignacio de la Llave">Veracruzde la Llave</option> 
                                                                            <option value="Yucatán">Yucatán</option>
                                                                            <option value="Zacatecas">Zacatecas</option>
                                                                          </select>
                                                                        </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Ciudad de residencia</label>
				    <input type="text" class="form-control" id="ciudad_residencia" placeholder="San Pedro Garza García" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Código postal</label>
				    <input type="text" class="form-control" id="codigo_postal" placeholder="60908" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">IES de Adscripción</label>
				    <input type="text" class="form-control" id="codigo_postal" placeholder="Facultad de Ingeniería Mecánica y Eléctrica" required="true">
				  </div>


				  <br><hr><br>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Título Universitario</label>
				    <input type="text" class="form-control" id="titulo" placeholder="Ingeniero en Electrónica" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Clave Única de Registro de Población (CURP)</label>
				    <input type="text" class="form-control" id="curp" placeholder="LOPR670423HNLXXXXX" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Registro Federal del Contribuyente (RFC)</label>
				    <input type="text" class="form-control" id="rfc" placeholder="LOPR670423XXXXXX" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número de CVU (Currículum Vitae Único)</label>
				    <input type="text" class="form-control" id="cvu" placeholder="123456" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Identificador ORCID</label>
				    <input type="text" class="form-control" id="orcid" placeholder="123456" required="true">
				  </div>

				  <br>
                    <center><input class="btn btn-dark btn-lg" type="submit" value="Listo"></center>
                    <br>
				</form>
        	</div>
        </div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>