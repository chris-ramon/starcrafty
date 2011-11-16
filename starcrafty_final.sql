-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2011 a las 02:52:42
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `starcrafty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auspiciadores`
--

CREATE TABLE IF NOT EXISTS `auspiciadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auspiciador` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `auspiciadores`
--

INSERT INTO `auspiciadores` (`id`, `auspiciador`, `imagen`) VALUES
(1, 'razer', 'http://localhost/starcrafty/uploads/razer.jpg'),
(2, 'monster', 'http://localhost/starcrafty/uploads/monster.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `id_torneo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_torneo` (`id_torneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `comentarios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_torneo` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `codigo_pago` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_torneo` (`id_torneo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=27 ;

--
-- Volcar la base de datos para la tabla `reservas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `tag` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'miraflores'),
(3, 'perú'),
(4, 'drago'),
(6, '2013'),
(7, 'sc2'),
(8, 'sc2lover'),
(9, 'wootz'),
(10, 'arenales'),
(11, '2012'),
(12, 'fastel'),
(14, '2133'),
(15, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE IF NOT EXISTS `torneos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `aprobado` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `organizador` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_torneo` datetime NOT NULL,
  `num_jugadores` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `torneos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos_auspiciadores`
--

CREATE TABLE IF NOT EXISTS `torneos_auspiciadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_torneo` int(11) NOT NULL,
  `id_auspiciador` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_torneo` (`id_torneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `torneos_auspiciadores`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos_tags`
--

CREATE TABLE IF NOT EXISTS `torneos_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_torneo` int(11) NOT NULL,
  `id_tag` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_torneo` (`id_torneo`),
  KEY `id_tag` (`id_tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=29 ;

--
-- Volcar la base de datos para la tabla `torneos_tags`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `password2` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `id_battlenet` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `code_number` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `link_battlenet` varchar(170) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_address` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password2`, `id_battlenet`, `code_number`, `link_battlenet`, `email_address`, `nombre`, `apellido`, `rol`) VALUES
(19, 'system', '0be5a6c82893ecaa8bb29bd36831e457', '', '', NULL, NULL, NULL, NULL, NULL, 'admin'),
(20, 'chris', '6b34fe24ac2ff8103f6fce1f0da2ef57', '', '1234', NULL, NULL, NULL, NULL, NULL, 'gamer'),
(21, 'carlitos123', '014ba49bee25f76a73038add295f4204', '', '12312412312', NULL, NULL, NULL, NULL, NULL, 'gamer'),
(22, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', '', 'asdasdasd', NULL, NULL, NULL, NULL, NULL, 'gamer');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_torneo`) REFERENCES `torneos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_torneo`) REFERENCES `torneos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD CONSTRAINT `torneos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `torneos_auspiciadores`
--
ALTER TABLE `torneos_auspiciadores`
  ADD CONSTRAINT `torneos_auspiciadores_ibfk_1` FOREIGN KEY (`id_torneo`) REFERENCES `torneos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `torneos_tags`
--
ALTER TABLE `torneos_tags`
  ADD CONSTRAINT `torneos_tags_ibfk_1` FOREIGN KEY (`id_torneo`) REFERENCES `torneos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `torneos_tags_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
