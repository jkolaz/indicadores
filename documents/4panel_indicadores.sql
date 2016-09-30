-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2016 a las 18:26:32
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `4panel_indicadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_administrador`
--

CREATE TABLE IF NOT EXISTS `gc_administrador` (
`adm_id` int(11) NOT NULL,
  `adm_correo` varchar(30) NOT NULL,
  `adm_password` varchar(50) NOT NULL,
  `adm_nick` varchar(20) NOT NULL,
  `adm_nombre` varchar(30) NOT NULL,
  `adm_apellidos` varchar(40) NOT NULL,
  `adm_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adm_estado` int(1) NOT NULL DEFAULT '1',
  `adm_ta_id` int(11) NOT NULL DEFAULT '0',
  `adm_sed_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_administrador`
--

INSERT INTO `gc_administrador` (`adm_id`, `adm_correo`, `adm_password`, `adm_nick`, `adm_nombre`, `adm_apellidos`, `adm_fecha_reg`, `adm_estado`, `adm_ta_id`, `adm_sed_id`) VALUES
(1, 'elvin.mejia@sanjuandedios.pe', 'e10adc3949ba59abbe56e057f20f883e', 'elvin', 'Elvin Anderson', 'Mejía Paucar', '2016-05-07 04:21:32', 1, 1, 1),
(3, 'invitados@sanjuandedios.pe', 'e10adc3949ba59abbe56e057f20f883e', 'invitados', 'Invitados', 'invitados', '2016-09-14 20:09:42', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_modulo`
--

CREATE TABLE IF NOT EXISTS `gc_modulo` (
`mod_id` int(11) NOT NULL,
  `mod_nombre` varchar(45) NOT NULL,
  `mod_url` varchar(50) NOT NULL,
  `mod_icon` varchar(30) NOT NULL,
  `mod_estado` int(1) NOT NULL DEFAULT '1',
  `mod_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mod_is_need_sede` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_modulo`
--

INSERT INTO `gc_modulo` (`mod_id`, `mod_nombre`, `mod_url`, `mod_icon`, `mod_estado`, `mod_fecha_reg`, `mod_is_need_sede`) VALUES
(1, 'Seguridad', 'seguridad', 'fa-key', 1, '2016-05-23 22:07:40', 0),
(2, 'Configuracion web', 'configuracion', 'fa-cog', 1, '2016-05-23 22:10:33', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_pagina`
--

CREATE TABLE IF NOT EXISTS `gc_pagina` (
`pag_id` int(11) NOT NULL,
  `pag_nombre` varchar(45) NOT NULL,
  `pag_url` varchar(50) NOT NULL,
  `pag_icon` varchar(20) NOT NULL,
  `pag_estado` int(1) NOT NULL DEFAULT '1',
  `pag_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pag_mod_id` int(11) NOT NULL DEFAULT '0',
  `pag_modulo_url` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_pagina`
--

INSERT INTO `gc_pagina` (`pag_id`, `pag_nombre`, `pag_url`, `pag_icon`, `pag_estado`, `pag_fecha_reg`, `pag_mod_id`, `pag_modulo_url`) VALUES
(1, 'Módulos del sistema', 'modulo/index', 'fa-folder', 1, '2016-05-23 22:08:09', 1, ''),
(2, 'Tipo Administrador', 'tipoAdmin/index', 'fa-user', 1, '2016-05-23 22:08:09', 1, ''),
(3, 'Administrador', 'administrador/index', 'fa-users', 1, '2016-05-23 22:09:14', 1, ''),
(4, 'Log de actividades', 'log/index', 'fa-bug', 1, '2016-05-23 22:09:14', 1, ''),
(5, 'Sedes', 'sede/index', 'fa-building', 1, '2016-05-23 22:16:42', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_permiso`
--

CREATE TABLE IF NOT EXISTS `gc_permiso` (
`per_id` int(11) NOT NULL,
  `per_crear` int(1) NOT NULL DEFAULT '1',
  `per_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `per_estado` int(1) NOT NULL DEFAULT '1',
  `per_modificar` int(1) NOT NULL DEFAULT '1',
  `per_eliminar` int(1) NOT NULL DEFAULT '1',
  `per_pag_id` int(11) NOT NULL DEFAULT '0',
  `per_ta_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_permiso`
--

INSERT INTO `gc_permiso` (`per_id`, `per_crear`, `per_fecha_reg`, `per_estado`, `per_modificar`, `per_eliminar`, `per_pag_id`, `per_ta_id`) VALUES
(1, 1, '2016-05-23 22:31:05', 1, 1, 1, 2, 1),
(3, 1, '2016-05-23 22:31:25', 1, 1, 1, 5, 1),
(4, 1, '2016-05-23 22:31:26', 1, 1, 1, 3, 1),
(5, 1, '2016-05-23 22:31:27', 1, 1, 1, 4, 1),
(6, 1, '2016-05-23 22:31:28', 1, 1, 1, 1, 1),
(8, 1, '2016-05-24 02:37:29', 1, 1, 1, 5, 2),
(9, 1, '2016-05-24 02:37:29', 0, 1, 1, 3, 2),
(10, 1, '2016-05-24 02:37:30', 1, 1, 1, 4, 2),
(11, 1, '2016-05-24 02:37:30', 0, 1, 1, 1, 2),
(12, 1, '2016-05-24 02:37:31', 1, 1, 1, 2, 2),
(28, 1, '2016-05-31 04:42:47', 1, 1, 1, 5, 3),
(35, 1, '2016-05-31 04:42:54', 1, 1, 1, 3, 3),
(36, 1, '2016-05-31 04:42:55', 1, 1, 1, 4, 3),
(37, 1, '2016-05-31 04:42:55', 1, 1, 1, 1, 3),
(38, 1, '2016-05-31 04:42:56', 1, 1, 1, 2, 3),
(50, 1, '2016-06-16 05:41:31', 1, 1, 1, 5, 4),
(51, 1, '2016-06-16 05:55:09', 1, 1, 1, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_sede`
--

CREATE TABLE IF NOT EXISTS `gc_sede` (
`sed_id` int(11) NOT NULL,
  `sed_nombre` varchar(30) NOT NULL,
  `sed_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sed_estado` int(1) NOT NULL DEFAULT '1',
  `sed_url` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_sede`
--

INSERT INTO `gc_sede` (`sed_id`, `sed_nombre`, `sed_fecha_reg`, `sed_estado`, `sed_url`) VALUES
(1, 'Principal', '2016-05-23 22:06:05', 1, 'principal'),
(3, 'Piura', '2016-09-14 17:37:52', 1, 'piura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_tipo_admin`
--

CREATE TABLE IF NOT EXISTS `gc_tipo_admin` (
`ta_id` int(11) NOT NULL,
  `ta_nombre` varchar(30) NOT NULL,
  `ta_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ta_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_tipo_admin`
--

INSERT INTO `gc_tipo_admin` (`ta_id`, `ta_nombre`, `ta_fecha_reg`, `ta_estado`) VALUES
(1, 'Administrador', '2016-05-10 01:56:10', 1),
(2, 'Administrador sedes', '2016-05-10 01:56:10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_cie10`
--

CREATE TABLE IF NOT EXISTS `ind_cie10` (
`cie_id` int(11) NOT NULL,
  `cie_codigo` varchar(20) NOT NULL,
  `cie_detalle` text NOT NULL,
  `cie_sexo` varchar(10) NOT NULL,
  `cie_edad` varchar(20) NOT NULL,
  `cie_edad_seti_ipress` varchar(250) NOT NULL,
  `cie_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cie_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_consulta_externa`
--

CREATE TABLE IF NOT EXISTS `ind_consulta_externa` (
`ce_id` int(11) NOT NULL,
  `ce_dni_paciente` varchar(8) NOT NULL,
  `ce_edad_paciente` int(2) NOT NULL,
  `ce_dni_profesional` varchar(8) NOT NULL,
  `ce_especialidad` varchar(50) NOT NULL,
  `ce_fecha_atencion` date NOT NULL,
  `ce_cie_10_principal` varchar(50) NOT NULL,
  `ce_aseguradora` varchar(50) NOT NULL,
  `ce_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ce_estado` int(1) NOT NULL DEFAULT '1',
  `ce_pac_id` int(11) NOT NULL,
  `ce_pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_especialidad`
--

CREATE TABLE IF NOT EXISTS `ind_especialidad` (
`esp_id` int(11) NOT NULL,
  `esp_root` int(11) NOT NULL DEFAULT '0',
  `esp_descripcion` varchar(50) NOT NULL,
  `esp_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `esp_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ind_especialidad`
--

INSERT INTO `ind_especialidad` (`esp_id`, `esp_root`, `esp_descripcion`, `esp_fecha_reg`, `esp_estado`) VALUES
(1, 0, 'ATENCIONES MÉDICAS', '2016-09-30 23:00:59', 1),
(2, 0, 'ATENCIONES NO MÉDICAS', '2016-09-30 23:00:59', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_paciente`
--

CREATE TABLE IF NOT EXISTS `ind_paciente` (
`pac_id` int(11) NOT NULL,
  `pac_num_historia_clinica` varchar(50) NOT NULL,
  `pac_tipo_doc` int(1) NOT NULL DEFAULT '1' COMMENT '1: DNI, 2 RUC, 3: CE(Carnet de extranjeria)',
  `pac_num_doc` varchar(20) NOT NULL,
  `pac_sexo` int(1) NOT NULL DEFAULT '1' COMMENT '1: Masculino, 2: Femenino',
  `pac_fecha_nac` date NOT NULL,
  `pac_tipo_aseguradora` varchar(50) NOT NULL,
  `pac_pais` varchar(50) NOT NULL,
  `pac_departamento` varchar(50) NOT NULL,
  `pac_provincia` varchar(50) NOT NULL,
  `pac_distrito` varchar(50) NOT NULL,
  `pac_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pac_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_profesional`
--

CREATE TABLE IF NOT EXISTS `ind_profesional` (
`pro_id` int(11) NOT NULL,
  `pro_datos` varchar(100) NOT NULL,
  `pro_num_doc` varchar(20) NOT NULL,
  `pro_profesion` varchar(50) NOT NULL,
  `pro_num_colegiatura` varchar(20) NOT NULL,
  `pro_servicio` varchar(50) NOT NULL,
  `pro_especialidad` varchar(50) NOT NULL,
  `pro_mes_programacion` int(2) NOT NULL,
  `pro_anio_programacion` int(4) NOT NULL,
  `pro_tipo_programacion` varchar(50) NOT NULL,
  `pro_fecha_programacion` date NOT NULL,
  `pro_horas_programacion` int(2) NOT NULL,
  `pro_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pro_estado` int(1) NOT NULL DEFAULT '1',
  `pro_esp_id` int(11) NOT NULL,
  `pro_ser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_servicio`
--

CREATE TABLE IF NOT EXISTS `ind_servicio` (
`ser_id` int(11) NOT NULL,
  `ser_descripcion` varchar(50) NOT NULL,
  `ser_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ser_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ind_servicio`
--

INSERT INTO `ind_servicio` (`ser_id`, `ser_descripcion`, `ser_fecha_reg`, `ser_estado`) VALUES
(1, 'CONSULTA EXTERNA', '2016-09-30 23:11:44', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gc_administrador`
--
ALTER TABLE `gc_administrador`
 ADD PRIMARY KEY (`adm_id`), ADD KEY `adm_ta_id` (`adm_ta_id`), ADD KEY `adm_sed_id` (`adm_sed_id`);

--
-- Indices de la tabla `gc_modulo`
--
ALTER TABLE `gc_modulo`
 ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `gc_pagina`
--
ALTER TABLE `gc_pagina`
 ADD PRIMARY KEY (`pag_id`), ADD KEY `pag_mod_id` (`pag_mod_id`);

--
-- Indices de la tabla `gc_permiso`
--
ALTER TABLE `gc_permiso`
 ADD PRIMARY KEY (`per_id`), ADD KEY `per_ta_id` (`per_ta_id`), ADD KEY `per_pag_id` (`per_pag_id`) USING BTREE;

--
-- Indices de la tabla `gc_sede`
--
ALTER TABLE `gc_sede`
 ADD PRIMARY KEY (`sed_id`);

--
-- Indices de la tabla `gc_tipo_admin`
--
ALTER TABLE `gc_tipo_admin`
 ADD PRIMARY KEY (`ta_id`);

--
-- Indices de la tabla `ind_cie10`
--
ALTER TABLE `ind_cie10`
 ADD PRIMARY KEY (`cie_id`);

--
-- Indices de la tabla `ind_consulta_externa`
--
ALTER TABLE `ind_consulta_externa`
 ADD PRIMARY KEY (`ce_id`), ADD KEY `ce_pac_id` (`ce_pac_id`), ADD KEY `ce_pro_id` (`ce_pro_id`);

--
-- Indices de la tabla `ind_especialidad`
--
ALTER TABLE `ind_especialidad`
 ADD PRIMARY KEY (`esp_id`);

--
-- Indices de la tabla `ind_paciente`
--
ALTER TABLE `ind_paciente`
 ADD PRIMARY KEY (`pac_id`);

--
-- Indices de la tabla `ind_profesional`
--
ALTER TABLE `ind_profesional`
 ADD PRIMARY KEY (`pro_id`), ADD KEY `pro_esp_id` (`pro_esp_id`), ADD KEY `pro_ser_id` (`pro_ser_id`);

--
-- Indices de la tabla `ind_servicio`
--
ALTER TABLE `ind_servicio`
 ADD PRIMARY KEY (`ser_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gc_administrador`
--
ALTER TABLE `gc_administrador`
MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `gc_modulo`
--
ALTER TABLE `gc_modulo`
MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `gc_pagina`
--
ALTER TABLE `gc_pagina`
MODIFY `pag_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `gc_permiso`
--
ALTER TABLE `gc_permiso`
MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `gc_sede`
--
ALTER TABLE `gc_sede`
MODIFY `sed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `gc_tipo_admin`
--
ALTER TABLE `gc_tipo_admin`
MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ind_cie10`
--
ALTER TABLE `ind_cie10`
MODIFY `cie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ind_consulta_externa`
--
ALTER TABLE `ind_consulta_externa`
MODIFY `ce_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ind_especialidad`
--
ALTER TABLE `ind_especialidad`
MODIFY `esp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ind_paciente`
--
ALTER TABLE `ind_paciente`
MODIFY `pac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ind_profesional`
--
ALTER TABLE `ind_profesional`
MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ind_servicio`
--
ALTER TABLE `ind_servicio`
MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
