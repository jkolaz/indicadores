-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2016 a las 18:40:46
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_administrador`
--

INSERT INTO `gc_administrador` (`adm_id`, `adm_correo`, `adm_password`, `adm_nick`, `adm_nombre`, `adm_apellidos`, `adm_fecha_reg`, `adm_estado`, `adm_ta_id`, `adm_sed_id`) VALUES
(1, 'alejandro.lozada@sanjuandedios', 'e10adc3949ba59abbe56e057f20f883e', 'alejandro', 'Alejandro', 'Lozada', '2016-05-07 04:21:32', 1, 1, 1);

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
  `pag_mod_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_pagina`
--

INSERT INTO `gc_pagina` (`pag_id`, `pag_nombre`, `pag_url`, `pag_icon`, `pag_estado`, `pag_fecha_reg`, `pag_mod_id`) VALUES
(1, 'Módulos del sistema', 'modulo/index', 'fa-folder', 1, '2016-05-23 22:08:09', 1),
(2, 'Tipo Administrador', 'tipoAdmin/index', 'fa-user', 1, '2016-05-23 22:08:09', 1),
(3, 'Administrador', 'administrador/index', 'fa-users', 1, '2016-05-23 22:09:14', 1),
(4, 'Log de actividades', 'log/index', 'fa-bug', 1, '2016-05-23 22:09:14', 1),
(5, 'Sedes', 'sede/index', 'fa-building', 1, '2016-05-23 22:16:42', 2);

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
(8, 1, '2016-05-24 02:37:29', 0, 1, 1, 5, 2),
(9, 1, '2016-05-24 02:37:29', 0, 1, 1, 3, 2),
(10, 1, '2016-05-24 02:37:30', 0, 1, 1, 4, 2),
(11, 1, '2016-05-24 02:37:30', 0, 1, 1, 1, 2),
(12, 1, '2016-05-24 02:37:31', 0, 1, 1, 2, 2),
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_sede`
--

INSERT INTO `gc_sede` (`sed_id`, `sed_nombre`, `sed_fecha_reg`, `sed_estado`, `sed_url`) VALUES
(1, 'Principal', '2016-05-23 22:06:05', 1, 'principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc_tipo_admin`
--

CREATE TABLE IF NOT EXISTS `gc_tipo_admin` (
`ta_id` int(11) NOT NULL,
  `ta_nombre` varchar(30) NOT NULL,
  `ta_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ta_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gc_tipo_admin`
--

INSERT INTO `gc_tipo_admin` (`ta_id`, `ta_nombre`, `ta_fecha_reg`, `ta_estado`) VALUES
(1, 'Administrador', '2016-05-10 01:56:10', 1),
(2, 'Administrador Web', '2016-05-10 01:56:10', 1);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gc_administrador`
--
ALTER TABLE `gc_administrador`
MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
MODIFY `sed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `gc_tipo_admin`
--
ALTER TABLE `gc_tipo_admin`
MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
