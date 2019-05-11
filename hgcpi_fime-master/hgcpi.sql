-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2019 a las 00:46:05
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hgcpi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_congresos`
--

CREATE TABLE `colaboradores_congresos` (
  `nombre_congreso` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_divulgacion`
--

CREATE TABLE `colaboradores_divulgacion` (
  `divulgacion_titulo` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_grupos_investigacion`
--

CREATE TABLE `colaboradores_grupos_investigacion` (
  `nombre_grupo` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_prod_articulos`
--

CREATE TABLE `colaboradores_prod_articulos` (
  `nombre_art` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `origen_autor_colaborador` varchar(45) DEFAULT NULL,
  `acciones_colaborador` varchar(45) DEFAULT NULL,
  `area_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `identificador_colaborador` varchar(45) DEFAULT NULL,
  `orcid_colaborador` varchar(45) DEFAULT NULL,
  `researcher_id_colaborador` varchar(45) DEFAULT NULL,
  `arxiv_id_colaborador` varchar(45) DEFAULT NULL,
  `pubmed_id_colaborador` varchar(45) DEFAULT NULL,
  `comision_cv_ca` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_redes_investigacion`
--

CREATE TABLE `colaboradores_redes_investigacion` (
  `nombre_red` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_redes_tematicas`
--

CREATE TABLE `colaboradores_redes_tematicas` (
  `red_tematica_conacyt` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_actualizacion_pe`
--

CREATE TABLE `detalle_usuario_actualizacion_pe` (
  `nombre_pe` varchar(45) DEFAULT NULL,
  `fecha_implementacion_cambio` date DEFAULT NULL,
  `en_que_consiste_actualizacion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_beneficios_externos_promep`
--

CREATE TABLE `detalle_usuario_beneficios_externos_promep` (
  `tipo_apoyo` varchar(45) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `monto` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_beneficios_promep`
--

CREATE TABLE `detalle_usuario_beneficios_promep` (
  `ies_solicitud` varchar(45) DEFAULT NULL,
  `solicitud` varchar(45) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_carga_academica`
--

CREATE TABLE `detalle_usuario_carga_academica` (
  `dependencia` int(11) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `grado` varchar(45) DEFAULT NULL,
  `materia` varchar(45) DEFAULT NULL,
  `num_grupos` varchar(45) DEFAULT NULL,
  `num_horas_semana` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_cuerpo_academico`
--

CREATE TABLE `detalle_usuario_cuerpo_academico` (
  `cuerpo_academico_clave` varchar(45) DEFAULT NULL,
  `nombre_cuerpo_academico` varchar(45) DEFAULT NULL,
  `grado_consolacion` varchar(45) DEFAULT NULL,
  `linea_cultiva_cuerpo_academico` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_desarollos_tecnologicos`
--

CREATE TABLE `detalle_usuario_desarollos_tecnologicos` (
  `tipo_desarrollo` varchar(45) DEFAULT NULL,
  `nombre_desarrollo` varchar(45) DEFAULT NULL,
  `documento_respaldo` varchar(45) DEFAULT NULL,
  `objetivos` varchar(45) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `sector_industrial_scian` varchar(45) DEFAULT NULL,
  `subrama_scian` varchar(45) DEFAULT NULL,
  `subsector_scian` varchar(45) DEFAULT NULL,
  `rama_scian` varchar(45) DEFAULT NULL,
  `clase_scian` varchar(45) DEFAULT NULL,
  `sector_industrial_ocde` varchar(45) DEFAULT NULL,
  `division_ocde` varchar(45) DEFAULT NULL,
  `grupo_ocde` varchar(45) DEFAULT NULL,
  `clase_ocde` varchar(45) DEFAULT NULL,
  `campo_conocimiento_desarrollo` varchar(45) DEFAULT NULL,
  `area_conocimiento_desarrollo` varchar(45) DEFAULT NULL,
  `disciplina_desarrollo` varchar(45) DEFAULT NULL,
  `subdisciplina_desarrollo` varchar(45) DEFAULT NULL,
  `generacion_de_valor` varchar(45) DEFAULT NULL,
  `formacion_de_recursos` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_desarrollo_software`
--

CREATE TABLE `detalle_usuario_desarrollo_software` (
  `tipo_desarrollo` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `derechos_autor` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `horas_hombre` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `costo` varchar(45) DEFAULT NULL,
  `beneficiario` varchar(45) DEFAULT NULL,
  `objetivo` varchar(45) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `contribucion` varchar(45) DEFAULT NULL,
  `generacion_de_valor` varchar(45) DEFAULT NULL,
  `formacion_rh` varchar(45) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `logros` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_direccion_individualizada`
--

CREATE TABLE `detalle_usuario_direccion_individualizada` (
  `tipo_de_direccion` varchar(45) DEFAULT NULL,
  `titulo_proyecto_dirigido` varchar(45) DEFAULT NULL,
  `estado_de_direccion` varchar(45) DEFAULT NULL,
  `fecha_de_inicio` date DEFAULT NULL,
  `fecha_de_fin` date DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `grado_academico` varchar(45) DEFAULT NULL,
  `considera_cv_ca` varchar(45) DEFAULT NULL,
  `numero_estudiantes` varchar(45) DEFAULT NULL,
  `ies_realiza_gestion` varchar(45) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(45) DEFAULT NULL,
  `lgacs` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_distinciones_conacyt`
--

CREATE TABLE `detalle_usuario_distinciones_conacyt` (
  `nombre_dist` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_distinciones_no_conacyt`
--

CREATE TABLE `detalle_usuario_distinciones_no_conacyt` (
  `nombre_dist` varchar(45) DEFAULT NULL,
  `institucion_otorga` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_divulgacion`
--

CREATE TABLE `detalle_usuario_divulgacion` (
  `divulgacion_titulo` varchar(45) DEFAULT NULL,
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `tipo_evento` varchar(45) DEFAULT NULL,
  `institucion_organizadora` varchar(45) DEFAULT NULL,
  `dirigido_a` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `tipo_de_medio` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `notas_periodisticas` varchar(45) DEFAULT NULL,
  `producto_obtenido` varchar(45) DEFAULT NULL,
  `area_conocimiento_divulgacion` varchar(45) DEFAULT NULL,
  `campo_divulgacion` varchar(45) DEFAULT NULL,
  `disciplina_divulgacion` varchar(45) DEFAULT NULL,
  `subdisciplina_divulgacion` varchar(45) DEFAULT NULL,
  `sector_industrial_scian` varchar(45) DEFAULT NULL,
  `subrama_scian` varchar(45) DEFAULT NULL,
  `subsector_scian` varchar(45) DEFAULT NULL,
  `rama_scian` varchar(45) DEFAULT NULL,
  `clase_scian` varchar(45) DEFAULT NULL,
  `sector_industrial_ocde` varchar(45) DEFAULT NULL,
  `division_ocde` varchar(45) DEFAULT NULL,
  `grupo_ocde` varchar(45) DEFAULT NULL,
  `clase_ocde` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_docencia`
--

CREATE TABLE `detalle_usuario_docencia` (
  `dependencia` varchar(45) DEFAULT NULL,
  `nombre_programa_educativo` varchar(45) DEFAULT NULL,
  `nombre_curso` varchar(45) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `nombre_institucion_ies` varchar(45) DEFAULT NULL,
  `tipo_institucion` varchar(45) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `clasificacion_institucion` varchar(45) DEFAULT NULL,
  `nivel_curso` varchar(45) DEFAULT NULL,
  `numero_alumnos` varchar(45) DEFAULT NULL,
  `horas_totales_curso` varchar(45) DEFAULT NULL,
  `duracion_semanas` varchar(45) DEFAULT NULL,
  `horas_asesoria_mes` varchar(45) DEFAULT NULL,
  `horas_semanales_curso` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_documentos_de_trabajo`
--

CREATE TABLE `detalle_usuario_documentos_de_trabajo` (
  `titulo_documento` varchar(45) NOT NULL,
  `titulo_obra` varchar(45) DEFAULT NULL,
  `titulo_publicacion` varchar(45) DEFAULT NULL,
  `de_pagina` varchar(45) DEFAULT NULL,
  `a_pagina` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `area_conocimiento_doc` varchar(45) DEFAULT NULL,
  `campo_doc` varchar(45) DEFAULT NULL,
  `disciplina_doc` varchar(45) DEFAULT NULL,
  `subdisciplina_doc` varchar(45) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_estancias_investigacion`
--

CREATE TABLE `detalle_usuario_estancias_investigacion` (
  `tipo_estancia` varchar(45) DEFAULT NULL,
  `nombre_institucion` varchar(45) DEFAULT NULL,
  `nombre_estancia` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `area_conocimiento_estancia` varchar(45) DEFAULT NULL,
  `campo_estancia` varchar(45) DEFAULT NULL,
  `disciplina_estancia` varchar(45) DEFAULT NULL,
  `subdisciplina_estancia` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_evaluaciones_conacyt`
--

CREATE TABLE `detalle_usuario_evaluaciones_conacyt` (
  `nombre_del_fondo` varchar(45) DEFAULT NULL,
  `fecha_asignacion` date DEFAULT NULL,
  `fecha_aceptacion` date DEFAULT NULL,
  `fecha_evaluacion` date DEFAULT NULL,
  `dictamen` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `area_conocimiento_ev` varchar(45) DEFAULT NULL,
  `campo_ev` varchar(45) DEFAULT NULL,
  `disciplina_ev` varchar(45) DEFAULT NULL,
  `subdisciplina_ev` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_evaluaciones_no_conacyt`
--

CREATE TABLE `detalle_usuario_evaluaciones_no_conacyt` (
  `tipo_evaluacion` varchar(45) DEFAULT NULL,
  `nombre_institucion` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `cargo_desempenado` varchar(45) DEFAULT NULL,
  `producto_evaluado` varchar(45) DEFAULT NULL,
  `nombre_producto_evaluado` varchar(45) DEFAULT NULL,
  `dictamen` varchar(45) DEFAULT NULL,
  `descripcion_actividad` varchar(45) DEFAULT NULL,
  `area_conocimiento_ev_no` varchar(45) DEFAULT NULL,
  `campo_ev_no` varchar(45) DEFAULT NULL,
  `disciplina_ev_no` varchar(45) DEFAULT NULL,
  `subdisciplina_ev_no` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_experiencia_laboral`
--

CREATE TABLE `detalle_usuario_experiencia_laboral` (
  `empleo_actual` varchar(45) DEFAULT NULL,
  `nivel_estudios` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `institucion` varchar(45) DEFAULT NULL,
  `dependencia` varchar(45) DEFAULT NULL,
  `unidad_academica` varchar(45) DEFAULT NULL,
  `tipo_nombramiento` varchar(45) DEFAULT NULL,
  `asociado_a` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `logros` varchar(45) DEFAULT NULL,
  `cronologia` varchar(45) DEFAULT NULL,
  `area_conocimiento_puesto` varchar(45) DEFAULT NULL,
  `campo_puesto` varchar(45) DEFAULT NULL,
  `disciplina_puesto` varchar(45) DEFAULT NULL,
  `subdisciplina_puesto` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_gestion_academica`
--

CREATE TABLE `detalle_usuario_gestion_academica` (
  `tipo_gestion` varchar(45) DEFAULT NULL,
  `cargo_comision` varchar(45) DEFAULT NULL,
  `funcion_encomendada` varchar(45) DEFAULT NULL,
  `organo_colegiado` varchar(45) DEFAULT NULL,
  `resultados_obtenidos` varchar(45) DEFAULT NULL,
  `aprobado` varchar(45) DEFAULT NULL,
  `calificacion` varchar(45) DEFAULT NULL,
  `evento` varchar(45) DEFAULT NULL,
  `tipo_evento` varchar(45) DEFAULT NULL,
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `tipo_alcance` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_ultimo_informe` date DEFAULT NULL,
  `horas_dedicadas_semana` varchar(45) DEFAULT NULL,
  `estado_gestion` varchar(45) DEFAULT NULL,
  `ies_realiza_gestion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--

CREATE TABLE `detalle_usuario_gestion_cuerpos_colegiados` (
  `tipo_gestion` varchar(45) DEFAULT NULL,
  `clasificacion` varchar(45) DEFAULT NULL,
  `funcion_encomendada` varchar(45) DEFAULT NULL,
  `organo_colegiado` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_ultimo_reporte` date DEFAULT NULL,
  `aprobado` varchar(45) DEFAULT NULL,
  `horas_semana` varchar(45) DEFAULT NULL,
  `resultado_obtenido` varchar(45) DEFAULT NULL,
  `estado_gestion` varchar(45) DEFAULT NULL,
  `ies_realiza_gestion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_grados_acad`
--

CREATE TABLE `detalle_usuario_grados_acad` (
  `tipo_capacitacion` varchar(45) DEFAULT NULL,
  `nivel_estudios` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `numero_de_horas` varchar(45) DEFAULT NULL,
  `opciones_de_titulacion` varchar(45) DEFAULT NULL,
  `fecha_obtencion_titulo` date DEFAULT NULL,
  `nombre_institucion` varchar(45) DEFAULT NULL,
  `tipo_institucion` varchar(45) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `clasificacion_institucion` varchar(45) DEFAULT NULL,
  `tipo_formacion_continua` varchar(45) DEFAULT NULL,
  `nombre_formacion_continua` varchar(45) DEFAULT NULL,
  `ano_formacion_continua` varchar(45) DEFAULT NULL,
  `institucion_formacion_continua` varchar(45) DEFAULT NULL,
  `horas_totales_formacion_continua` varchar(45) DEFAULT NULL,
  `disciplina` varchar(45) DEFAULT NULL,
  `area_de_conocimiento_formacion_continua` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_grupos_investigacion`
--

CREATE TABLE `detalle_usuario_grupos_investigacion` (
  `nombre_grupo` varchar(45) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `nombre_lider` varchar(45) DEFAULT NULL,
  `primer_apellido_lider` varchar(45) DEFAULT NULL,
  `segundo_apellido_lider` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_lider` varchar(45) DEFAULT NULL,
  `total_investigadores` varchar(45) DEFAULT NULL,
  `impacto` varchar(45) DEFAULT NULL,
  `colaboracion` varchar(45) DEFAULT NULL,
  `area_conocimiento_grupo` varchar(45) DEFAULT NULL,
  `campo_grupo` varchar(45) DEFAULT NULL,
  `disciplina_grupo` varchar(45) DEFAULT NULL,
  `subdisciplina_grupo` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_innovacion`
--

CREATE TABLE `detalle_usuario_innovacion` (
  `innovacion_oslo` varchar(45) DEFAULT NULL,
  `tipo_innovacion` varchar(45) DEFAULT NULL,
  `aplicacion` varchar(45) DEFAULT NULL,
  `potencial_cobertura` varchar(45) DEFAULT NULL,
  `mecanismo_proteccion_propiedad_intelectual` varchar(45) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `sector_industrial_scian` varchar(45) DEFAULT NULL,
  `subrama_scian` varchar(45) DEFAULT NULL,
  `subsector_scian` varchar(45) DEFAULT NULL,
  `rama_scian` varchar(45) DEFAULT NULL,
  `clase_scian` varchar(45) DEFAULT NULL,
  `sector_industrial_ocde` varchar(45) DEFAULT NULL,
  `division_ocde` varchar(45) DEFAULT NULL,
  `grupo_ocde` varchar(45) DEFAULT NULL,
  `clase_ocde` varchar(45) DEFAULT NULL,
  `area_conocimiento_inn` varchar(45) DEFAULT NULL,
  `campo_inn` varchar(45) DEFAULT NULL,
  `disciplina_inn` varchar(45) DEFAULT NULL,
  `subdisciplina_inn` varchar(45) DEFAULT NULL,
  `monto_venta_anuales` varchar(45) DEFAULT NULL,
  `volumen_prod_anuales` varchar(45) DEFAULT NULL,
  `no_empleos_directos_anuales` varchar(45) DEFAULT NULL,
  `no_empleos_indirectos_anuales` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_lenguas_e_idiomas`
--

CREATE TABLE `detalle_usuario_lenguas_e_idiomas` (
  `idioma` varchar(45) DEFAULT NULL,
  `institucion_que_otorga` varchar(45) DEFAULT NULL,
  `grado_de_dominio` varchar(45) DEFAULT NULL,
  `nivel_de_escritura` varchar(45) DEFAULT NULL,
  `documento_probatorio` varchar(45) DEFAULT NULL,
  `puntos` varchar(45) DEFAULT NULL,
  `certificacion` varchar(45) DEFAULT NULL,
  `nivel_conferido` varchar(45) DEFAULT NULL,
  `nivel_lectura` varchar(45) DEFAULT NULL,
  `fecha_evaluacion` date DEFAULT NULL,
  `vigencia_de` date DEFAULT NULL,
  `vigencia_a` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_lgac`
--

CREATE TABLE `detalle_usuario_lgac` (
  `linea` varchar(45) DEFAULT NULL,
  `actividades_que_realiza` varchar(45) DEFAULT NULL,
  `horas_semana_dedicadas` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_memorias`
--

CREATE TABLE `detalle_usuario_memorias` (
  `proposito` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `titulo_de_obra` varchar(45) DEFAULT NULL,
  `titulo_publicacion` varchar(45) DEFAULT NULL,
  `congreso_donde_se_presento` varchar(45) DEFAULT NULL,
  `de_pagina` varchar(45) DEFAULT NULL,
  `a_pagina` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `estado_actual` varchar(45) DEFAULT NULL,
  `area_conocimiento_mem` varchar(45) DEFAULT NULL,
  `campo_mem` varchar(45) DEFAULT NULL,
  `disciplina_mem` varchar(45) DEFAULT NULL,
  `subdisciplina_mem` varchar(45) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(45) DEFAULT NULL,
  `lgacs` varchar(45) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `autores_colaboradores` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_participacion_congresos`
--

CREATE TABLE `detalle_usuario_participacion_congresos` (
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `nombre_congreso` varchar(45) DEFAULT NULL,
  `titulo_trabajo` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_patentes`
--

CREATE TABLE `detalle_usuario_patentes` (
  `tipo_patente` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `numero_tramite` varchar(45) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `expediente` varchar(45) DEFAULT NULL,
  `clasificacion_internacional` varchar(45) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `explotacion_industrial` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_premios_y_distinciones`
--

CREATE TABLE `detalle_usuario_premios_y_distinciones` (
  `tipo_distincion` varchar(45) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `nombre_distincion` varchar(45) DEFAULT NULL,
  `institucion_que_otorga` varchar(45) DEFAULT NULL,
  `tipo_institucion` varchar(45) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `institucion_otorgante_no_considerada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `monto_mensual` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_produccion_capitulos`
--

CREATE TABLE `detalle_usuario_produccion_capitulos` (
  `titulo` varchar(45) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `numero_edicion` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `titulo_capitulo` varchar(45) DEFAULT NULL,
  `numero_capitulo` varchar(45) DEFAULT NULL,
  `de_pagina` varchar(45) DEFAULT NULL,
  `a_pagina` varchar(45) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `area_conocimiento_cap` varchar(45) DEFAULT NULL,
  `campo_cap` varchar(45) DEFAULT NULL,
  `disciplina_cap` varchar(45) DEFAULT NULL,
  `subdisciplina_cap` varchar(45) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_produccion_libros`
--

CREATE TABLE `detalle_usuario_produccion_libros` (
  `proposito` varchar(45) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `estado_actual` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `idioma` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `volumen` varchar(45) DEFAULT NULL,
  `tomo` varchar(45) DEFAULT NULL,
  `tiraje` varchar(45) DEFAULT NULL,
  `numero_paginas` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `edicion` varchar(45) DEFAULT NULL,
  `lugar_edicion` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `total_ejemplares` varchar(45) DEFAULT NULL,
  `area_conocimiento_libro` varchar(45) DEFAULT NULL,
  `campo_libro` varchar(45) DEFAULT NULL,
  `disciplina_libro` varchar(45) DEFAULT NULL,
  `subdisciplina_libro` varchar(45) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(45) DEFAULT NULL,
  `autores` varchar(45) DEFAULT NULL,
  `lgacs` varchar(45) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `tipo_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_prod_articulos`
--

CREATE TABLE `detalle_usuario_prod_articulos` (
  `proposito` varchar(45) DEFAULT NULL,
  `issn` varchar(45) DEFAULT NULL,
  `nombre_art` varchar(45) DEFAULT NULL,
  `estado_art` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `nombre_revista` varchar(45) DEFAULT NULL,
  `numero_revista` varchar(45) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `volumen_revista` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pagina_inicial` varchar(45) DEFAULT NULL,
  `pagina_final` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `apoyo_conacyt` varchar(45) DEFAULT NULL,
  `fondo` varchar(45) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(45) DEFAULT NULL,
  `autores` varchar(45) DEFAULT NULL,
  `lgacs` varchar(45) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_prod_articulos`
--

INSERT INTO `detalle_usuario_prod_articulos` (`proposito`, `issn`, `nombre_art`, `estado_art`, `pais`, `nombre_revista`, `numero_revista`, `editorial`, `volumen_revista`, `ano_edicion`, `ano_publicacion`, `pagina_inicial`, `pagina_final`, `palabras_clave`, `apoyo_conacyt`, `fondo`, `considerar_curriculum`, `miembros`, `autores`, `lgacs`, `researcher_id_autor`, `arxiv_id_autor`, `pubmed_id_autor`, `open_id_autor`, `usuario_idusuario`, `id`) VALUES
(NULL, '1', '11', NULL, 'MX', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_prod_proyectos_academicos`
--

CREATE TABLE `detalle_usuario_prod_proyectos_academicos` (
  `tipo_proyecto` varchar(45) DEFAULT NULL,
  `nombre_proyecto` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `institucion` varchar(45) DEFAULT NULL,
  `area_conocimiento_proyecto` varchar(45) DEFAULT NULL,
  `campo_proyecto` varchar(45) DEFAULT NULL,
  `disciplina_proyecto` varchar(45) DEFAULT NULL,
  `subdisciplina_proyecto` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_proyectos_investigacion`
--

CREATE TABLE `detalle_usuario_proyectos_investigacion` (
  `titulo` varchar(45) DEFAULT NULL,
  `nombre_patrocinador` varchar(45) DEFAULT NULL,
  `nombre_alumnos_participantes` varchar(45) DEFAULT NULL,
  `actividades_realizadas` varchar(45) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(45) DEFAULT NULL,
  `lgacs` varchar(45) DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `tipo_patrocinador` varchar(45) DEFAULT NULL,
  `investigadores_participantes` varchar(45) DEFAULT NULL,
  `tipo_proyecto` varchar(45) DEFAULT NULL,
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `monto_apoyo` varchar(45) DEFAULT NULL,
  `considera_cv_ca` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_redes_investigacion`
--

CREATE TABLE `detalle_usuario_redes_investigacion` (
  `nombre_red` varchar(45) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `nombre_responsable_red` varchar(45) DEFAULT NULL,
  `primer_apellido_responsable_red` varchar(45) DEFAULT NULL,
  `segundo_apellido_responsable_red` varchar(45) DEFAULT NULL,
  `institucion_responsable_red` varchar(45) DEFAULT NULL,
  `total_integrantes` varchar(45) DEFAULT NULL,
  `area_conocimiento_red` varchar(45) DEFAULT NULL,
  `campo_red` varchar(45) DEFAULT NULL,
  `disciplina_red` varchar(45) DEFAULT NULL,
  `subdisciplina_red` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_redes_tematicas_conacyt`
--

CREATE TABLE `detalle_usuario_redes_tematicas_conacyt` (
  `red_tematica_conacyt` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_reportes_tecnicos`
--

CREATE TABLE `detalle_usuario_reportes_tecnicos` (
  `institucion` varchar(45) DEFAULT NULL,
  `fecha_publicacion` varchar(45) DEFAULT NULL,
  `numero_paginas` varchar(45) DEFAULT NULL,
  `origen_reporte` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `objetivos` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `area_conocimiento_reporte` varchar(45) DEFAULT NULL,
  `campo_reporte` varchar(45) DEFAULT NULL,
  `disciplina_reporte` varchar(45) DEFAULT NULL,
  `subdisciplina_reporte` varchar(45) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_servicios_prestados`
--

CREATE TABLE `detalle_usuario_servicios_prestados` (
  `tipo_servicio` varchar(45) DEFAULT NULL,
  `servicio_prestado` varchar(45) DEFAULT NULL,
  `institucion_solicitante` varchar(45) DEFAULT NULL,
  `fecha_servicio` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_tesis_diplomados`
--

CREATE TABLE `detalle_usuario_tesis_diplomados` (
  `institucion` varchar(45) DEFAULT NULL,
  `tipo_institucion` varchar(45) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `clasificacion_institucion` varchar(45) DEFAULT NULL,
  `programa_pnpc` varchar(45) DEFAULT NULL,
  `titulo_tesis` varchar(45) DEFAULT NULL,
  `estado_tesis` varchar(45) DEFAULT NULL,
  `fecha_aprobacion_tesis` date DEFAULT NULL,
  `fecha_obtencion_grado` date DEFAULT NULL,
  `area_conocimiento_tesis` varchar(45) DEFAULT NULL,
  `campo_conocimiento_tesis` varchar(45) DEFAULT NULL,
  `disciplina_conocimiento_tesis` varchar(45) DEFAULT NULL,
  `subdisciplina_conocimiento_tesis` varchar(45) DEFAULT NULL,
  `pais_tesis` varchar(45) DEFAULT NULL,
  `grado_academico_tesis` varchar(45) DEFAULT NULL,
  `nombre_diplomado` varchar(45) DEFAULT NULL,
  `nombre_curso_asignatura` varchar(45) DEFAULT NULL,
  `ano_diplomado` varchar(45) DEFAULT NULL,
  `horas_diplomado` varchar(45) DEFAULT NULL,
  `area_conocimiento_diplomado` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_tutoria`
--

CREATE TABLE `detalle_usuario_tutoria` (
  `tipo_tutoria` varchar(45) DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `programa_educativo` varchar(45) DEFAULT NULL,
  `tipo_periodo_escolar` varchar(45) DEFAULT NULL,
  `periodo_escolar` varchar(45) DEFAULT NULL,
  `numero_estudiantes` varchar(45) DEFAULT NULL,
  `fecha_de_inicio` date DEFAULT NULL,
  `fecha_de_fin` date DEFAULT NULL,
  `tipo_de_tutelaje` varchar(45) DEFAULT NULL,
  `estado_tutoria` varchar(45) DEFAULT NULL,
  `area_conocimiento` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ap_paterno` varchar(45) DEFAULT NULL,
  `ap_materno` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `curp` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `numero_cvu` varchar(45) DEFAULT NULL,
  `orcid` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `ciudad_nacimiento` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `telefono_particular` varchar(45) DEFAULT NULL,
  `telefono_movil` varchar(45) DEFAULT NULL,
  `correo_electronico_personal` varchar(45) DEFAULT NULL,
  `correo_instititucional` varchar(45) DEFAULT NULL,
  `num_emp` varchar(45) DEFAULT NULL,
  `calle_dom` varchar(45) DEFAULT NULL,
  `numero_exterior_dom` varchar(45) DEFAULT NULL,
  `numero_interior_dom` varchar(45) DEFAULT NULL,
  `colonia_residencia` varchar(45) DEFAULT NULL,
  `pais_residencia` varchar(45) DEFAULT NULL,
  `estado_residencia` varchar(45) DEFAULT NULL,
  `codigo_postal_dom` varchar(45) DEFAULT NULL,
  `ciudad_residencia` varchar(45) DEFAULT NULL,
  `ies_adscripcion` varchar(45) DEFAULT NULL,
  `cantidad_de_ingresos` int(11) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_usuario_actualizacion_pe`
--
ALTER TABLE `detalle_usuario_actualizacion_pe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_beneficios_externos_promep`
--
ALTER TABLE `detalle_usuario_beneficios_externos_promep`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_beneficios_promep`
--
ALTER TABLE `detalle_usuario_beneficios_promep`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_carga_academica`
--
ALTER TABLE `detalle_usuario_carga_academica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_cuerpo_academico`
--
ALTER TABLE `detalle_usuario_cuerpo_academico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_desarollos_tecnologicos`
--
ALTER TABLE `detalle_usuario_desarollos_tecnologicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_desarrollo_software`
--
ALTER TABLE `detalle_usuario_desarrollo_software`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_direccion_individualizada`
--
ALTER TABLE `detalle_usuario_direccion_individualizada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_distinciones_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_distinciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_no_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_divulgacion`
--
ALTER TABLE `detalle_usuario_divulgacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_docencia`
--
ALTER TABLE `detalle_usuario_docencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_documentos_de_trabajo`
--
ALTER TABLE `detalle_usuario_documentos_de_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_estancias_investigacion`
--
ALTER TABLE `detalle_usuario_estancias_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_evaluaciones_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_evaluaciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_no_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_experiencia_laboral`
--
ALTER TABLE `detalle_usuario_experiencia_laboral`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_gestion_academica`
--
ALTER TABLE `detalle_usuario_gestion_academica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--
ALTER TABLE `detalle_usuario_gestion_cuerpos_colegiados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_grados_acad`
--
ALTER TABLE `detalle_usuario_grados_acad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_grupos_investigacion`
--
ALTER TABLE `detalle_usuario_grupos_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_innovacion`
--
ALTER TABLE `detalle_usuario_innovacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_lenguas_e_idiomas`
--
ALTER TABLE `detalle_usuario_lenguas_e_idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_lgac`
--
ALTER TABLE `detalle_usuario_lgac`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_memorias`
--
ALTER TABLE `detalle_usuario_memorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_participacion_congresos`
--
ALTER TABLE `detalle_usuario_participacion_congresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_patentes`
--
ALTER TABLE `detalle_usuario_patentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_premios_y_distinciones`
--
ALTER TABLE `detalle_usuario_premios_y_distinciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_produccion_capitulos`
--
ALTER TABLE `detalle_usuario_produccion_capitulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_produccion_libros`
--
ALTER TABLE `detalle_usuario_produccion_libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_prod_articulos`
--
ALTER TABLE `detalle_usuario_prod_articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_prod_proyectos_academicos`
--
ALTER TABLE `detalle_usuario_prod_proyectos_academicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_proyectos_investigacion`
--
ALTER TABLE `detalle_usuario_proyectos_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_redes_investigacion`
--
ALTER TABLE `detalle_usuario_redes_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_redes_tematicas_conacyt`
--
ALTER TABLE `detalle_usuario_redes_tematicas_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_reportes_tecnicos`
--
ALTER TABLE `detalle_usuario_reportes_tecnicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_servicios_prestados`
--
ALTER TABLE `detalle_usuario_servicios_prestados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_tesis_diplomados`
--
ALTER TABLE `detalle_usuario_tesis_diplomados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_tutoria`
--
ALTER TABLE `detalle_usuario_tutoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_actualizacion_pe`
--
ALTER TABLE `detalle_usuario_actualizacion_pe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_beneficios_externos_promep`
--
ALTER TABLE `detalle_usuario_beneficios_externos_promep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_beneficios_promep`
--
ALTER TABLE `detalle_usuario_beneficios_promep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_carga_academica`
--
ALTER TABLE `detalle_usuario_carga_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_cuerpo_academico`
--
ALTER TABLE `detalle_usuario_cuerpo_academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_desarollos_tecnologicos`
--
ALTER TABLE `detalle_usuario_desarollos_tecnologicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_desarrollo_software`
--
ALTER TABLE `detalle_usuario_desarrollo_software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_direccion_individualizada`
--
ALTER TABLE `detalle_usuario_direccion_individualizada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_distinciones_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_distinciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_no_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_divulgacion`
--
ALTER TABLE `detalle_usuario_divulgacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_docencia`
--
ALTER TABLE `detalle_usuario_docencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_documentos_de_trabajo`
--
ALTER TABLE `detalle_usuario_documentos_de_trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_estancias_investigacion`
--
ALTER TABLE `detalle_usuario_estancias_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_evaluaciones_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_evaluaciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_no_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_experiencia_laboral`
--
ALTER TABLE `detalle_usuario_experiencia_laboral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_gestion_academica`
--
ALTER TABLE `detalle_usuario_gestion_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--
ALTER TABLE `detalle_usuario_gestion_cuerpos_colegiados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_grados_acad`
--
ALTER TABLE `detalle_usuario_grados_acad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_grupos_investigacion`
--
ALTER TABLE `detalle_usuario_grupos_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_innovacion`
--
ALTER TABLE `detalle_usuario_innovacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_lenguas_e_idiomas`
--
ALTER TABLE `detalle_usuario_lenguas_e_idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_lgac`
--
ALTER TABLE `detalle_usuario_lgac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_memorias`
--
ALTER TABLE `detalle_usuario_memorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_participacion_congresos`
--
ALTER TABLE `detalle_usuario_participacion_congresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_patentes`
--
ALTER TABLE `detalle_usuario_patentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_premios_y_distinciones`
--
ALTER TABLE `detalle_usuario_premios_y_distinciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_produccion_capitulos`
--
ALTER TABLE `detalle_usuario_produccion_capitulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_produccion_libros`
--
ALTER TABLE `detalle_usuario_produccion_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_prod_articulos`
--
ALTER TABLE `detalle_usuario_prod_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_prod_proyectos_academicos`
--
ALTER TABLE `detalle_usuario_prod_proyectos_academicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_proyectos_investigacion`
--
ALTER TABLE `detalle_usuario_proyectos_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_redes_investigacion`
--
ALTER TABLE `detalle_usuario_redes_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_redes_tematicas_conacyt`
--
ALTER TABLE `detalle_usuario_redes_tematicas_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_reportes_tecnicos`
--
ALTER TABLE `detalle_usuario_reportes_tecnicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_servicios_prestados`
--
ALTER TABLE `detalle_usuario_servicios_prestados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_tesis_diplomados`
--
ALTER TABLE `detalle_usuario_tesis_diplomados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_tutoria`
--
ALTER TABLE `detalle_usuario_tutoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
