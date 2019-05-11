//================= CURRICULIM ==============//
 
 function validarEstudiosRealizados() { //
        
            
            $('#ventanaEstudios').load('formularios/prodep/curriculum/estudios.php');
            return true;
        };

function validarDatosLaborales() { //
        
            
            $('#ventanaDatosLaborales').load('formularios/prodep/curriculum/datos_laborales.php');
            return true;
        };

function validarPremiosProdep() { //
        
            
            $('#ventanaPremios').load('formularios/prodep/curriculum/premios_distinciones.php');
            return true;
        };

//================= DOCENCIA ==============//

 function validarDocenciaProdep() { //
        
            
            $('#ventanaDocenciaProdep').load('formularios/prodep/docencia/docencia_prodep.php');
            return true;
        };


 function validarTutoriaProdep() { //
        
            
            var select = $("#tipo_tutoria").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "individual") //si selecciono individual
            {

            $('#ventanaFormularioTutoria').load('formularios/prodep/docencia/tutoria_individual_prodep.php');
            return true;
            }

            else if(select == "grupal") //si selecciono grupal
            {

            $('#ventanaFormularioTutoria').load('formularios/prodep/docencia/tutoria_grupal_prodep.php');
            return true;
            }

            else //si la opcion no tiene formulario
            {
            alert('Opcion sin formulario.');
            location.reload();
            return false;
            }

        };


 function validarDireccionIndividualProdep() { //
        
            
            $('#ventanaDireccionIndividualProdep').load('formularios/prodep/docencia/direccion_individualizada_prodep.php');
            return true;
        };


 function validarGestionProdep() { //
            $('#ventanaGestionProdep').load('formularios/prodep/docencia/gestion_prodep.php');
            return true;
        };


function validarLGACProdep() {
    $('#ventanaLGACProdep').load('formularios/prodep/docencia/lgac.php');
    return true;
};

function validarCuerpoProdep() {
    $('#ventanaCuerpoProdep').load('formularios/prodep/docencia/cuerpo_prodep.php');
    return true;
};

function validarProgramaEducativoProdep() {
    $('#ventanaProgramaEducativoProdep').load('formularios/prodep/docencia/programas_educativos_prodep.php');
    return true;
};

//================= PRODUCCION ==============//
function validarArticuloProdep() {
    $('#ventanaArticuloProdep').load('formularios/prodep/produccion/articulo_prodep.php');
    return true;
};

function validarLibroProdep() {
    $('#ventanaLibroProdep').load('formularios/prodep/produccion/libro_prodep.php');
    return true;
};

function validarMemoriasProdep() {
    $('#ventanaMemoriasProdep').load('formularios/prodep/produccion/memorias_prodep.php');
    return true;
};

function validarInvestigacionProdep() {
    $('#ventanaInvestigacionProdep').load('formularios/prodep/produccion/proyectos_investigacion_prodep.php');
    return true;
};

//================= Beneficios ==============//

function validarPromepProdep() {
    $('#ventanaPromepProdep').load('formularios/prodep/beneficios/promep.php');
    return true;
};

function validarExternoPromepProdep() {
    $('#ventanaExternoPromepProdep').load('formularios/prodep/beneficios/externos.php');
    return true;
};