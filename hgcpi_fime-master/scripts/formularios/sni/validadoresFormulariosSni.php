//================= FORMACION ACADEMICA ==============//
function validarSNIGradAcadCapac(){ //grados academicos y capacitacion
        
            
            $('#ventanaFormularioGradAcadCapac').load('formularios/sni/formacion_academica/grados_academicos_y_capacitacion.php');
            return true;
        };

function validarSNILenguaIdioma(){ //Lenguas e idiomas
        
            
            $('#ventanaFormularioLenguaIdioma').load('formularios/sni/formacion_academica/lenguas_idiomas.php');
            return true;
        };



//================= FORMACION ACADEMICA ==============//

//================= TRAYECTORIA PROFESIONAL ==============//

function validarSNIExpLabor(){ //Experiencia laboral
        
            
            $('#ventanaFormularioExpLab').load('formularios/sni/trayectoria_profesional/experiencia_laboral.php');
            return true;
        };

function validarSNIEstancInves(){ //Experiencia laboral
        
            
            $('#ventanaEstancInves').load('formularios/sni/trayectoria_profesional/estancias_investigacion.php');
            return true;
        };

function validarSNIDocencia(){ //Docencia
        
            
            $('#ventanaDocencia').load('formularios/sni/trayectoria_profesional/docencia.php');
            return true;
        };



//================= TRAYECTORIA PROFESIONAL ==============//


//================= PRODUCCION ==============//
function validarSNISeleccionProduccionCientifica() { //produccion academica docencia
        
        var select = $("#produccion_cientifica").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "articulo") //si selecciono articulo
            {
            $('#ventanaFormularioProdCient').load('formularios/sni/produccion/produccion_cientifica/articulo.php');
            return true;
            }

            else if(select == "libro") //si selecciono libro
            {
            $('#ventanaFormularioProdCient').load('formularios/sni/produccion/produccion_cientifica/libro.php');
            return true;
            }

            else if(select == "capitulo_libro") //si selecciono capitulo de libro
            {
            $('#ventanaFormularioProdCient').load('formularios/sni/produccion/produccion_cientifica/capitulo.php');
            return true;
            }

            else if(select == "reporte") //si selecciono reporte
            {
            $('#ventanaFormularioProdCient').load('formularios/sni/produccion/produccion_cientifica/reporte.php');
            return true;
            }

            else if(select == "memoria") //si selecciono memoria
            {
            $('#ventanaFormularioProdCient').load('formularios/sni/produccion/produccion_cientifica/memoria.php');
            return true;
            }

            else if(select == "documento_trabajo") //si selecciono documento de trabajo
            {
            $('#ventanaFormularioProdCient').load('formularios/sni/produccion/produccion_cientifica/documento.php');
            return true;
            }

        };


function validarSNISeleccionProduccionTecnologica() { //produccion tecnológica e innovación
        
        var select = $("#produccion_tecnologica").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "desarrollo_tecnologico") //si selecciono desarrollo tecnológico
            {
            $('#ventanaFormularioProdTec').load('formularios/sni/produccion/produccion_tecnologica_innovacion/desarrollos_tecnologicos.php');
            return true;
            }

            else if(select == "innovacion") //si selecciono innovación
            {
            $('#ventanaFormularioProdTec').load('formularios/sni/produccion/produccion_tecnologica_innovacion/innovacion.php');
            return true;
            }

            else if(select == "desarrollo_software") //si selecciono desarrollo de software
            {
            $('#ventanaFormularioProdTec').load('formularios/sni/produccion/produccion_tecnologica_innovacion/desarrollo_software.php');
            return true;
            }

            else if(select == "patente") //si selecciono patente
            {
            $('#ventanaFormularioProdTec').load('formularios/sni/produccion/produccion_tecnologica_innovacion/patentes.php');
            return true;
            }

        };

function validarSNIProduccionProyectosAcad(){ //proyectos académicos
        
            
            $('#ventanaProdProyAcad').load('formularios/sni/produccion/produccion_academica/proyectos_academicos.php');
            return true;
        };

//================= PRODUCCION ==============//

//================= FORMACION CAPITAL HUMANO ==============//


function validarSNITesDip(){ //Tesis y diplomados
        
            
            $('#ventanaFormularioTesDip').load('formularios/sni/formacion_capital_humano/tesis_diplomados.php');
            return true;
        };


//================= FORMACION CAPITAL HUMANO ==============//


//================= COMUNICACION PUBLICA DE LA CIENCIA, TECNOLOGICA Y DE INNOVACION ==============//

function validarSNIPartCong(){ //participacion en congresos
        
            
            $('#ventanaFormularioPartCong').load('formularios/sni/comunicacion_publica/participacion_congresos.php');
            return true;
        };

function validarSNIDivulgacion(){ //divulgacion
        
            
            $('#ventanaFormularioDivulgacion').load('formularios/sni/comunicacion_publica/divulgacion.php');
            return true;
        };

//================= COMUNICACION PUBLICA DE LA CIENCIA, TECNOLOGICA Y DE INNOVACION ==============//

//================= VINCULACION ==============//

function validarSNIRedTematica(){ // red tematica CONACYT
        
            
            $('#ventanaFormularioRedTematica').load('formularios/sni/vinculacion/redes_conacyt.php');
            return true;
        };


function validarSNIRedInvest(){ // redes investigacion
        
            
            $('#ventanaFormularioRedInvest').load('formularios/sni/vinculacion/redes_investigacion.php');
            return true;
        };


function validarSNIGrupInvest(){ // grupos investigacion
        
            
            $('#ventanaFormularioGrupInvest').load('formularios/sni/vinculacion/grupos_investigacion.php');
            return true;
        };



//================= VINCULACION ==============//

//================= EVALUACIONES ==============//

function validarSNIEvaluConacyt(){ // evaluaciones conacyt
        
            
            $('#ventanaFormularioEvaluConacyt').load('formularios/sni/evaluaciones/evaluaciones_conacyt.php');
            return true;
        };


function validarSNIEvaluNoConacyt(){ // evaluaciones no conacyt
        
            
            $('#ventanaFormularioEvaluNoConacyt').load('formularios/sni/evaluaciones/evaluaciones_no_conacyt.php');
            return true;
        };

//================= EVALUACIONES ==============//

//================= PREMIOS Y DISTINCIONES ==============//

function validarSNIDistinConacyt(){ // distinciones conacyt
        
            
            $('#ventanaFormularioDistinConacyt').load('formularios/sni/premios_distinciones/distinciones_conacyt.php');
            return true;
        };


function validarSNIDistinNoConacyt(){ // distinciones no conacyt
        
            
            $('#ventanaFormularioDistinNoConacyt').load('formularios/sni/premios_distinciones/distinciones_no_conacyt.php');
            return true;
        };



function validarSNIPremDistin(){ // premios y distinciones
        
            
            $('#ventanaFormularioPremDistin').load('formularios/sni/premios_distinciones/premios_distinciones.php');
            return true;
        };

//================= PREMIOS Y DISTINCIONES ==============//