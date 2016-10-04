-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2016 a las 18:28:42
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_archivo`
--

CREATE TABLE IF NOT EXISTS `ind_archivo` (
`arc_id` int(11) NOT NULL,
  `arc_nombre` varchar(50) NOT NULL,
  `arc_type` varchar(10) NOT NULL,
  `arc_num_lines_read` int(11) NOT NULL DEFAULT '0',
  `arc_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `arc_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_cie10`
--

CREATE TABLE IF NOT EXISTS `ind_cie10` (
`cie_id` int(11) NOT NULL,
  `cie_codigo` varchar(20) NOT NULL,
  `cie_detalle` text NOT NULL,
  `cie_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cie_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=12450 DEFAULT CHARSET=utf8;

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
  `ce_pro_id` int(11) NOT NULL,
  `ce_cie_id` int(11) NOT NULL,
  `ce_sed_id` int(11) NOT NULL,
  `ce_peri_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8989 DEFAULT CHARSET=utf8;

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
  `pac_estado` int(1) NOT NULL DEFAULT '1',
  `pac_nac_anio` varchar(4) NOT NULL,
  `pac_nac_mes` varchar(2) NOT NULL,
  `pac_nac_dia` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6401 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ind_periodo`
--

CREATE TABLE IF NOT EXISTS `ind_periodo` (
`peri_id` int(11) NOT NULL,
  `peri_fecha` date NOT NULL,
  `peri_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `peri_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
-- Indices de la tabla `ind_archivo`
--
ALTER TABLE `ind_archivo`
 ADD PRIMARY KEY (`arc_id`);

--
-- Indices de la tabla `ind_cie10`
--
ALTER TABLE `ind_cie10`
 ADD PRIMARY KEY (`cie_id`);

--
-- Indices de la tabla `ind_consulta_externa`
--
ALTER TABLE `ind_consulta_externa`
 ADD PRIMARY KEY (`ce_id`), ADD KEY `ce_pac_id` (`ce_pac_id`), ADD KEY `ce_pro_id` (`ce_pro_id`), ADD KEY `ce_cie_id` (`ce_cie_id`), ADD KEY `ce_sed_id` (`ce_sed_id`), ADD KEY `ce_peri_id` (`ce_peri_id`);

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
-- Indices de la tabla `ind_periodo`
--
ALTER TABLE `ind_periodo`
 ADD PRIMARY KEY (`peri_id`);

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
MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `gc_pagina`
--
ALTER TABLE `gc_pagina`
MODIFY `pag_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `gc_permiso`
--
ALTER TABLE `gc_permiso`
MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
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
-- AUTO_INCREMENT de la tabla `ind_archivo`
--
ALTER TABLE `ind_archivo`
MODIFY `arc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ind_cie10`
--
ALTER TABLE `ind_cie10`
MODIFY `cie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12450;
--
-- AUTO_INCREMENT de la tabla `ind_consulta_externa`
--
ALTER TABLE `ind_consulta_externa`
MODIFY `ce_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8989;
--
-- AUTO_INCREMENT de la tabla `ind_especialidad`
--
ALTER TABLE `ind_especialidad`
MODIFY `esp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ind_paciente`
--
ALTER TABLE `ind_paciente`
MODIFY `pac_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6401;
--
-- AUTO_INCREMENT de la tabla `ind_periodo`
--
ALTER TABLE `ind_periodo`
MODIFY `peri_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
