-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2019 a las 06:49:29
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `nombre` text NOT NULL,
  `titulo` varchar(9999) NOT NULL,
  `text` varchar(9999) NOT NULL,
  `pie_de_pagina` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pub`
--

CREATE TABLE `pub` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `tex` varchar(5000) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pub`
--

INSERT INTO `pub` (`id`, `titulo`, `tex`, `color`, `fecha`) VALUES
(0, 'jlkj', 'ñjlkjñlk', 'warning', '2019-05-23'),
(1, 'nombre', 'bla bla bla', 'primary', '2019-04-10'),
(2, 'gfsfv', 'fvfdsav', 'warning', '2019-04-16'),
(3, 'fdsvs', 'fdsvsxfds', 'light', '2019-04-20'),
(4, 'hola', 'fswgftrgwfddfehryrgefwdqfewffffrffffffekjfdshfdfjhfdhfdshfhjdfjfdhdfjdjfdhfhjahjdshfdshfjdhjjfhjfhjdsahjhjfhjhjfdhjahjhjhjfdsaahjfdsahjfdhjkdfshkjsafhkjdshfjdshfkjdshfkjhsfjkshfkjsdhfkjdshfjdshfjdshfkjdshfdkjshfjdshfjsdhfkjdshfjkdshfkjsdhfdshfkjhdsfkjdshfjsdhfjdskhfkjhjdshdfjsfhjsdfhdjfhjdhfjdhfjdhfkjdshfjdhfjdshfkjsdhfjdsfhjdshfdsjfhdsjfhdshjfhfjdshfdsjfhdskjfhdsjfhjdshfdsjfhjdshfjsdhfjsdhfjdshfjdsfhkjdsfhdsjfhkjdsfhskfjhdsfkjdshfkjshdfkjdfhdskjfhkjdsfhkjdsfhkjdhfskjfhkjdshfkjdfhdskjfhdsjkfhdsj', '', '2019-05-26'),
(7, 'hjkkj', 'kjm', 'light', '2019-04-20'),
(8, 'nuevo', 'nuevo nuevo nuevo', 'primary', '2019-05-31'),
(9, 'medio', 'medio medio', 'light', '2019-05-15'),
(10, 'viejo', 'viejo viejo', 'warning', '2019-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_u` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_u`, `usuario`, `nombre`, `contra`) VALUES
(1, 'admin', 'leonardo', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
