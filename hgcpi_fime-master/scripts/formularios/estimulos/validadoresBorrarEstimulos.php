/*=========== DOCENCIA ============*/

function borrarRegistroProdArt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/produccion_academica_docencia_articulo.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
function borrarRegistroProdLibro(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/produccion_academica_docencia_libro.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
function borrarRegistroGradosCapa(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/grados_academicos.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
function borrarRegistroLenguas(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/capa_lenguas_extra.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }        
function borrarRegistroPremios(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/premios_distinciones.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }                        
/*=========== DOCENCIA ============*/
/*=========== INVESTIGACION ============*/
function borrarRegistroProInv(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/proyectos_investigacion.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
/*=========== INVESTIGACION ============*/
/*=========== TUTORIAS ============*/
function borrarRegistroTutorias(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/tutoria.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
function borrarRegistroDireccionInvi(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/direccion_individualizada.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
function borrarRegistroServicios(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/servicios.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
/*=========== TUTORIAS ============*/
/*=========== CUERPOS ============*/
function borrarRegistroCuerposCole(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/gestion_academica_cuerpos.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
function borrarRegistroGestionAcad(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/gestion_academica.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
/*=========== CUERPOS ============*/
/*=========== DEDICACION ============*/
function borrarRegistroCargaAcad(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/carga_academica.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
/*=========== DEDICACION ============*/