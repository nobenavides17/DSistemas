-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2016 a las 00:13:22
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `valuo`
--
CREATE DATABASE IF NOT EXISTS `valuo` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `valuo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_parametro`
--

CREATE TABLE IF NOT EXISTS `detalle_parametro` (
`id` int(11) NOT NULL,
  `id_parametro` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `detalle` varchar(300) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_parametro`
--

INSERT INTO `detalle_parametro` (`id`, `id_parametro`, `detalle`) VALUES
(1, '1', 'ACOMI'),
(2, '2', 'Industrial'),
(3, '3', '100%'),
(4, '4', 'Venta'),
(5, '5', 'Acera granulada con piscas de oro blanco y esmeraldas incrustadas'),
(6, '6', 'San Miguel'),
(7, '7', 'Acera granulada con piscas de oro blanco y esmeraldas incrustadas'),
(8, '8', 'Barra solida de aluminio que necesito para una tarea y que no encuentro'),
(9, '9', 'OK'),
(11, '4', 'Hipoteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE IF NOT EXISTS `parametro` (
`id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `parametro`
--

INSERT INTO `parametro` (`id`, `nombre`) VALUES
(1, 'Financieras'),
(2, 'Tipos de Propiedades'),
(3, 'Derechos'),
(4, 'Finalidades del Valuo'),
(5, 'Departamentos'),
(6, 'Municipios'),
(7, 'Tipos de Recubrimientos'),
(8, 'Delimitaciones de los Recubrimientos'),
(9, 'Aguas Negras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `password`) VALUES
(1, 'Nelson Orlando Benavides', 'benavides', 'pass'),
(2, 'Norma Alicia Martinez', 'martinez', 'pass'),
(3, 'Jessica Elizabeth Gamez', 'gamez', 'pass'),
(4, 'Kevin Eduardo Claros ', 'claros', 'pass');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_parametro`
--
ALTER TABLE `detalle_parametro`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parametro`
--
ALTER TABLE `parametro`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_parametro`
--
ALTER TABLE `detalle_parametro`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `parametro`
--
ALTER TABLE `parametro`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
