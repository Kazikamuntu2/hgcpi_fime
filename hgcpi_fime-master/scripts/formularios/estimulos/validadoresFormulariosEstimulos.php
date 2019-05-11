//================= DOCENCIA ==============//
        function validarSeleccionProduccionAcademica() { //produccion academica docencia
        
        var select = $("#produccion_academica").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "articulo") //si selecciono articulo
            {
            $('#ventanaFormularioProdAcad').load('formularios/estimulos/docencia/produccion_academica_docencia_articulo.php');
            return true;
            }

            else if(select == "libro") //si selecciono libro
            {
            $('#ventanaFormularioProdAcad').load('formularios/estimulos/docencia/produccion_academica_docencia_libro.php');
            return true;
            }


            else //si la opcion no tiene formulario
            {
            alert('Opcion sin formulario.');
            location.reload();
            return false;
            }

        };

        function validarGradosAcad() { //grados academicos
            
            $('#ventanaFormularioGradosAcad').load('formularios/estimulos/docencia/grados_academicos.php');
            return true;
        };

        function validarDirIndividualizada() //direccion individualizada
        {
            $('#ventanaFormularioDivIndiv').load('formularios/estimulos/docencia/direccion_individualizada.php');
            return true;
        }

        function validarCapaActa() { //capacitacion actualizacion lenguas extranjeras
        
            
            $('#ventanaCapaActa').load('formularios/estimulos/docencia/capa_lenguas_extra.php');
            return true;
        };

        function validarPremiosDist() { //premios y distinciones
        
            
            $('#ventanaPremiosDist').load('formularios/estimulos/docencia/premios_distinciones.php');
            return true;
        };

//================= DOCENCIA ==============//

//================= PROYECTOS DE INVESTIGACION ==============//

        function validarProyInvestigacion() { //proyectos de investigacion
        
            
            $('#ventanaProyInvestigacion').load('formularios/estimulos/proyectos/proyectos_investigacion.php');
            return true;
        };

//================= PROYECTOS DE INVESTIGACION ==============//

//================= TUTORIAS ==============//

        function validarTutoria() { //proyectos de investigacion
        
            
            $('#ventanaFormularioTutoria').load('formularios/estimulos/tutorias/tutoria.php');
            return true;
        };
        function validarDireccionInvi() { //proyectos de investigacion
        
            
            $('#ventanaFormularioDireccion').load('formularios/estimulos/tutorias/direccion_individualizada.php');
            return true;
        };
        function validarServicio() { //proyectos de investigacion
        
            
            $('#ventanaFormularioServicios').load('formularios/estimulos/tutorias/servicios.php');
            return true;
        };

//================= TUTORIAS ==============//

//================= CUERPOS COLEGIADOS ==============//

        function validarGestionAcad() { //proyectos de investigacion
        
            
            $('#ventanaFormularioGestAcad').load('formularios/estimulos/cuerpos_colegiados/gestion_academica.php');
            return true;
        };

        function validarGestionAcadCuerposColegiados() {

            $('#ventanaFormularioCuerposColeg').load('formularios/estimulos/cuerpos_colegiados/gestion_academica_cuerpos.php');
            return true;
        }

//================= CUERPOS COLEGIADOS ==============//

//================= CARGA ACADEMICA ==============//

        function validarCargaAcad() {

            $('#ventanaFormularioCargaAcad').load('formularios/estimulos/dedicacion/carga_academica.php');
            return true;
        }

//================= CARGA ACADEMICA ==============//

