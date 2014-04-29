-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2014 a las 23:24:05
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alfonsotest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'El tÃ­tulo del site',
  `site_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'La descripciÃ³n breve del site',
  `google_analytics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'El cÃ³digo de Google Analytics',
  `enable_comments` tinyint(1) DEFAULT '1' COMMENT 'Permitir comentarios en todos los contenidos que los tengan',
  `comments_moderate` tinyint(1) DEFAULT '1' COMMENT 'Comentarios moderados',
  `allow_public_comments` tinyint(1) DEFAULT '1' COMMENT 'Permitir comentarios pÃºblicos',
  `page_format_titles` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'El formato de los tÃ­tulos de las pÃ¡ginas',
  `content_format_titles` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'El formato de los tÃ­tulos de las pÃ¡ginas dinÃ¡micas',
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'El theme',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `configurations`
--

INSERT INTO `configurations` (`id`, `site_title`, `site_description`, `google_analytics`, `enable_comments`, `comments_moderate`, `allow_public_comments`, `page_format_titles`, `content_format_titles`, `theme`, `modified`) VALUES
(1, 'AquÃ­ estamos', 'asdfasdf', NULL, 0, 1, 1, '', '', 'Basic', '2014-04-07 17:53:51');
